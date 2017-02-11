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
    var videos = $('iframe[src*="vimeo.com"], iframe[src*="youtube.com"]');

    videos.each(function () {
        var el = $(this);
        el.wrap('<div class="responsive-embed widescreen"/>');
    });

  })(jQuery);
}
