!function(){"use strict";var t;(t=jQuery)(document).ready((function(){t(".tabs-toggles").on("click",".toggle-item",(function(i){t(i.delegateTarget).find(".toggle-item").removeClass("active"),t(this).addClass("active")})),t(".pet-item .info").on("click",(function(){t(this).toggleClass("active")})),t(document).on("click",(function(i){t(i.target).closest(".pet-item .info").length||t(".pet-item .info").removeClass("active")}));var i=t(".pets-list").on("breakpoint",(function(t){setTimeout((function(){720===t.currentTarget.slick.activeBreakpoint&&i.slick("slickGoTo",1)}),500)})).slick({infinite:!1,arrows:!1,mobileFirst:!0,dots:!0,responsive:[{breakpoint:720,settings:{slidesToShow:3,initialSlide:1}},{breakpoint:980,settings:{slidesToShow:5,dots:!1}}]}),e=t(".hovers-top-list"),s=t(".hovers-bottom-list");e.slick({fade:!0,dots:!1,asNavFor:s}),s.slick({infinite:!0,slidesToShow:2,arrows:!1,dots:!0,mobileFirst:!0,asNavFor:e,focusOnSelect:!0,responsive:[{breakpoint:720,settings:{slidesToShow:3}},{breakpoint:980,settings:{slidesToShow:4}}]})}))}();