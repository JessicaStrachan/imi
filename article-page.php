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
    <h1 class="heading--one heading--bold heading--primary heading--asset u-align-center">Press</h1>
  </div>
</section>

<section>
  <div class="container">
    <div class="grid">
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="https://unsplash.it/500/300/?random" />
          </div>
          <h1 class="article-logo__title u-align-center">col 1</h1>
        </a>
      </div>
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="https://unsplash.it/500/300/?random" />
          </div>
          <h1 class="article-logo__title u-align-center">col 2</h1>
        </a>
      </div>
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="https://unsplash.it/500/300/?random" />
          </div>
          <h1 class="article-logo__title u-align-center">col 3</h1>
        </a>
      </div>
      <div class="col-3">
        <a class="article-logo" href="http://www.bbc.co.uk/news" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="https://unsplash.it/500/300/?random" />
          </div>
          <h1 class="article-logo__title u-align-center">col 4</h1>
        </a>
      </div>
    </div>
  </div
</section>

<?php
get_footer();
