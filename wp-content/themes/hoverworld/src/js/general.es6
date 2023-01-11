"use strict";

(function ($) {

    $(window).on("load", function (e) {

        // Remove preloader
        $(".preloader").fadeOut();

        // Scroll to anchor on load
        scrollToAnchor(window.location.hash);

    });

    $(document).ready(function () {
        // Mobile menu toggle
        $(".menu-toggle").on("click", function () {
            const $html = $("html");
            if ($html.hasClass("nav-active") || $html.hasClass("nav-passive")) {
                $html.toggleClass("fixed nav-active nav-passive");
                setTimeout(function () {
                    $html.removeClass("fixed nav-passive");
                }, 800);
            } else {
                $html.addClass("fixed nav-active");
            }
        })

        // Anchor navigation
        $(".menu-item a").on("click", function () {
            scrollToAnchor(this.href);
        })
    })

    $(window).on("load scroll", function (e) {

        // Fixed header on page scroll
        if ($(window).scrollTop() > 0) {
            $("header").addClass("fixed-header");
        } else {
            $("header").removeClass("fixed-header");
        }
    });


    function scrollToAnchor(href) {
        const $body = $("body");
        const anchor = href.split("#")[1];
        const $target = $("#" + anchor);
        if ($target.length > 0) {
            $body.removeClass("nav-active").addClass("nav-passive");
            setTimeout(function () {
                $body.removeClass("nav-passive");
            }, 800);
            $("html,body").animate({scrollTop: $target.offset().top - ($(window).width() < 980 ? 64 : 100)});
        }
    }

})(jQuery);