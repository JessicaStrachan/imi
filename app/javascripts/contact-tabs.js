(function($) {
  $('.js-contact-tab').on('click', function(e) {
    $('.form-tabs__button.tab-active').removeClass('tab-active');
  	$(this).addClass('tab-active');
    $('.form.form--active').removeClass('form--active');
  	$('.js-contact-form').addClass('form--active');
  });

  $('.js-media-tab').on('click', function(e) {
    $('.form-tabs__button.tab-active').removeClass('tab-active');
  	$(this).addClass('tab-active');
    $('.form.form--active').removeClass('form--active');
  	$('.js-media-form').addClass('form--active');
  });

  $('.js-research-tab').on('click', function(e) {
    $('.form-tabs__button.tab-active').removeClass('tab-active');
  	$(this).addClass('tab-active');
    $('.form.form--active').removeClass('form--active');
  	$('.js-research-form').addClass('form--active');
  });
})(jQuery);
