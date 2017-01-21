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

<h2 class="content-title"><?php the_title(); ?></h2>
<section class="blog">
  <ul class="blog__container grid">

  <?php
  if($results->have_posts()): while($results->have_posts()): $results->the_post();
    $event_fields = new CMB2Fields(get_the_ID());
    ?>


    <li class="block grid__col">
      <a class="block__link" href="<?php the_permalink(); ?>">

        <?php $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>

        <div class="block__img" style="background-image: url('<?php echo $post_image[0]; ?>')"></div>
        <div class="block__info">
          <h3 class="block__info--title"><?php the_title(); ?></h3>
          <p class="block__info--excerpt"><?php the_excerpt(); ?></p>
          <p class="block__info--read-more">Read More</p>
        </div>

      </a>
    </li>


  <?php endwhile; endif; ?>
</ul>

</section>

<?php
get_footer();
