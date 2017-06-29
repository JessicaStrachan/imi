<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  </head>
  <body <?php body_class(); ?>>
    <header class="header">
        <a href="/" class="header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/public/images/imi-logo-header.png" alt="Imi Logo"/>
        </a>
        <?php get_template_part('templates/navigation', 'tpl'); ?>
    </header>
  </body>
</html>
