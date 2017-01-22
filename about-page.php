<?php
/**
* Template Name: About page
*/
get_header();

$about = new CMB2Fields(get_the_ID());

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="container">
    <h2 class="quote__title"><?php echo $about->format_content($about->field('about_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $about->format_content($about->field('about_quote_author_text')); ?></h2>
  </div>
</section>

<?php
get_template_part('templates/two-block', 'tpl');
get_template_part('templates/our-team', 'tpl');
get_footer();
