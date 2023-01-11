import "../../scss/sections/section-helpers.scss";

"use strict";

(function ($) {

    $(document).ready(function () {

        const
            $petsSlider = $(".pets-list"),
            $hoversTopSlider = $(".hovers-top-list"),
            $hoversBottomSlider = $(".hovers-bottom-list");

        $(".tabs-toggles").on("click", ".toggle-item", function (e) {
            $(e.delegateTarget).find(".toggle-item").removeClass("active");
            $(this).addClass("active");
            $(".tabs-content .content-item").hide();
            $(".tabs-content .content-item:eq(" + $(this).index() + ")").fadeIn();
            $petsSlider.slick("refresh");
            $hoversTopSlider.slick("refresh");
            $hoversBottomSlider.slick("refresh");
        });

        $(".pet-item .info").on("click", function (e) {
            if ($(e.target).hasClass("info")) {
                $(this).toggleClass("active");
            }
        })

        $(document).on("click", function (e) {
            if (!$(e.target).closest(".pet-item .info").length) {
                $(".pet-item .info").removeClass("active");
            }
        })

        $petsSlider.on("init", function (slick) {
            $(".pet-item").removeAttr("data-position");
            $(".pet-item.slick-active").each(function (index) {
                $(this).attr("data-position", index);
            })
        }).on("beforeChange", function (event, slick, currentSlide, nextSlide) {
            $(".pet-item").removeAttr("data-position");
            const offset = nextSlide - currentSlide;
            $(".pet-item.slick-active").each(function (i) {
                $(".pet-item:eq(" + ($(this).index() + offset) + ")").attr("data-position", i);
            })
        }).slick({
            infinite: false,
            arrows: false,
            mobileFirst: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 720,
                    settings: {
                        slidesToShow: 3,
                        initialSlide: 1,
                    }
                },
                {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 5,
                        //dots: false
                    }
                }
            ]
        })

        $hoversTopSlider.slick({
            fade: true,
            dots: false,
            asNavFor: $hoversBottomSlider,
            mobileFirst: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 980,
                    settings: {
                        arrows: true,
                    }
                }
            ]
        })

        $hoversBottomSlider.slick({
            infinite: true,
            slidesToShow: 2,
            arrows: false,
            dots: true,
            mobileFirst: true,
            asNavFor: $hoversTopSlider,
            centerMode: true,
            centerPadding: "0",
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 1260,
                    settings: {
                        slidesToShow: 4,
                    }
                }
            ]
        })

    });

})(jQuery);