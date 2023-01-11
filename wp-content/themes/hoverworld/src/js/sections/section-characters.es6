import "../../scss/sections/section-characters.scss";

"use strict";

(function ($) {

    $(document).ready(function () {

        let itemIndex = 1;

        const $charactersSlider = $(".characters-list").on("click", ".char-item", function () {
            itemIndex = $(this).data("index");
            slideTo();
        }).on("click", ".slider-dots span", function () {
            itemIndex = $(this).index();
            slideTo();
        })

        document.addEventListener("swiped-right", function (e) {
            if ($(e.target).closest($charactersSlider).length > 0 || $(e.target) === $charactersSlider) {
                itemIndex = itemIndex > 0 ? itemIndex - 1 : 2;
                slideTo();
            }
        });
        document.addEventListener("swiped-left", function (e) {
            if ($(e.target).closest($charactersSlider).length > 0 || $(e.target) === $charactersSlider) {
                itemIndex = itemIndex < 2 ? itemIndex + 1 : 0
                slideTo();
            }
        });

        function slideTo() {
            $(".char-item").removeClass("active");
            $(".char-item[data-index='" + itemIndex + "']").addClass("active");
            $charactersSlider.attr("data-active", itemIndex);
        }

    });

})(jQuery);