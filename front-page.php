<?php
/**
* Template Name: Home page
*/
get_header();
?>

<div class="owl-carousel">
  <div class="slide">
    <img class="slide__image" src="<?php echo get_template_directory_uri(); ?>/public/images/our-vision.jpg" />
    <div class="slide__content">
      <h1 class="slide__title heading--one">Our Vision</h1>
      <a href="http://inclusivemosqueinitiative.org/about/statement-of-intent/" class="btn lime__btn">Read More</a>
    </div>
  </div>
  <div class="slide">
    <img class="slide__image" src="<?php echo get_template_directory_uri(); ?>/public/images/faqs.jpg" />
    <div class="slide__content">
      <h1 class="slide__title heading--one">Frequently Asked Questions</h1>
      <a href="http://inclusivemosqueinitiative.org/about/frequently-asked-questions/ " class="btn lime__btn">Read More</a>
    </div>
  </div>
  <div class="slide">
    <img class="slide__image" src="<?php echo get_template_directory_uri(); ?>/public/images/gender-leadership.jpg" />
    <div class="slide__content">
      <h1 class="slide__title heading--one">Gender and Leadership</h1>
      <a href="http://inclusivemosqueinitiative.org/resources/resources-mosques/resources-gender/" class="btn lime__btn">Read More</a>
    </div>
  </div>
  <div class="slide">
    <img class="slide__image" src="<?php echo get_template_directory_uri(); ?>/public/images/solidarity.jpg" />
    <div class="slide__content">
      <h1 class="slide__title heading--one">Solidarity</h1>
      <a href="http://inclusivemosqueinitiative.org/what-real-solidarity-looks-like/" class="btn lime__btn">Read More</a>
    </div>
  </div>
</div>



<div class="row">
  <?php get_template_part('templates/home-events', 'tpl'); ?>
</div>
<div class="row">
  <?php get_template_part('templates/home-press', 'tpl'); ?>
</div>
<div class="row">
  <?php get_template_part('templates/home-blog', 'tpl'); ?>
</div>




<?php
get_footer();
