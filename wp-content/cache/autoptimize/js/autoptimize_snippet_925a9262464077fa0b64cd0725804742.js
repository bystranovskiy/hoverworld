!function(){"use strict";var i;(i=jQuery)(document).ready((function(){var s=i(".pets-list").on("breakpoint",(function(i){setTimeout((function(){720===i.currentTarget.slick.activeBreakpoint&&s.slick("slickGoTo",1)}),500)})).slick({infinite:!1,arrows:!1,slidesToScroll:1,slidesToShow:1,mobileFirst:!0,dots:!0,responsive:[{breakpoint:720,settings:{slidesToShow:3,initialSlide:1,dots:!0}},{breakpoint:980,settings:{slidesToShow:5,dots:!1}}]})}))}();