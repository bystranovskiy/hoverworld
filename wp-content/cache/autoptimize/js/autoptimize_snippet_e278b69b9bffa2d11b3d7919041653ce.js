!function(){"use strict";var t;(t=jQuery)(document).ready((function(){t(".tabs-toggles").on("click",".toggle-item",(function(e){t(e.delegateTarget).find(".toggle-item").removeClass("active"),t(this).addClass("active")})),t(".pet-item .info").on("click",(function(){t(".pet-item .info").removeClass("active"),t(this).addClass("active")})),t(document).on("click",(function(e){t(e.target).closest(".pet-item .info").length?t(e.target).closest(".pet-item .info.active")&&t(".pet-item .info").removeClass("active"):t(".pet-item .info").removeClass("active")}));var e=t(".pets-list").on("breakpoint",(function(t){setTimeout((function(){720===t.currentTarget.slick.activeBreakpoint&&e.slick("slickGoTo",1)}),500)})).slick({infinite:!1,arrows:!1,mobileFirst:!0,dots:!0,responsive:[{breakpoint:720,settings:{slidesToShow:3,initialSlide:1}},{breakpoint:980,settings:{slidesToShow:5,dots:!1}}]})}))}();