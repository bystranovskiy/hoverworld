import "../../scss/sections/section-locations.scss";

"use strict";

(function ($) {

    $(document).ready(function () {

        $(".locations-slider").slick({
            swipe: false,
            speed: 500,
            fade: true,
        })

        $(".location-gallery").slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
        })

    });

})(jQuery);