<?php
/**
* Template Name: About page
*/
get_header();

$about_us = new CMB2Fields(get_the_ID());

$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
echo $image;
?>

<section class="quote" style="background-image: url('<?php echo $post_image[0]; ?>')">
  <div class="quote__inner">
    <h2 class="quote__title"><?php echo $about_us->format_content($about_us->field('about_quote_text')); ?></h2>
    <h2 class="quote__author"><?php echo $about_us->format_content($about_us->field('about_quote_author_text')); ?></h2>
  </div>
</section>

<section class="row row--no-margin forest-green">
  <section class="container container--slim">
    <p class="heading--one heading--bold heading--space-bottom-large">Inclusive Mosque Initiative</p>
    <!-- <?php echo $about_us->format_content($about_us->field('our_vision_text')); ?> -->
    <p class="about-intros">Launched in 2012, the Inclusive Mosque Initiative is dedicated to creating places of worship marginalised communities, spiritual practice and the promotion of inclusive Islamic principles. Our events are held in the UK, usually in London. Founded by Tamsila Tauqir and Dervla Zaynab Shannahan, IMI was created with their experiences of exclusion and those of many others in mind. We currently host regular Friday prayers, seminars and discussion groups. We aim to create a family-friendly place of worship that welcomes people regardless of their religious belief, their race, gender, impairments, sexuality or immigration status.</p>
  </section>
    <!-- Branches info may be included at a a later date. -->
  <!--   <div class="two-block__section two-block__section--padding-left">
      <h3 class="two-block__title">Branches</h3>
    <?php echo $about_us->format_content($about_us->field('our_branches_text')); ?>
    </div> -->
</section>

<section class="row row--no-margin ruby">
  <section class="container container--slim">
    <div class="central-paragraph">
      <h2 class="heading--one heading--bold heading--tertiary heading--space-bottom-large">Our Vision</h2>
      <!-- <?php echo $about_us->format_content($about_us->field('our_vision_text')); ?> -->
      <p>At the moment we rent out different wheelchair-accessible spaces, mostly in London, to hold our events. We are working towards owning or renting a permanent space that will be a peaceful place of worship for Muslims from all backgrounds and understandings. Like our current events, it will be a place where all people are welcome, a place that respects gender expression and gender justice, and a place that houses inter-community and inter-faith dialogue. We are mindful of respecting the environment and aim to create as eco-friendly a space as possible.</p>

    </div>
  </section>
    <!-- Branches info may be included at a a later date. -->
  <!--   <div class="two-block__section two-block__section--padding-left">
      <h3 class="two-block__title">Branches</h3>
    <?php echo $about_us->format_content($about_us->field('our_branches_text')); ?>
    </div> -->
</section>

<section class="container">
  <h2 class="heading--one heading--bold heading--primary u-align-center heading--space-bottom-large">Our Team</h2>
  <section class="team">

    <div class="team-block">
      <img class="team-block__image" class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/tamsila-tauqir.jpg">
      <div class="team-block__info">
        <h4 class="team-block__name">Tamsila Tauqir MBE</h4>
        <p class="team-block__role">Co-founder & Trustee</p>
        <div class="team-block__bio">
          <p>Tamsila is a freelance consultant on issues of policy and intersectional identities as well as being a technical materials engineer. She has held a number of professional and voluntary roles including at Interfaith Alliance UK, Women Living Under Muslim Laws and at Safra Project. </p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <img class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/board-member-2.jpg">
      <div class="team-block__info">
        <h4 class="team-block__name">Dervla Zaynab Shannahan</h4>
        <p class="team-block__role">Co-founder</p>
        <div class="team-block__bio">
          <p>Dervla is an academic who has published on a range of subjects including queer sexualities in Muslim communities, hip-hop in Tunisia, ziyarat practices in Iraq, gendered practices in UK mosques and inclusivity in ritual spaces. She is a practising psychotherapist and full-time parent.</p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <img class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/board-member-3.jpg">
      <div class="team-block__info">
        <h4 class="team-block__name">Halima Gosai Hussain</h4>
        <p class="team-block__role">Chair & Trustee</p>
        <div class="team-block__bio">
          <p>Halima has worked for a variety of Muslim organisations for over 10 years. With degree in Philosophy & Theology and an MA in Middle Eastern Studies from SOAS, her research focused on alternative Qur’anic interpretation methodologies. She is now a PhD candidate.</p>
          <a class="link" href="https://twitter.com/HalimaGosH">@HalimaGosH</a>
        </div>
      </div>
    </div>
  
     <div class="team-block">
      <img class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/board-member-4.jpg">
		<div class="team-block__info">
        <h4 class="team-block__name">Latifa Akay</h4>
        <p class="team-block__role">Advisor</p>
        <div class="team-block__bio">
          <p>Latifa is currently exploring culturally and socially relevant teaching pedagogies and curriculum in her role as Director of Education at the charity Maslaha. She focused on Islamic feminisms and international law in her LLM at SOAS, and previously worked as a journalist in Istanbul. </p>
        </div>
      </div>
    </div>
    
    <div class="team-block">
      <img class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/naima-khan.jpg">
      <div class="team-block__info">
        <h4 class="team-block__name">Naima Khan</h4>
        <p class="team-block__role">Board Member & Trustee</p>
        <div class="team-block__bio">
          <p>Naima works in communications and has seven years’ experience producing content on the arts and religion. She has an interest in the ways artists can contribute to our understanding of socio-politics our collective histories and how this can be applied in places of worship.</p>
          <a class="link" href="https://twitter.com/khannaima">@KhanNaima</a>
        </div>
      </div>
    </div>

    <div class="team-block">
      <img class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/wasi-daniju.jpg">
      <div class="team-block__info">
        <h4 class="team-block__name">Wasi Daniju</h4>
        <p class="team-block__role">Board Member</p>
        <div class="team-block__bio">
          <p>Wasi is a qualified person-centred therapist, and a <a class="link" href="http://wasidaniju.500px.com/">photographer</a>, focusing on photojournalism and depictions of lesser-represented groups. Her projects include ‘Re:Present – Portraits of Black Muslim Women’. Wasi is interested in social and ecological justice, and regularly engages in community organising.</p>
          <a class="link" href="https://twitter.com/knox_o">@knox_o</a>
        </div>
      </div>
    </div>

  </section>
</section>

<section class="container" id="press-articles" style="margin-top:-180px; padding-top: 180px;">
  <h2 class="heading--one heading--bold heading--primary u-align-center heading--space-bottom-large">Press Articles</h2>
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
</section>

<?php
get_footer();
