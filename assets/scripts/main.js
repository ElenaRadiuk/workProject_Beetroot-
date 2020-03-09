(function($) {
  var popup = $("#myPopup"),
      splashContainer = $("#splash-container");

  $('.top-banner__youtube-link').on('click', function () {
    popup.addClass("show");
    splashContainer.addClass("show");
  });
  $('.close_pop-up').on('click', function () {
    popup.removeClass("show");
    splashContainer.removeClass("show");
  })
})(jQuery);
