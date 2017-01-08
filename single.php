<?php
get_header();
get_template_part('templates/header-quote', 'tpl');
if (have_posts()) : while (have_posts()) : the_post();

 endwhile;
 endif;
?>

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
