<?php
get_header();

$blog = new CMB2Fields(get_the_ID());

if (have_posts()) : while (have_posts()) : the_post();

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="container">
    <h2 class="quote__title"><?php echo $blog->format_content($blog->field('blog_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $blog->format_content($blog->field('blog_quote_author_text')); ?></h2>
  </div>
</section>

<div class="post">
  <section class="post__title">
    <div class="container">
      <h1 class="heading--one heading--bold heading--primary heading--asset u-align-center"><?php the_title(); ?></h1>
    </div>
  </section>
  <section class="post__content">
    <?php the_content(); ?>
  </section>
</div>

 <?php
endwhile;
endif;
 get_footer();
