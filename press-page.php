<?php
/**
* Template Name: Press page
*/
get_header();

$page = new CMB2Fields(get_the_ID());

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="container">
    <h2 class="quote__title"><?php echo $page->format_content($page->field('page_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $page->format_content($page->field('page_quote_author_text')); ?></h2>
  </div>
</section>

<h1 class="content-title">Press</h1>
<section class="press grid">
  <div class="press__item">
    <a class="press__item--link" href="<?php echo $page->format_content($page->field('press_article_url')); ?>">
      <div class="press__item--image"></div>
      <h2 class="press__item--title">The Daily Newspaper</h2>
      <p class="press__item--date">26/03/1992</p>
    </a>
  </div>
  <div class="press__item">
    <a class="press__item--link" href="#">
      <div class="press__item--image"></div>
      <h2 class="press__item--title">The Daily Newspaper</h2>
      <p class="press__item--date">26/03/1992</p>
    </a>
  </div>
  <div class="press__item">
    <a class="press__item--link" href="#">
      <div class="press__item--image"></div>
      <h2 class="press__item--title">The Daily Newspaper</h2>
      <p class="press__item--date">26/03/1992</p>
    </a>
  </div>
  <div class="press__item">
    <a class="press__item--link" href="#">
      <div class="press__item--image"></div>
      <h2 class="press__item--title">The Daily Newspaper</h2>
      <p class="press__item--date">26/03/1992</p>
    </a>
  </div>
</section>

<?php
get_footer();
