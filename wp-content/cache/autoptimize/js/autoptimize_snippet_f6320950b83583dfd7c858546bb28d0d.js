!function(){"use strict";var n={27:function(){var n;(n=jQuery)(window).on("load",(function(e){n(".hw-fadeInUp").addClass("hw-animated")})),n.fn.isInViewport=function(){var e=n(this).offset().top,o=e+n(this).outerHeight(),t=n(window).scrollTop(),a=t+n(window).height();return o>t&&e<a}},423:function(){!function(n){function e(e){var o=n("body"),t=e.split("#")[1],a=n("#"+t);a.length>0&&(o.removeClass("nav-active").addClass("nav-passive"),setTimeout((function(){o.removeClass("nav-passive")}),800),n("html,body").animate({scrollTop:a.offset().top-(n(window).width()<980?64:100)}))}n(window).on("load",(function(o){n(".preloader").fadeOut(),e(window.location.hash)})),n(document).ready((function(){n(".menu-toggle").on("click",(function(){var e=n("html");e.hasClass("nav-active")||e.hasClass("nav-passive")?(e.toggleClass("fixed nav-active nav-passive"),setTimeout((function(){e.removeClass("fixed nav-passive")}),800)):e.addClass("fixed nav-active")})),n(".menu-item a").on("click",(function(){e(this.href)}))})),n(window).on("load scroll",(function(e){n(window).scrollTop()>0?n("header").addClass("fixed-header"):n("header").removeClass("fixed-header")}))}(jQuery)}},e={};function o(t){var a=e[t];if(void 0!==a)return a.exports;var i=e[t]={exports:{}};return n[t](i,i.exports,o),i.exports}o.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(e,{a:e}),e},o.d=function(n,e){for(var t in e)o.o(e,t)&&!o.o(n,t)&&Object.defineProperty(n,t,{enumerable:!0,get:e[t]})},o.o=function(n,e){return Object.prototype.hasOwnProperty.call(n,e)},o(423),o(27)}();