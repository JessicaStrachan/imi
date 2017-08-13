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
        <a class="article-logo" href="https://www.theguardian.com/world/shortcuts/2013/aug/07/mission-to-build-alternative-mosque-muslims" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/the-guardian-logo.png" />
          </div>
        </a>
      </div>

      <div class="col-3">
        <a class="article-logo" href="https://www.ft.com/content/2ccda9ea-17c7-11e6-bb7d-ee563a5a1cc1" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/ft-logo.png" alt="Financial Times Logo" />
          </div>
        </a>
      </div>

      <div class="col-3">
        <a class="article-logo" href="https://www.youtube.com/watch?v=MBMYmhW8tU8" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/bbc-asian-network-logo.png" />
          </div>
        </a>
      </div>

      <div class="col-3">
        <a class="article-logo" href="http://ebook-dl.com/magazine/marie-claire-february-2017-uk991.pdf " target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/marie-claire-logo.png" />
          </div>
        </a>
      </div>

      <div class="col-3">
        <a class="article-logo" href="http://www.huffingtonpost.com/2013/08/15/inclusive-mosque-initiative-britain_n_3744120.html" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/huffpost-logo-2.png" />
          </div>
        </a>
      </div>

      <div class="col-3">
        <a class="article-logo" href="http://www.pinknews.co.uk/2016/10/27/bishop-imam-and-rabbi-lead-interfaith-orlando-vigil-at-pinknews-awards/" target="_blank">
          <div class="article-logo__image">
            <img class="article-logo__media" src="<?php echo get_template_directory_uri(); ?>/public/images/pink-news-logo.png" alt="Pink News Logo" />
          </div>
        </a>
      </div>
    </div>
  </div
</section>

<?php
get_footer();
