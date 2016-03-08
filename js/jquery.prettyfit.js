(function ( $ ) {
  
  // Default settings, you should change them by calling the .prettyfit function
  var settings = {
    bgImageHeight: 500,
    bgEl: '.prettyfit-bg',
    contentEl: '.prettyfit-content',
    topEl: '.prettyfit-top',
    bottomEl: '.prettyfit-bottom'
  };

  $.fn.prettyfit = function (options) {
    // Override default settings
    if (options) {
      settings = $.extend(settings, options);
    }

    // The for each is needed to treat each element
    return this.each(function() {

      topElHeight = $(this).find(settings.topEl).height();
      bottomElHeight = $(this).find(settings.bottomEl).height();

      // Calculate future contentEl height
      contentElHeight = settings.bgImageHeight + topElHeight + bottomElHeight;

      $(this).find(settings.contentEl).height(contentElHeight);

      // The future height of the element that called the .prettyfit function
      totalElHeight = contentElHeight + 100;

      $(this).height(totalElHeight);

    });

  };

}( jQuery ));