<?php
/**
* Template Name: Contact page
*/

//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

global $response;

if($type == "success") $response = "<div class='success'><p>{$message}</p></div>";
else $response = "<div class='error'><p>{$message}</p></div>";

}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

//user posted variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];
$human = $_POST['human'];

//php mailer variables
$to = get_option('admin_email');
$subject = $first_name . " " . $last_name . ", " . $telephone . ", sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {

    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
        //validate presence of name and message
        if(empty($first_name) || empty($message) || empty($last_name)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
            $sent = wp_mail($to, $subject, strip_tags($message), $headers);
            if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
            else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
    }
  }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

get_header();

$contact_page = new CMB2Fields(get_the_ID());

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="quote__inner">
    <h2 class="quote__title"><?php echo $contact_page->format_content($contact_page->field('contact_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $contact_page->format_content($contact_page->field('contact_quote_author_text')); ?></h2>
  </div>
</section>

<section class="container">
	<h2 class="heading--one heading--bold heading--primary u-align-center">Contact Us</h2>
	<div class="address">
		<div class="address__links">
			<a class="address__link" href="mailto:admin@inclusivemosqueinitiative.org">admin@inclusivemosqueinitiative.org</a>
		</div>
	</div>
	<!-- <div class="form-tabs">
    <ul>
		  <button class="form-tabs__button btn--tabs btn btn--secondary js-contact-tab tab-active" data-behaviour="toggle-button" href="#contact">Contact</button>
      <button class="form-tabs__button btn--tabs btn btn--secondary js-media-tab" data-behaviour="toggle-button" href="#media">Media Requests</button>
    </ul>
	</div> -->
	<div class="central-paragraph">
		<p>If you have any queries, media, press or just want to get in touch please contact us through the form below. We’ll endeavour to get back to you as soon as possible.</p>
	</div>

    <section class="form form--active" id="contact" data-behaviour="toggle-content">
        <?php echo $contact_page->format_content($contact_page->field('contact_us_contact_shortcode')); ?>
    </section>

</section>

<?php
get_footer();
