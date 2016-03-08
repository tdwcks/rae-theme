(function ( $ ) {
  
  // Default settings, you should change them by calling the .prettyfit function
  var settings = {
    destroy: false

  };

  $.fn.responsivesticky = function (options) {
    // Override default settings
    if (options) {
      settings = $.extend(settings, options);
    }

    // The for each is needed to treat each element
    return this.each(function() {

      var stickyDiv = jQuery(this);

      if (!settings.destroy) {

        var maxscrollheight = (jQuery(stickyDiv).parent().offset().top + jQuery(stickyDiv).parent().outerHeight()) - (jQuery(stickyDiv).outerHeight() + 50);

        if(jQuery(window).scrollTop() + 50 > jQuery(stickyDiv).parent().offset().top && jQuery(window).scrollTop() < maxscrollheight) {
            sticky(stickyDiv);
        }

        jQuery(window).scroll(function(){ // scroll event

            if (jQuery(window).scrollTop() + 50 > jQuery(stickyDiv).parent().offset().top && jQuery(window).scrollTop() < maxscrollheight && !settings.destroy) {
                sticky(stickyDiv);
            } else if (jQuery(window).scrollTop() > maxscrollheight && !settings.destroy) {
                stickyAtTheBottom(stickyDiv);
            } else {
                stickyReset(stickyDiv);
            }

        });

      } else {
        stickyReset(stickyDiv);
      }

    });

  };

  function sticky(stickyDiv) {

    var stickyMarginTop = 50 + jQuery(window).scrollTop() - jQuery(stickyDiv).parent().offset().top;                           
    jQuery(stickyDiv).css({'top': stickyMarginTop, 'position': 'absolute'});
    
  }

  function stickyAtTheBottom(stickyDiv) {

    jQuery(stickyDiv).removeAttr("style");
    jQuery(stickyDiv).css({'bottom': 0, 'position': 'absolute'});

  }

  function stickyReset(stickyDiv) {

    jQuery(stickyDiv).css({'top': 0, 'position': 'relative'});

  }

}( jQuery ));