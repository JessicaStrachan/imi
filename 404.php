<?php
get_header();
// $text_arr = str_split('Home page');
?>

<article class="container">
  <section class="">
    <h1 class="heading--one heading--bold heading--primary heading--asset u-align-center">404</h1>
  </section>
  <section class="404-message">
    <p class="404-message__text">The page you are looking for could not be found.<br>
      Please return to our home page or</p>
    <a href="/contact/" class="btn btn--secondary 404-message__button">contact us</a></p>
    <a href="<?php echo get_site_url(); ?>" class="btn btn--secondary 404-message__button" data-text="Home page">Home
    </a>
  </section>
</article>

<?php
get_footer();
