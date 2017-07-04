      <section class="footer">
        <div class="footer__top">
          <div class="footer__top--contact">
            <h2 class="heading--two heading--bold">Contact Us</h2>
            <ul class="footer__top--contact-requests">
              <li class="footer__top--contact-requests-link"><a href="/contact">Contact</a></li>
            </ul>
            <a class="footer__top--contact-tel" href="tel:+44 203 189 1185">+44 203 189 1185</a>
            <a class="footer__top--contact-email" href="mailto:admin@inclusivemosqueinitiative.org">admin@inclusivemosqueinitiative.org </a>
            <div class="footer__top--social">
              <a class="footer__top--social-link" href="#"><i class="fa fa-facebook"></i></a>
              <a class="footer__top--social-link" href="#"><i class="fa fa-twitter"></i></a>
              <a class="footer__top--social-link" href="#"><i class="fa fa-skype"></i></a>
              <a class="footer__top--social-link paypal-link" href="https://www.paypal.com/uk/cgi-bin/webscr?cmd=_flow&SESSION=xVevG1MrHyVz395Tgsjb5hmcdbp05nVAB6QIYcx2qKVomkYCD7fx2oQC9WS&dispatch=5885d80a13c0db1f8e263663d3faee8d83a0bf7db316a7beb1b14b43acd04037&rapidsState=Donation__DonationFlow___StateDonationBilling&rapidsStateSignature=34846b7fae7e4369413be25a6c09b0fdf7e7b1ef" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/public/images/paypal-donate.jpg"></a>
            </div>
          </div>
          <div class="footer__top--support">
            <h2 class="heading--two heading--bold">Support Us</h2>
            <h4 class="heading--bold">Please join our mailing list. All information is kept confidential and your identity is not shared with anyone else.</h4>
            <?php echo do_shortcode("[mc4wp_form id='21']"); ?>
          </div>
        </div>
        <div class="footer__bottom">
          <img src="<?php echo get_template_directory_uri(); ?>/public/images/imi-logo-footer.png" alt="Imi Logo"/>
          <p>Inclusive Mosque Initiative is a registered charity in England and Wales No. 1161730</p>
          <p>Inclusive Mosque Initiative - &copy; Copyright 2016</p>
        </div>
      </section>

    </main>

    <?php wp_footer(); ?>

  </body>
</html>


