<?php
/**
* Template Name: Holding page
*/
get_header(); ?>

<div class="holding-page__content">
	<img src="<?php echo get_template_directory_uri(); ?>/public/images/imi-logo-header.png" alt="Imi Logo"/>
	<h1 class="holding-page__heading">Coming soon! </h1>
	<h4 class="holding-page__sub">Our new site is almost ready, please bear with us while we work on it. </h4>
	<p class="holding-page__para">For any queries please contact <a class="holding-page__link" href="mailto: admin@inclusivemosqueinitiative.org">admin@inclusivemosqueinitiative.org</a> or call us on <a class="holding-page__link" href="tel:+44203 189 1185">0203 189 1185</a> </p>
	<div>
		<form class="subscribe">
	      <input type ="email" name="email" placeholder="enter email address" class="subscribe__input"/>
	      <button type="submit" class="subscribe__submit">Subscribe</button>
	    </form>
    </div>
</div>

<?php
get_footer();