      <section class="footer">
        <div class="footer__top">
          <div class="footer__top--contact">
            <h2 class="heading--two heading--bold">Contact Us</h2>
            <ul class="footer__top--contact-requests">
              <li class="footer__top--contact-requests-link"><a href="#">Consultancy Requests</a></li>
              <li class="footer__top--contact-requests-link"><a href="#">Media Requests</a></li>
              <li class="footer__top--contact-requests-link"><a href="#">Research Participation</a></li>
            </ul>
            <a class="footer__top--contact-email" href="mailto:admin@inclusivemosqueinitiative.org">admin@inclusivemosqueinitiative.org </a>
            <a class="footer__top--contact-tel" href="tel:+44 203 189 1185 ">+44 203 189 1185</a>
            <div class="footer__top--social">
              <a class="footer__top--social-link" href="#"><i class="fa fa-facebook"></i></a>
              <a class="footer__top--social-link" href="#"><i class="fa fa-twitter"></i></a>
              <a class="footer__top--social-link" href="#"><i class="fa fa-skype"></i></a>
              <a class="footer__top--social-link paypal-link" href="https://www.paypal.com/gb/home" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/public/images/paypal-donate.jpg"></a>
            </div>
          </div>
          <div class="footer__top--support">
            <h2 class="heading--two heading--bold">Support Us</h2>
            <h4 class="heading--bold">Please join our mailing list. All information is kept confidential and your identity is not shared with anyone else.</h4>
            <form class="subscribe">
              <input type ="email" name="email" placeholder="enter email address" class="subscribe__input"/>
              <button type="submit" class="subscribe__submit">Subscribe</button>
            </form>
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
