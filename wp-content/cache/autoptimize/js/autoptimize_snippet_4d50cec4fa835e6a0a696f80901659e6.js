!function(){"use strict";var i;(i=jQuery)(document).ready((function(){var e=i(".pets-list").on("breakpoint",(function(){e.slick("slickGoTo",2),console.log("breakpoint")})).slick({infinite:!1,arrows:!1,slidesToScroll:1,slidesToShow:1,mobileFirst:!0,centerMode:!0,initialSlide:3,responsive:[{breakpoint:720,settings:{slidesToShow:3,initialSlide:3}},{breakpoint:980,settings:{slidesToShow:5,initialSlide:3}}]})}))}();