<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  </head>
  <body>
    <header class="header">
        <secton class="header__logo">
          <h1>hello</h1>
        </secton>
        <section class="navigation">
            <?php get_template_part('templates/navigation', 'tpl'); ?>
        </section>
    </header>
  </body>
</html>
