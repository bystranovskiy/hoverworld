!function(){"use strict";var e={423:function(){var e;(e=jQuery)(window).on("load",(function(n){e(".preloader").fadeOut()})),e(document).ready((function(){e(".menu-toggle").on("click",(function(){var n=e("body");n.hasClass("nav-active")||n.hasClass("nav-passive")?(n.toggleClass("nav-active nav-passive"),setTimeout((function(){n.removeClass("nav-passive")}),800)):n.addClass("nav-active")})),e(".menu-item a").on("click",(function(n){n.preventDefault();var o=this.href.split("#")[1],t=e("#"+o);t.length>0&&(e("html,body").animate({scrollTop:t.offset().top-(e(window).width()<980?64:100)}),window.location.hash=o)}))})),e(window).on("load scroll",(function(n){e(window).scrollTop()>0?e("header").addClass("fixed-header"):e("header").removeClass("fixed-header")}))}},n={};function o(t){var a=n[t];if(void 0!==a)return a.exports;var r=n[t]={exports:{}};return e[t](r,r.exports,o),r.exports}o.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(n,{a:n}),n},o.d=function(e,n){for(var t in n)o.o(n,t)&&!o.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:n[t]})},o.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},o(423)}();