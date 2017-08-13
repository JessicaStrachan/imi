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
    <h2 class="quote__title">Page Quote</h2>
    <h2 class="quote__author">Page Quote Author</h2>
  </div>
</section>

<section class="row row--no-margin forest-green">
  <section class="container ">
    <div class="central-paragraph">
      <!-- <?php echo $about_us->format_content($about_us->field('our_vision_text')); ?> -->
      <p>Launched in 2012, the Inclusive Mosque Initiative is a charity dedicated to creating safe spaces for marginalised communities, spiritual practice and the promotion of inclusive Islamic principles.  Our events are held mostly in London but our work takes us all over the UK. 

      Founded by Tamsila Tauqir and Dervla Zaynab Shannahan, IMI was created with their experiences of exclusion and those of many others in mind. Tamsila's late mother was severely disabled and was told she couldn't pray in the main area of her local mosque. She was told to pray in the upper floor with the women, where she was not physically able to go. In regular mosques, Dervla, like other mothers, is usually separated from her teenage son and is required to send him to the men's area. 

      We have found that in many mosques, families are separated in prayer space. We want to make a mosque that is accessible to different communities and not based on language, ethnicity, religious sect or gender. If Allah(swt) can accept our differences, then we can too. 

      We currently host regular Friday prayers, seminars and discussion groups. We aim to create a family-friendly  place of worship that is a safe space for people regardless of their religious belief, their race, gender, impairments, sexuality or immigration status. </p>

    </div>
  </section>
    <!-- Branches info may be included at a a later date. -->
  <!--   <div class="two-block__section two-block__section--padding-left">
      <h3 class="two-block__title">Branches</h3>
    <?php echo $about_us->format_content($about_us->field('our_branches_text')); ?>
    </div> -->
</section>

<section class="row row--no-margin ruby">
  <section class="container ">
    <div class="central-paragraph">
      <h2 class="heading--one heading--bold heading--secondary heading--asset u-align-center">Our Vision</h2>
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
  <h2 class="heading--one heading--bold heading--primary heading--asset u-align-center">Our Team</h2>
  <section class="team">

    <div class="team-block">
      <img class="team-block__image" class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/tamsila-tauqir.jpg">
      <div class="team-block__info">
        <h4 class="team-block__name">Tamsila Tauqir MBE | <span>Co-founder & Trustee</span></h4>
        <div class="team-block__bio">
          <p>
Tamsila Tauqir MBE is a freelance consultant on issues of policy and intersectional identities as well as being a technical materials engineer. She has held a number of professional and voluntary roles including at Interfaith Alliance UK, Women Living Under Muslim Laws and at Safra Project. She has been awarded a national honour for her voluntary contribution to Muslim communities and was listed in the Huffington Post’s 2013 top 10 list of Muslim women from around the world. Tamsila Tauqir MBE is a freelance consultant on issues of policy and intersectional identities as well as being a technical materials engineer. She has held a number of professional and voluntary roles including at Interfaith Alliance UK, Women Living Under Muslim Laws and at Safra Project. She has been awarded a national honour for her voluntary contribution to Muslim communities and was listed in the Huffington Post’s 2013 top 10 list of Muslim women from around the world.</p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <img class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/board-member-2.jpg">
      <div class="team-block__info">
        <h4 class="team-block__name">Dervla Shannahan | <span>Co-founder</span></h4>
        <div class="team-block__bio">
          <p>
Dervla Zaynab is an academic who has published on a range of subjects including queer sexualities in Muslim communities, hip-hop in Tunisia, ziyarat practices in Iraq, gendered practices in UK mosques and inclusivity in ritual spaces. She is currently working towards her PhD at Goldsmiths, London. Dervla has been involved in various activist scenes for the last decade, is a practising psychotherapist and full-time parent.</p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <img class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/board-member-3.jpg">
      <div class="team-block__info">
        <h4 class="team-block__name">Halima Gosai Hussain | <span>Co-founder & Trustee</span></h4>
        <div class="team-block__bio">
          <p>
Halima has worked for Muslim organisations of varying perspectives for over 10 years. After participating in a mixed gender prayer led by a female Imam, Halima experienced a period of considerable introspection and now works towards living an inclusive, Islamic way. She has a degree in Philosophy & Theology from King’s College London and an MA in Middle Eastern Studies from SOAS, where her research focused on alternative interpretative methodologies of the Quran.</p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <img class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/wasi-daniju.jpg">
      <div class="team-block__info">
        <h4 class="team-block__name">Wasi Daniju | <span>Board Member</span></h4>
        <div class="team-block__bio">
          <p>
Wasi Daniju is a qualified Person-Centred therapist, and a <a class="link" href="http://wasidaniju.500px.com/">photographer</a>, with a focus on photojournalism and depiction of lesser-represented groups.  She has a keen interest in social and ecological justice, and regularly engages in community organising. </p>
        </div>
      </div>
    </div>

    <div class="team-block">
      <img class="team-block__image" src="<?php echo get_template_directory_uri(); ?>/public/images/team/naima-khan.jpg">
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
