<?php
get_header();
// $text_arr = str_split('Home page');
?>

<article class="container">
  <section class="message-404">
    <h1 class="heading--one heading--bold heading--primary heading--asset u-align-center">404</h1>
    <p class="message-404__text">The page you are looking for could not be found.<br>
      Please return to our home page or</p>
    <div class="flex flex--justify-center">
      <a href="/contact/" class="message-404__button">contact us</a></p>
      <a href="<?php echo get_site_url(); ?>" class="message-404__button" data-text="Home page">Home
    </a>
    </a>
  </section>
</article>
        
<?php
get_footer();
