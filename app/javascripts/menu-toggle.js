(function($) {
  $('.page-header').on('click', '.js-menu-icon', function(e) {
  	console.log('hello');
    e.preventDefault();
    $(this).toggleClass('active');
    $('.js-nav-menu').toggleClass('active');
    $('body').toggleClass('hidden');
  });
})(jQuery);