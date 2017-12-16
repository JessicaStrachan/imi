<?php
/**
* Template Name: Contact page
*/
 
//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

global $response;

if($type == "success") $response = "<div class='success'>{$message}</div>";
else $response = "<div class='error'>{$message}</div>";

}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";
 
//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];
 
//php mailer variables
$to = get_option('admin_email');
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {
 
    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
        //validate presence of name and message
        if(empty($name) || empty($message)){
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

$page = new CMB2Fields(get_the_ID());

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="container">
    <h2 class="quote__title"><?php echo $page->format_content($page->field('page_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $page->format_content($page->field('page_quote_author_text')); ?></h2>
  </div>
</section>

<section class="container">
	<h2 class="heading--one heading--bold heading--primary heading--asset u-align-center">Contact Us</h2>
	<div class="address">
		<div class="address__links">
			<a class="address__link" href="mailto:admin@inclusivemosqueinitiative.org">admin@inclusivemosqueinitiative.org</a>
		</div>
	</div>
	<div class="form-tabs">
		<button class="form-tabs__button btn--tabs btn btn--secondary js-contact-tab">Contact</button>
		<button class="form-tabs__button btn--tabs btn btn--secondary js-media-tab">Media Requests</button>
		<button class="form-tabs__button btn--tabs btn btn--secondary js-research-tab">Research Requests</button>
	</div>
	<div class="central-paragraph">
		<p>Lorem ipsum dolor sit amet, mea id epicuri patrioque hendrerit, id quot perpetua iracundia vix, an suavitate reprimique pri. Id dico discere disputando pro. Sumo sonet eu pri. Ne sit omnes mnesarchum, vix munere impetus molestie ut. Vidisse eruditi quaerendum pri at, soleat aperiri omnesque mel no.</p>
	</div>

</section>

<?php
get_footer();
