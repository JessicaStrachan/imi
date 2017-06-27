(function($) {
  $('.js-tab').on('click', function(e) {
  	console.log('hello');
    e.preventDefault();
    $(this).toggleClass('tab-active');
    $('.form').toggleClass('form--active');
  });

  $('.js-contact-tab').on('click', function(e) {
  	$(this).toggleClass('tab-active');
  	$('.js-contact-form').toggleClass('form--active');
  });

  $('.js-media-tab').on('click', function(e) {
  	$(this).toggleClass('tab-active');
  	$('.js-media-form').toggleClass('form--active');
  });

  $('.js-research-tab').on('click', function(e) {
  	$(this).toggleClass('tab-active');
  	$('.js-research-form').toggleClass('form--active');
  });
})(jQuery);
