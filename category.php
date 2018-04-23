<?php
get_header(); ?>

<section class="quote">
  <div class="quote__inner">
    <h2 class="quote__title">Quotey mCQuoterson</h2>
    <h2 class="quote__author">Quote Author</h2>
  </div>
</section>

<div class="container">
	<h2 class="heading--one heading--bold heading--primary u-align-center"><?php single_cat_title(); ?></h2>

	<section class="blog">
		<ul class="grid grid--space-bottom">

	        <?php if (have_posts()) : ?>
	            <?php while (have_posts()) : the_post(); ?>
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
	    </ul>

	    <?php else : ?>
	    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	    <?php endif; ?>

	</section>
</div>


<?php
get_footer();
