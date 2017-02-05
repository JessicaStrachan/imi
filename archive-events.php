<?php
/**
* Template Name: Events Listing page
*/
get_header();

$events = new Query('events');
$query_args = [
  'posts_per_page' => -1
];
$results = $events->query($query_args);
?>

<div class="container">
  <h1 class="content-title content-title--light-red"><?php the_title(); ?></h1>
  <ul class="grid">

    <?php
    if($results->have_posts()): while($results->have_posts()): $results->the_post();
      $event_fields = new CMB2Fields(get_the_ID());
    ?>

    <li class="card grid__col col-4">
      <a class="card__link" href="<?php the_permalink(); ?>">

        <?php $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>

        <div class="card__media" style="background-image: url('<?php echo $post_image[0]; ?>')"></div>
        <div class="card__info">
          <h2 class="heading--two heading--bold"><?php the_title(); ?></h2>
          <h3 class="heading--three heading--bold">Saturday 22nd October, 11-1pm</h3>
          <!-- <p><?php the_excerpt(); ?></p> -->
          <p class="card__read-more">Read More</p>
        </div>

      </a>
    </li>

    <?php endwhile; endif; ?>

  </ul>
</div>

<?php
get_footer();
