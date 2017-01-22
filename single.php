<?php
get_header();

$blog = new CMB2Fields(get_the_ID());
$render_args = [
  'title' => get_the_title(),
  'description' => get_the_content()
];

if (have_posts()) : while (have_posts()) : the_post();

 endwhile;
 endif;
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="container">
    <h2 class="quote__title"><?php echo $event->format_content($event->field('event_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $event->format_content($event->field('event_quote_author_text')); ?></h2>
  </div>
</section>

<div class="post">
  <section class="post__title">
    <div class="container">
      <h1 class="content-title"><?php the_title(); ?></h1>
      <h5 class="post__title--date">
        <time datetime="<?php echo get_the_time('Y-m-d'); ?>">
          <?php echo get_the_time('F j Y'); ?>
        </time>
      </h5>
    </div>
  </section>
  <section class="post__content">
    <?php the_content(); ?>
  </section>
</div>

 <?php
 get_footer();
