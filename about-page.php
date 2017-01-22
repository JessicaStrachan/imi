<?php
/**
* Template Name: About page
*/
get_header();

$page = new CMB2Fields(get_the_ID());
$about_us = new CMB2Fields(get_the_ID());

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="container">
    <h2 class="quote__title"><?php echo $page->format_content($page->field('page_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $page->format_content($page->field('page_quote_author_text')); ?></h2>
  </div>
</section>

<section class="two-block">
  <div class="two-block__section">
    <h3 class="two-block__section--title">Our Vision</h3>
    <p class="two-block__section--text"><?php echo $about_us->format_content($about_us->field('our_vision_text')); ?></p>
  </div>
  <div class="two-block__section">
    <h3 class="two-block__section--title">Branches</h3>
  <p class="two-block__section--text"><?php echo $about_us->format_content($about_us->field('our_branches_text')); ?></p>
  </div>
</section>


<?php
get_template_part('templates/our-team', 'tpl');
get_footer();
