jQuery(document).ready(function() {

    /* Store the window width */
    var windowWidth = $(window).width();

    var imagesLoaded = false;

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
        jQuery(".blog-post-social").removeAttr("style");


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

            console.log('do mobile stuff');

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

            imagesLoaded = true;
            
        } else if (Modernizr.mq('all and (min-width: 1025px)')) {

            console.log('do big screen stuff');

            // Add animations
            new WOW().init();

            //Make sharebuttons sticky use onload to be sure that the images are loaded
            if(!imagesLoaded) {
                window.addEventListener('load', function () {

                    stickyScroll();

                }, false);

                imagesLoaded = true;

            } else {
                stickyScroll();
            }

        } else {
            imagesLoaded = true;
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


    function stickyScroll() {
        jQuery(".blog-post-social").each(function() {

            var stickyDiv = jQuery(this);

            var maxscrollheight = (jQuery(stickyDiv).parent().offset().top + jQuery(stickyDiv).parent().outerHeight()) - (jQuery(stickyDiv).outerHeight() + 50);

            if(jQuery(window).scrollTop() + 50 > jQuery(stickyDiv).parent().offset().top && jQuery(window).scrollTop() < maxscrollheight) {
                console.log("Ik doe alleen wat als ik al gescrolled ben en dan geladen ben");
                sticky();
            }

            jQuery(window).scroll(function(){ // scroll event

                if (jQuery(window).scrollTop() + 50 > jQuery(stickyDiv).parent().offset().top && jQuery(window).scrollTop() < maxscrollheight) {
                    console.log('ik mag nog scrollen');
                    sticky();
                } else if (jQuery(window).scrollTop() > maxscrollheight) {

                    console.log('stop met mee scrollen');

                    stickyAtTheBottom();
                } else {
                    stickyReset();
                }

            });

            function sticky() {

                console.log("maxscrollheight " + maxscrollheight);
                console.log("scroll " + jQuery(window).scrollTop());

                var windowTop = $(window).scrollTop();

                var stickyMarginTop = 50 + windowTop - jQuery(stickyDiv).parent().offset().top;                           
                jQuery(stickyDiv).css({'margin-top': stickyMarginTop, 'position': 'relative' });
                
            }

            function stickyAtTheBottom() {
                // I work without doing anything, livin' the dream
                jQuery(stickyDiv).css({'margin-top': 0, 'bottom': 0, 'right': 0, 'position': 'absolute' });
            }

            function stickyReset() {
                jQuery(stickyDiv).css({'margin-top': 0, 'position': 'relative'  });
            }

        });
    }


});
