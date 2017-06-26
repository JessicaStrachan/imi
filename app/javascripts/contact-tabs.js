(function($) {
  $('.js-tab').on('click', function(e) {
  	console.log('hello');
    e.preventDefault();
    $(this).toggleClass('tab-active');
    $(this).reset();
    $('.js-form').toggleClass('active');
  });
})(jQuery);
