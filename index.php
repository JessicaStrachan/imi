<?php
/**
* Template Name: Blog page
*/

get_header();
get_template_part('templates/header-quote', 'tpl');
?>

<h2 class="content-title">Blog</h2>

<section class="blog">

  <?php
  // the query
  $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

  <?php if ( $wpb_all_query->have_posts() ) : ?>

  <ul class="blog__container grid">

  	<!-- the loop -->
  	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
  		<li class="block grid__col col-4">
        <a class="block__link" href="<?php the_permalink(); ?>">
          <div class="block__img"></div>
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
