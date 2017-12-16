(function($) {
  $('[data-behaviour="toggle-button"]').on('click', toggleTabs);

  function toggleTabs() {
    var trigger = $(this);
    var target = $(trigger.attr('href'));

    $('[data-behaviour="toggle-button"]').removeClass('tab-active');
    trigger.addClass('tab-active');

    $('[data-behaviour="toggle-content"]').removeClass('form--active');
    target.addClass('form--active');
  }
})(jQuery);
