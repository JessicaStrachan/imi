<?php
get_header();

$blog = new CMB2Fields(get_the_ID());

if (have_posts()) : while (have_posts()) : the_post();

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>

<section class="quote">
    <img class="quote__background" src="<?php echo $blog->field('blog_header_image'); ?>">
    <div class="quote__inner">
        <h2 class="quote__title"><?php echo $blog->format_content($blog->field('blog_quote_text')); ?></h2>
         <h2 class="quote__author"><?php echo $blog->format_content($blog->field('blog_quote_author_text')); ?></h2>
    </div>
</section>

<div class="container">
    <div class="post">
        <section class="post__title">
            <h1 class="heading--one heading--bold heading--primary"><?php the_title(); ?></h1>
        </section>

        <div class="post__featured-image" style="background-image: url('<?php echo $post_image[0]; ?>')"></div>

        <section class="post__content wysiwyg">
            <?php the_content(); ?>

            <div class="container container--slim">
                <div class="tags">
                  <?php the_category(); ?>
                </div>
                <section class="gallery grid">
                    <div class="gallery__image">
                        <img class="gallery__media" src="<?php echo $blog->field('blog_gallery_image_1'); ?>">
                    </div>
                    <div class="gallery__image">
                        <img class="gallery__media" src="<?php echo $blog->field('blog_gallery_image_2'); ?>">
                    </div>
                    <div class="gallery__image">
                        <img class="gallery__media" src="<?php echo $blog->field('blog_gallery_image_3'); ?>">
                    </div>
                </section>
            </div>
        </section>

    </div>
</div>

<?php
endwhile;
endif;
get_footer();
