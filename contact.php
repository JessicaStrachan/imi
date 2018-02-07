<?php
/**
* Template Name: Contact page
*/
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
  <div class="central-paragraph">
		<p>If you have any queries, media, press or just want to get in touch please contact us through the form below. We’ll endeavour to get back to you as soon as possible.</p>
	</div>
	<div class="form-tabs">
    <ul>
		  <button class="form-tabs__button btn--tabs btn btn--secondary js-contact-tab tab-active" data-behaviour="toggle-button" href="#researchers">Research Requests</button>
      <button class="form-tabs__button btn--tabs btn btn--secondary js-media-tab" data-behaviour="toggle-button" href="#media">Media Requests</button>
    </ul>
	</div>

    <section class="form form--active" id="researchers" data-behaviour="toggle-content">
        <?php echo $contact_page->format_content($contact_page->field('contact_us_contact_shortcode')); ?>
    </section>

    <section class="form" id="media" data-behaviour="toggle-content">
      <?php echo $contact_page->format_content($contact_page->field('contact_us_media_shortcode')); ?>
    </section>

</section>

<?php
get_footer();
