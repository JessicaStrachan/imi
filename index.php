<?php
/**
* Template Name: Blog page
*/

$post_category = get_the_category();
$data_filters = '';
foreach($post_category as $category):
  $data_filters .= $category->slug . ' ';
endforeach;

get_header();
?>

<h2 class="heading--one heading--bold heading--primary heading--asset u-align-center"><?php the_title(); ?></h2>

<section class="blog">

  <?php
  // the query
  $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

  <?php if ( $wpb_all_query->have_posts() ) : ?>

  <ul class="blog__container grid">

  	<!-- the loop -->
  	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
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
  	<?php endwhile; ?>
  	<!-- end of the loop -->

  </ul>

  	<?php wp_reset_postdata(); ?>

  <?php else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</section>

<?php
get_footer();
