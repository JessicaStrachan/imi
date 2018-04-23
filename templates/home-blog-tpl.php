<?php

$post_category = get_the_category();
$data_filters = '';
foreach($post_category as $category):
  $data_filters .= $category->slug . ' ';
endforeach;
?>

<div class="container container--border-top">
  <h1 class="heading--one heading--space-bottom-large heading--bold heading--primary">Recent Blog Posts</h1>
  <ul class="grid grid--space-bottom">

    <?php
  // the query
  $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-3)); ?>

  <?php if ( $wpb_all_query->have_posts() ) : ?>

  <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

    <li class="card grid__col col-4">
      <div <?php post_class() ?> >
        <a class="card__link" href="<?php the_permalink(); ?>">

          <?php $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>

          <div class="card__media" style="background-image: url('<?php echo $post_image[0]; ?>')"></div>
          <div class="card__info">
            <h2 class="card__title"><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>

            <p class="card__read-more">Read More</p>
          </div>

        </a>
      </div>
    </li>

    <?php endwhile; endif; ?>

  </ul>

  <a class="btn lime__btn" href="/blog">View All Posts</a>

</div>
