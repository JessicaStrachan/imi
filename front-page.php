<?php
/**
* Template Name: Home page
*/
get_header();
?>
<div class="slider">
  <div class="slider__slide fade">
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/slide-image-one.jpg" style="width:100%">
    <div class="slider__container">
    	<h1 class="slider__text">Inclusive Eid <br> IMI celebreates Eid-ul-fitr in London</h1>
    	<a href="#" class="btn btn--lime btn--slider">See photo gallery</a>
    </div>
  </div>


  <div class="slider__slide fade">
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/slide-image-two.jpg" style="width:100%">
    <h1 class="slider__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nunc odio, commodo sit amet quam.</h1>
  </div>

  <div class="slider__slide fade">
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/slide-image-three.jpg" style="width:100%">
    <h1 class="slider__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nunc odio, commodo sit amet quam.</h1>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div class="page-container">

  <?php
  get_template_part('templates/home-events', 'tpl');
  get_template_part('templates/home-press', 'tpl');
  ?>

</div>

<?php
get_footer();
