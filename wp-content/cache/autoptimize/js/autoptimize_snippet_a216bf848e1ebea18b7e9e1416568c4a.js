!function(){"use strict";var e;(e=jQuery)(document).ready((function(){var t=e(".pets-list"),i=e(".hovers-top-list"),s=e(".hovers-bottom-list");e(".tabs-toggles").on("click",".toggle-item",(function(o){e(o.delegateTarget).find(".toggle-item").removeClass("active"),e(this).addClass("active"),e(".tabs-content .content-item").hide(),e(".tabs-content .content-item:eq("+e(this).index()+")").fadeIn(),t.slick("refresh"),i.slick("refresh"),s.slick("refresh")})),e(".pet-item .info").on("click",(function(){e(this).toggleClass("active")})),e(document).on("click",(function(t){e(t.target).closest(".pet-item .info").length||e(".pet-item .info").removeClass("active")})),t.on("breakpoint",(function(e){setTimeout((function(){720===e.currentTarget.slick.activeBreakpoint&&t.slick("slickGoTo",1)}),500)})).slick({infinite:!1,arrows:!1,mobileFirst:!0,dots:!0,responsive:[{breakpoint:720,settings:{slidesToShow:3,initialSlide:1}},{breakpoint:980,settings:{slidesToShow:5,dots:!1}}]}),i.slick({fade:!0,dots:!1,asNavFor:s,mobileFirst:!0,arrows:!1,responsive:[{breakpoint:980,settings:{arrows:!0}}]}),s.slick({infinite:!0,slidesToShow:2,arrows:!1,dots:!0,mobileFirst:!0,asNavFor:i,centerMode:!0,centerPadding:"0",focusOnSelect:!0,responsive:[{breakpoint:980,settings:{slidesToShow:3}},{breakpoint:1260,settings:{slidesToShow:4}}]})}))}();