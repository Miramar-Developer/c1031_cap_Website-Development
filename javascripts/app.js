;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
    $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationClearing         ? $doc.foundationClearing() : null;
    $.fn.placeholder                ? $('input, textarea').placeholder() : null;
  });

  // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
  if (Modernizr.touch && !window.location.hash) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }
  
  $( function() {
    $("button[data-href]").click( function() {
        location.href = $(this).attr("data-href");
    });
});

})(jQuery, this);


