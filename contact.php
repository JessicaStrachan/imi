<?php
/**
* Template Name: Contact page
*/
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
	<h2 class="content-title">Contact Us</h2>
	<div class="address">
		<p>26 The Glade</p>
		<p>Mytchett</p>
		<p>Camberley</p>
		<p>Surrey</p>
		<p>GU16 6BG</p>
		<div class="address__links">
			<a class="address__link" href="tel:+447713434157">07713434157</a>
			<a class="address__link" href="mailto:hello@jessmadeline.com">hello@jessmadeline.com</a>
		</div>
	</div>
	<div class="form-tabs">
		<button class="form-tabs__button btn btn--secondary">Contact</button>
		<button class="form-tabs__button btn btn--secondary">Media Requests</button>
		<button class="form-tabs__button btn btn--secondary">Research Requests</button>
	</div>
	<div class="central-paragraph">
		<p>Lorem ipsum dolor sit amet, mea id epicuri patrioque hendrerit, id quot perpetua iracundia vix, an suavitate reprimique pri. Id dico discere disputando pro. Sumo sonet eu pri. Ne sit omnes mnesarchum, vix munere impetus molestie ut. Vidisse eruditi quaerendum pri at, soleat aperiri omnesque mel no.</p>
	</div>
	<form class="form grid">
		<input class="form__input col-6" type="text" name="name" placeholder="name">
		<input class="form__input form__input--no-right-space col-6" type="text" name="surname" placeholder="surname">
		<input class="form__input col-6" type="text" name="email" placeholder="email">
		<input class="form__input form__input--no-right-space col-6" type="text" name="number" placeholder="contact number">
		<textarea class="form__input form__input--full-width form__input--no-right-space col-12" type="textarea" name="summary-proposal" maxlength="3000" rows="8" placeholder="summary of research proposal (no more than 500 words please)"></textarea>
		<textarea class="form__input col-6" type="textarea" name="summary-proposal" maxlength="3000" rows="8" placeholder="summary of duration, methodology, and type of access requested"></textarea>
		<textarea class="form__input form__input--no-right-space col-6" type="textarea" name="summary-others" maxlength="3000" rows="8" placeholder="What other sites, groups or organisations have been approached for this research?"></textarea>
		<input class="form__input col-6" type="text" name="institution" placeholder="institution/affiliation">
		<input class="form__input form__input--no-right-space col-6" type="text" name="supervisors" placeholder="man supervisors (if appropriate)">
		<textarea class="form__input col-6" type="textarea" name="outputs" maxlength="3000" rows="8" placeholder="Potential/predicted outputs (if appropriate)"></textarea>
		<textarea class="form__input form__input--no-right-space col-6" type="textarea" name="interest" maxlength="3000" rows="8" placeholder="Researchers interest in IMI"></textarea>
		<input class="form__btn btn btn--secondary" type="submit" name="submit">
	</form>
  <form class="form grid">
    <input class="form__input col-6" type="text" name="name" placeholder="name">
		<input class="form__input form__input--no-right-space col-6" type="text" name="surname" placeholder="surname">
    <textarea class="form__input form__input--full-width form__input--no-right-space col-12" maxlength="3000" rows="15" type="textarea" placeholder="Your Message"></textarea>
    <input class="form__btn btn btn--secondary" type="submit" name="submit">
  </form>
</section>

<?php
get_footer();
