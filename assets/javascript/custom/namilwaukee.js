if (typeof jQuery != typeof undefined) {

  // jQuery Document Ready
  (function($) {
    // Variables
    var $document = $(document);
    var $window = $(window);

    // Init Foundation
    $document.foundation();
    // Sticky Footer
    $window.on('load resize orientationChange', function() {
      var $footer = $('#footer-container');
      var $pos = $footer.position();
      var $height = $window.height();
      $height = ($height - $pos.top) - $footer.height() - 1;

      function $stickyFooter() {
        $footer.css({
          'margin-top': $height + 'px'
        });
      }

      if ($height > 0) {
        $stickyFooter();
      }
    });

    // Add responsive wrappers for videos
    $('iframe[src*="youtube.com"]').wrap("<div class='flex-video widescreen'/>");
    $('iframe[src*="vimeo.com"]').wrap("<div class='flex-video widescreen vimeo'/>");

  })(jQuery);
}
