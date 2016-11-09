<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  </head>
  <body>
    <header class="header">
        <section class="header__logo"></section>
        <section class="navigation">
            <?php get_template_part('templates/navigation', 'tpl'); ?>
        </section>
    </header>
  </body>
</html>
