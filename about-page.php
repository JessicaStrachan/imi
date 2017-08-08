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
  <h2 class="heading--one heading--bold heading--primary heading--asset u-align-center">Our Team</h2>
  <section class="team">

    <div class="team-block">
      <div class="team-block__image">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/team/tamsila-tauqir.jpg">
      </div>
      <div class="team-block__info">
        <h4 class="team-block__name">Tamsila Tauqir MBE | <span>Co-founder & Trustee</span></h4>
        <div class="team-block__bio">
          <p>
Tamsila Tauqir MBE is a freelance consultant on issues of policy and intersectional identities as well as being a technical materials engineer. She has held a number of professional and voluntary roles including at Interfaith Alliance UK, Women Living Under Muslim Laws and at Safra Project. She has been awarded a national honour for her voluntary contribution to Muslim communities and was listed in the Huffington Post’s 2013 top 10 list of Muslim women from around the world. Tamsila Tauqir MBE is a freelance consultant on issues of policy and intersectional identities as well as being a technical materials engineer. She has held a number of professional and voluntary roles including at Interfaith Alliance UK, Women Living Under Muslim Laws and at Safra Project. She has been awarded a national honour for her voluntary contribution to Muslim communities and was listed in the Huffington Post’s 2013 top 10 list of Muslim women from around the world.</p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <div class="team-block__image">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/team/board-member.jpg">
      </div>
      <div class="team-block__info">
        <h4 class="team-block__name">Dervla Shannahan | <span>Co-founder</span></h4>
        <div class="team-block__bio">
          <p>
Dervla Zaynab is an academic who has published on a range of subjects including queer sexualities in Muslim communities, hip-hop in Tunisia, ziyarat practices in Iraq, gendered practices in UK mosques and inclusivity in ritual spaces. She is currently working towards her PhD at Goldsmiths, London. Dervla has been involved in various activist scenes for the last decade, is a practising psychotherapist and full-time parent.</p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <div class="team-block__image">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/team/board-member-2.jpg">
      </div>
      <div class="team-block__info">
        <h4 class="team-block__name">Halima Gosai Hussain | <span>Co-founder & Trustee</span></h4>
        <div class="team-block__bio">
          <p>
Halima has worked for Muslim organisations of varying perspectives for over 10 years. After participating in a mixed gender prayer led by a female Imam, Halima experienced a period of considerable introspection and now works towards living an inclusive, Islamic way. She has a degree in Philosophy & Theology from King’s College London and an MA in Middle Eastern Studies from SOAS, where her research focused on alternative interpretative methodologies of the Quran.</p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <div class="team-block__image">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/team/wasi-daniju.jpg">
      </div>
      <div class="team-block__info">
        <h4 class="team-block__name">Wasi Daniju | <span>Board Member</span></h4>
        <div class="team-block__bio">
          <p>
Wasi Daniju is a qualified Person-Centred therapist, and a <a class="link" href="http://wasidaniju.500px.com/">photographer</a>, with a focus on photojournalism and depiction of lesser-represented groups.  She has a keen interest in social and ecological justice, and regularly engages in community organising. </p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <div class="team-block__image">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/team/naima-khan.jpg">
      </div>
      <div class="team-block__info">
        <h4 class="team-block__name">Naima Khan | <span>Trustee</span></h4>
        <div class="team-block__bio">
          <p>
Naima Khan works in communications and has seven years’ experience producing content on the arts, religion and the third sector. She has an interest in the ways artists can contribute to our understanding of socio-politics our collective histories and how this can be applied in places of worship. </p>
        </div>
      </div>
    </div>




  </section>
</section>

<?php
get_footer();
