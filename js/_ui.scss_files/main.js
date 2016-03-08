jQuery(document).ready(function() {

    // Handle your resize only once total, after a one second calm.
    // This way it saves memory
    jQuery(window).resize(jQuery.debounce(1000, function() {

        mobileFixes();

    }));

    function mobileFixes() {

        // Check the browser size, execute demo when it's really small.
        if(Modernizr.mq('all and (max-width: 599px)')) {

            jQuery(".demo").prettyfit({
                bgImageHeight: 656, // The height of the background image
                bgEl: '.phone-screenshots', // The element where the background image is in
                contentEl: '.prettyfit-content', // The element that contains the top & bottom element
                topEl: '.demo-text-left', // The top element
                bottomEl: '.demo-text-right' // The bottom element
            });

            // jQuery('.mobile-slider').cycle({
            //     timeout: 0,
            //     fx: 'scrollHorz', 
            //     next:   '.mobile-nav .mobile-nav-next', 
            //     prev:   '.mobile-nav .mobile-nav-prev' 
            // });

            jQuery('.mobile-slider').each(function() {
                jQuery(this).cycle({
                    timeout: 0,
                    fx: 'scrollHorz', 
                    next:   '.mobile-nav .mobile-nav-next', 
                    prev:   '.mobile-nav .mobile-nav-prev' 
                });

                console.log('hoi');
            });
            
        } else {
            // Reset the mobile style
            jQuery(".phone-screenshots").removeAttr("style");
            jQuery('.mobile-slider').removeAttr("style");
            jQuery('.mobile-slider .g--third').removeAttr("style");
        }

    }

    // Run the mobile fixes when you first open the page.
    mobileFixes();

    //Masonry grid when device size > $wide breakpoint (800px)
    if(Modernizr.mq('all and (min-width: 800px)')) {
      //gutter equals $wideGutterWidth x container width
      jQuery('.commentlist').attr('id', 'comment-container').addClass('js-masonry').attr('data-masonry-options', '{ "columnWidth": ".comment", "gutter": 35.52, "itemSelector": ".comment" }');
    }

    //Inputfield add class when it has text
    jQuery('input[type="text"]').change(function() { 
        console.log(jQuery(this).val());

        if( jQuery(this).val() ) {
            jQuery(this).addClass('filledin');
        } else {
            jQuery(this).removeClass();
        }

    });

    //FAQ hide and show
    jQuery('#faq-list h4').on( "click", function() {

        jQuery(this).parent().toggleClass('active');

        jQuery(this).next().slideToggle( "slow", function() {
        });

    });


});
