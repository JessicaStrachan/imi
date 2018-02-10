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

<div class="container container--header-top">

  <h2 class="heading--one heading--bold heading--primary u-align-center"><?php the_title(); ?></h2>

  <section class="blog">

    <?php
    // the query
    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-0)); ?>

    <?php if ( $wpb_all_query->have_posts() ) : ?>

    <ul class="grid grid--space-bottom grid--flex-wrap">

    	<!-- the loop -->
    	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    		<li class="card grid__col col-4">
          <div <?php post_class() ?>>
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
    	<?php endwhile; ?>
    	<!-- end of the loop -->

    </ul>

    	<?php wp_reset_postdata(); ?>

    <?php else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

  </section>
</div>

<?php
get_footer();
