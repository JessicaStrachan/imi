<?php
get_header();

$event = new CMB2Fields(get_the_ID());
$render_args = [
  'title' => get_the_title(),
  'description' => get_the_content()
];

if(have_posts()): while(have_posts()): the_post();

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="container">
    <h2 class="quote__title"><?php echo $event->format_content($event->field('event_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $event->format_content($event->field('event_quote_author_text')); ?></h2>
  </div>
</section>

<div class="container">
  <div class="post">
    <section class="post__title">
      <h1 class="heading--one heading--bold heading--primary heading--asset u-align-center"><?php the_title(); ?></h1>
      <h5 class="post__title--date">
        <time datetime="<?php echo get_the_time('Y-m-d'); ?>">
          <?php echo get_the_time('F j Y'); ?>
        </time>
      </h5>
    </section>
    <section class="post__content wysiwyg">
      <?php the_content(); ?>
      <div class="contaner container--slim">
        <section class="gallery gallery--space-top grid">
          <div class="gallery__image">
              <img class="gallery__media" src="<?php echo $event->field('event_gallery_image_1'); ?>">
          </div>
          <div class="gallery__image">
            <img class="gallery__media" src="<?php echo $event->field('event_gallery_image_2'); ?>">
          </div>
          <div class="gallery__image">
            <img class="gallery__media" src="<?php echo $event->field('event_gallery_image_3'); ?>">
          </div>
        </section>
      </div>
    </section>
  </div>
</div>

<?php
endwhile; endif;
get_footer();
