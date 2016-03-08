jQuery(document).ready(function() {

    /* Store the window width */
    var windowWidth = $(window).width();

    $.cookieBar({
        message: 'We use cookies to track usage and preferences. View our <a id="cookie-policy" href="#">cookie policy</a>.',
        acceptText: 'Accept',
        bottom: true,
        fixed: true
    });

    // Handle your resize only once total, after a one second calm.
    // This way it saves memory
    jQuery(window).resize(jQuery.debounce(1000, function() {

        // Check window width has actually changed and it's not just iOS triggering a resize event on scroll
        if ($(window).width() != windowWidth) {

            // Update the window width for next time
            windowWidth = $(window).width();

            // Do stuff here
            mobileFixes();

        }

    }));

    function mobileFixes() {

        // Reset the mobile style
        jQuery(".phone-screenshots").removeAttr("style");
        jQuery('.mobile-slider').removeAttr("style");
        jQuery('.mobile-slider .g--third').removeAttr("style");
        jQuery('.mobile-slider .demo').removeAttr("style");
        jQuery('.blog-post-social').removeAttr("style");


        //Pretty navbar
        $(window).scroll(function() {
            var winPos = $(window).scrollTop();
            if (winPos > 80) {
                $('.nav').addClass('small-menu');
            } else {
                $('.nav').removeClass('small-menu');
            }
        });


        // Check the browser size, execute
        if(Modernizr.mq('all and (max-width: 768px)')) {

            jQuery(stickyDiv).removeAttr("style");

            jQuery(".demo").prettyfit({
                bgImageHeight: 378, // The height of the background image
                bgEl: '.phone-screenshots', // The element where the background image is in
                contentEl: '.prettyfit-content', // The element that contains the top & bottom element
                topEl: '.demo-text-left', // The top element
                bottomEl: '.demo-text-right' // The bottom element
            });

            jQuery('.mobile-slider').each(function() {

                jQuery(this).cycle('destroy');

                jQuery(this).cycle({
                    timeout: 0,
                    fx: 'scrollHorz',
                    cleartypeNoBg: true,
                    speed: 800,
                    next:   jQuery(this).parent().find('.mobile-nav .mobile-nav-next'), 
                    prev:   jQuery(this).parent().find('.mobile-nav .mobile-nav-prev') 
                });

                jQuery(this).swipe({
                    swipeLeft:function(event, direction, distance, duration, fingerCount) {
                        jQuery(this).cycle("next");
                    },
                    swipeRight:function(event, direction, distance, duration, fingerCount) {
                        jQuery(this).cycle("prev");
                    },
                    //Default is 75px, set to 0 for demo so any distance triggers swipe
                    threshold:0
                });


            });
            
        } else if (Modernizr.mq('all and (min-width: 1025px)')) {

            // Add animations
            new WOW().init();


            //Make sharebuttons sticky use onload to be sure that the images are loaded
            window.addEventListener('load', function () {

                jQuery(".blog-post-social").each(function() {

                    var stickyDiv = jQuery(this);

                    var stickyTop = jQuery(this).offset().top; // returns number

                    if($(window).scrollTop() > 0) {
                        stickyScroll();
                    }

                    $(window).scroll(function(){ // scroll event
                        stickyScroll();
                    });

                    function stickyScroll() {
                        var windowTop = $(window).scrollTop(); // returns number

                        console.log("Blog post hoogte: " + jQuery(stickyDiv).parent().height());
                        console.log("Blog post afstand: " + jQuery(stickyDiv).parent().offset().top);

                        console.log("Sticky div hoogte: " + jQuery(stickyDiv).height());
                        console.log("Sticky div afstand: " + stickyTop);

                        var postMaxDistance = jQuery(stickyDiv).parent().height() + jQuery(stickyDiv).parent().offset().top;

                        var stickyStopScrollHeight = postMaxDistance - jQuery(stickyDiv).height() - 50;

                        console.log(stickyStopScrollHeight);

                        console.log(windowTop);

                        if (stickyTop < windowTop){

                            if (jQuery(stickyDiv).offset().top > stickyStopScrollHeight) {

                                if (stickyStopScrollHeight > windowTop) {

                                    console.log("ik moet normaal doen hoor");

                                    var stickyMarginTop = 50 + windowTop - stickyTop;                           
                                    jQuery(stickyDiv).css({'margin-top': stickyMarginTop });

                                } else {
                                    console.log("dit is het einde");
                                }

                            } else {

                                var stickyMarginTop = 50 + windowTop - stickyTop;                           
                                jQuery(stickyDiv).css({'margin-top': stickyMarginTop });

                            }
                        } else { 
                            jQuery(stickyDiv).removeAttr("style");
                        }
                    }

                });


            }, false);

        } else {
            jQuery(stickyDiv).removeAttr("style");
        }

    }

    // Run the mobile fixes when you first open the page.
    mobileFixes();

    //Inputfield add class when it has text
    jQuery('input[type="text"]').change(function() { 

        if( jQuery(this).val() ) {
            jQuery(this).addClass('filledin');
        } else {
            jQuery(this).removeClass();
        }

    });

    //FAQ hide and show
    jQuery('.dynamic-list h4').on( "click", function() {

        jQuery(this).parent().toggleClass('active');

        jQuery(this).next().slideToggle( "slow", function() {});

    });


});
