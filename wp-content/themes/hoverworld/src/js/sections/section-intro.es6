import "../../scss/sections/section-intro.scss";

"use strict";

(function ($) {

    $(document).ready(function () {

        const $trailerPopup = $(".trailer-popup");
        const $trailerIframe = $trailerPopup.find("iframe");

        $(".intro-button").on("click", function () {
            $trailerPopup.css("display", "flex").hide().fadeIn();
            $("html").addClass("fixed");
        })
        $trailerPopup.on("click", function (e) {
            if (!$(e.target).closest(".trailer-window").length || $(e.target).hasClass("close")) {
                $trailerPopup.fadeOut().find(".inner-wrapper").html($trailerIframe);
                $("html").removeClass("fixed");
            }
        })

    });

})(jQuery);