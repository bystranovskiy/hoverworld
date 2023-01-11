import "../../scss/sections/section-subscribe.scss";

"use strict";

(function ($) {

    $(document).ready(function () {

        document.addEventListener("wpcf7mailsent", function (event) {
            const thankyouURL = $(event.target).closest(".section-form").data("redirect");
            if (thankyouURL) {
                location = thankyouURL;
            }
        }, false);


    });

})(jQuery);