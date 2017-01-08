<?php
$post_category = get_the_category();
$data_filters = '';
foreach($post_category as $category):
  $data_filters .= $category->slug . ' ';
endforeach;
?>

<article class="blog-block">
  <a href="<?php the_permalink(); ?>" class="grid">
    <div class="col-6">

      <?php $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>

      <div class="blog-image" style="background-image: url('<?php echo $post_image[0]; ?>')"></div>
    </div>
    <div class="col-6">
      <div class="details">
        <h2><?php the_title(); ?></h2>
        <h5>
          Posted on:
          <time datetime="<?php echo get_the_time('Y-m-d'); ?>">
            <?php echo get_the_time('F j Y'); ?>
          </time>
        </h5>
        <?php the_excerpt(); ?>
        <span class="link">READ MORE</span>
      </div>
    </div>
  </a>
</article>
