<?php
/**
* Template Name: About page
*/
get_header();

$page = new CMB2Fields(get_the_ID());
$about_us = new CMB2Fields(get_the_ID());

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
echo $image;
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="container">
    <h2 class="quote__title"><?php echo $page->format_content($page->field('page_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $page->format_content($page->field('page_quote_author_text')); ?></h2>
  </div>
</section>

<section class="two-block">
  <div class="two-block__section two-block__section--padding-right">
    <h3 class="two-block__title">Our Vision</h3>
    <?php echo $about_us->format_content($about_us->field('our_vision_text')); ?>
  </div>
  <div class="two-block__section two-block__section--padding-left">
    <h3 class="two-block__title">Branches</h3>
  <?php echo $about_us->format_content($about_us->field('our_branches_text')); ?>
  </div>
</section>

<section class="container">
  <h2 class="heading--one heading--bold content-title content-title--light-red">Our Team</h2>
  <section class="team">
    <div class="team-block">
      <div class="team-block__image">
        <img src="http://placehold.it/270x270">
      </div>
      <div class="team-block__info">
        <h4 class="team-block__name"><?php echo $about_us->format_content($about_us->field('team_member_name')); ?></h4>
        <div class="team-block__bio">
          <?php echo $about_us->format_content($about_us->field('team_member_bio')); ?>
        </div>
        <div class="team-block__social">
          <a class="facebook" href="<?php echo $about_us->field('twitter_link'); ?>"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
    <div class="team-block">
      <div class="team-block__image">
        <img src="http://placehold.it/270x270">
      </div>
      <div class="team-block__info">
        <h4 class="team-block__name"><?php echo $about_us->format_content($about_us->field('team_member_name')); ?></h4>
        <div class="team-block__bio">
          <?php echo $about_us->format_content($about_us->field('team_member_bio')); ?>
        </div>
        <div class="team-block__social">
          <a class="facebook" href="<?php echo $about_us->field('twitter_link'); ?>"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
    <div class="team-block">
      <div class="team-block__image">
        <img src="http://placehold.it/270x270">
      </div>
      <div class="team-block__info">
        <h4 class="team-block__name"><?php echo $about_us->format_content($about_us->field('team_member_name')); ?></h4>
        <div class="team-block__bio">
          <?php echo $about_us->format_content($about_us->field('team_member_bio')); ?>
        </div>
        <div class="team-block__social">
          <a class="facebook" href="<?php echo $about_us->field('twitter_link'); ?>"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
    <div class="team-block">
      <div class="team-block__image">
        <img src="http://placehold.it/270x270">
      </div>
      <div class="team-block__info">
        <h4 class="team-block__name"><?php echo $about_us->format_content($about_us->field('team_member_name')); ?></h4>
        <div class="team-block__bio">
          <?php echo $about_us->format_content($about_us->field('team_member_bio')); ?>
        </div>
        <div class="team-block__social">
          <a class="facebook" href="<?php echo $about_us->field('twitter_link'); ?>"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </section>
</section>

<?php
get_footer();
