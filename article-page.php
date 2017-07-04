<?php
/**
* Template Name: Article Page
*/
get_header();
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="container">
    <h2 class="quote__title">This is the quote on Article Page</h2>
    <h2 class="quote__author">Quote Author</h2>
  </div>
</section>

<section>
  <div class="container">
    <h1 class="heading--one heading--bold heading--primary heading--asset u-align-center">Press Articles</h1>
  </div>
</section>

<section>
  <div class="container">
    <div class="grid grid--flex-wrap grid--flex-start">
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/pink-news-logo.png" alt="Pink News Logo" />
          </div>
          <h1 class="article-logo__title u-align-center">col 1</h1>
        </a>
      </div>
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/the-guardian-logo.png" />
          </div>
          <h1 class="article-logo__title u-align-center">col 2</h1>
        </a>
      </div>
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/huffpost-logo-2.png" />
          </div>
          <h1 class="article-logo__title u-align-center">col 3</h1>
        </a>
      </div>
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/bbc-asian-network-logo.svg" />
          </div>
          <h1 class="article-logo__title u-align-center">col 4</h1>
        </a>
      </div>
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/the-guardian-logo.png" />
          </div>
          <h1 class="article-logo__title u-align-center">col 1</h1>
        </a>
      </div>
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/pink-news-logo.png" alt="Pink News Logo" />
          </div>
          <h1 class="article-logo__title u-align-center">col 2</h1>
        </a>
      </div>
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/bbc-asian-network-logo.svg" />
          </div>
          <h1 class="article-logo__title u-align-center">col 3</h1>
        </a>
      </div>
    </div>
  </div
</section>

<?php
get_footer();
