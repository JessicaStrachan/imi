<?php
get_header();

$events = new Query('events');
$query_args = [
  'posts_per_page' => -1
];
$results = $events->query($query_args);
?>

<section class="container">

  <?php
  if($results->have_posts()): while($results->have_posts()): $results->the_post();
    $event_fields = new CMB2Fields(get_the_ID());
    ?>


    <p><?php echo $event_fields->field('quote'); ?></p>


  <?php endwhile; endif; ?>

</section>

<?php
get_footer();
