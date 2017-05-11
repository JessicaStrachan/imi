<?php
/**
* Template Name: Home page
*/
get_header();
?>

<div class="owl-carousel">
  <div class="slide">
    <img class="slide__image" src="https://unsplash.it/1400/750" />
    <div class="slide__container">
      <div class="slide__content">
        <h1 class="slide__title heading--one"><span>Inclusive Eid</span></h1>
        <h2 class="slide__subtitle heading--one"><span>Eid celebrates Eid-ul-fitr in London</span></h2>
        <a href="#" class="btn lime__btn">Call to Action</a>
      </div>
    </div>
  </div>
  <div class="slide">
    <img class="slide__image" src="https://unsplash.it/1400/750" />
    <div class="slide__container">
      <div class="slide__content">
        <h1 class="slide__title heading--one"><span>Inclusive Eid</span></h1>
        <h2 class="slide__subtitle heading--one"><span>Eid celebrates Eid-ul-fitr in London</span></h2>
        <a href="#" class="btn lime__btn">Call to Action</a>
      </div>
    </div>
  </div>
  <div class="slide">
    <img class="slide__image" src="https://unsplash.it/2000/750" />
    <div class="slide__container">
      <div class="slide__content">
        <h1 class="slide__title heading--one"><span>Inclusive Eid</span></h1>
        <h2 class="slide__subtitle heading--one"><span>Eid celebrates Eid-ul-fitr in London</span></h2>
        <a href="#" class="btn lime__btn">Call to Action</a>
      </div>
    </div>
  </div>
  <div class="slide">
    <img class="slide__image" src="https://unsplash.it/1400/900" />
    <div class="slide__container">
      <div class="slide__content">
        <h1 class="slide__title heading--one"><span>Inclusive Eid</span></h1>
        <h2 class="slide__subtitle heading--one"><span>Eid celebrates Eid-ul-fitr in London</span></h2>
        <a href="#" class="btn lime__btn">Call to Action</a>
      </div>
    </div>
  </div>
  <div class="slide">
    <img class="slide__image" src="https://unsplash.it/1300/750" />
    <div class="slide__container">
      <div class="slide__content">
        <h1 class="slide__title heading--one"><span>Inclusive Eid</span></h1>
        <h2 class="slide__subtitle heading--one"><span>Eid celebrates Eid-ul-fitr in London</span></h2>
        <a href="#" class="btn lime__btn">Call to Action</a>
      </div>
    </div>
  </div>
  <div class="slide">
    <img class="slide__image" src="https://unsplash.it/1800/900" />
    <div class="slide__container">
      <div class="slide__content">
        <h1 class="slide__title heading--one"><span>Inclusive Eid</span></h1>
        <h2 class="slide__subtitle heading--one"><span>Eid celebrates Eid-ul-fitr in London</span></h2>
        <a href="#" class="btn lime__btn">Call to Action</a>
      </div>
    </div>
  </div>
  <div class="slide">
    <img class="slide__image" src="https://unsplash.it/1200/750" />
    <div class="slide__container">
      <div class="slide__content">
        <h1 class="slide__title heading--one"><span>Inclusive Eid</span></h1>
        <h2 class="slide__subtitle heading--one"><span>Eid celebrates Eid-ul-fitr in London</span></h2>
        <a href="#" class="btn lime__btn">Call to Action</a>
      </div>
    </div>
  </div>
</div>

<div class="page-container">

  <?php
  get_template_part('templates/home-events', 'tpl');
  get_template_part('templates/home-press', 'tpl');
  ?>

</div>

<?php
get_footer();
