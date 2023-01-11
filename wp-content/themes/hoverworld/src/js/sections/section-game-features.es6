import "../../scss/sections/section-game-features.scss";

"use strict";

(function ($) {

    $(document).ready(function () {

        const $featuresBlock = $(".features-block").on("click", ".item-title .h4", function () {
            $featuresBlock.find(".features-item").removeClass("active");
            const $thisItem = $(this).closest(".features-item").addClass("active");
            $featuresBlock.find(".features-images img").hide();
            $featuresBlock.find(".features-images img:eq(" + $thisItem.index() + ")").fadeIn("slow");
        })
    });


})(jQuery);