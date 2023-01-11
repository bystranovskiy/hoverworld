"use strict";

(function ($) {


    $(".hw-animate").each(function (index) {
        const self = $(this);
        $(window).on("load scroll", function (e) {
            if (self.isInViewport()) {
                self.addClass("hw-animated");
            }
        })
    })


    $.fn.isInViewport = function () {
        const elementTop = $(this).offset().top;
        const elementBottom = elementTop + $(this).outerHeight();
        const viewportTop = $(window).scrollTop();
        const viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

})(jQuery);