<?php
/**
* Template Name: Home page
*/
get_header();
?>

<div class="page-container">

  <?php
  get_template_part('templates/home-events', 'tpl');
  get_template_part('templates/home-press', 'tpl');
  ?>

</div>

<?php
get_footer();
