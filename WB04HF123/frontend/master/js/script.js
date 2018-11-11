/*!
 *
 * Angle - Bootstrap Admin Template
 *
 * Version: 4.0
 * Author: @themicon_co
 * Website: http://themicon.co
 * License: https://wrapbootstrap.com/help/licenses
 *
 */

(function($) {
    'use strict';

    if (typeof $ === 'undefined') { throw new Error('This site\'s JavaScript requires jQuery'); }

    // cache common elements
    var $win = $(window);
    var $doc = $(document);
    var $body = $('body');


    // Site Preloader
    // -----------------------------------

    NProgress.start();

    $('#header').waitForImages(function() {
        NProgress.done();
        $body.addClass('site-loaded');
    });

    // Init Writing Mode
    // -----------------------------------

    // Global RTL Flag
    window.modeRTL = false;
    // get mode from local storage
    modeRTL = !!localStorage.getItem('modeRTL');
    console.log('Site is in ' + (modeRTL ? 'RTL' : 'LTR') + ' mode.');


    // Show sticky topbar on scroll
    // -----------------------------------

    var stickyNavScroll;
    var stickySelector = '.navbar-sticky';

    // Setup functions based on screen
    if (matchMedia) {
        if (matchMedia('(min-width: 992px), (max-width: 767px)').matches) {
            stickyNavScroll = function() {
                var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
                if (top > 40) $(stickySelector).stop().animate({ 'top': '0' });

                else $(stickySelector).stop().animate({ 'top': '-80' });
            };
        }

        if (matchMedia('(min-width: 768px) and (max-width: 991px)').matches) {
            stickyNavScroll = function() {
                var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
                if (top > 40) $(stickySelector).stop().animate({ 'top': '0' });

                else $(stickySelector).stop().animate({ 'top': '-120' });
            };
        }
    }

    // Finally attach to events
    $doc.ready(stickyNavScroll);
    $win.scroll(stickyNavScroll);


    // Sticky Navigation
    // -----------------------------------

    $(function() {

        var mainNavbar = $('.main-navbar');
        mainNavbar
            .find('a[href]')
            .not('.external')
            .on('click', function(e) {
                e.preventDefault();

                // mark as 'current' for styling
                mainNavbar.find('.current').removeClass('current');
                $(e.target).addClass('current');

                $('html, body').stop().animate({
                    scrollTop: Math.round($(this.getAttribute('href')).offset().top) + 'px'
                }, 500);

                $('.navbar-collapse').collapse('hide')
            });

    });


    // Smooth Scroll
    // -----------------------------------
    var scrollAnimationTime = 1200,
        scrollAnimationFunc = 'easeInOutExpo',
        $root = $('html, body');

    $(function() {
        $('.scrollto').on('click.smoothscroll', function(event) {

            event.preventDefault();

            var target = this.hash;

            // console.log($(target).offset().top)

            $root.stop().animate({
                'scrollTop': $(target).offset().top
            }, scrollAnimationTime, scrollAnimationFunc, function() {
                window.location.hash = target;
            });
        });

    });

    // Self close navbar on mobile click
    // -----------------------------------
    $(function() {
        var navMain = $("#navbar-main");
        var navToggle = $('.navbar-toggle');

        navMain.on('click', 'a', null, function() {
            if (navToggle.is(':visible'))
                navMain.collapse('hide');
        });
    });


    // Element Animation (AOS)
    // -----------------------------------

    $(AOS.init);


    // Owl Crousel
    // -----------------------------------

    $(function() {

        $('#feedback-carousel').owlCarousel({
            rtl: window.modeRTL,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                }
            }
        });

        $('#appshots').owlCarousel({
            rtl: window.modeRTL,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                500: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: false,
                    loop: false
                }
            }
        });

    });


})(window.jQuery);