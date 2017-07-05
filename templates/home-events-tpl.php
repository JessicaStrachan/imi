<?php

$events = new Query('events');
$event = new CMB2Fields(get_the_ID());
$query_args = [
  'posts_per_page' => -1
];
$results = $events->query($query_args);
?>

<div class="container container--vh-top">
  <h1 class="heading--one heading--bold heading--primary heading--asset u-align-center">Upcoming Events</h1>
  <ul class="grid grid--space-bottom">

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
          <h3 class="heading--three heading--bold"><?php echo $event->format_content($event->field('event_date_text')); ?></h3>
          <p><?php echo $event->format_content($event->field('event_address_text')); ?></p>
          <p class="card__excerpt"><?php echo $event->format_content($event->field('event_excerpt_text')); ?></p>
          <p class="card__read-more">Read More</p>
        </div>

      </a>
    </li>

    <?php endwhile; endif; ?>

  </ul>

  <a class="btn btn--center lime__btn" href="/events">View All Events</a>

</div>
