!function(){"use strict";var n={27:function(){var n,e;n=jQuery,(e=n(".hw-wrap")).each((function(t){var a=e.text().split(" ");e.empty(),n.each(a,(function(t,o){e.append(n("<span class='hw-animate hw-fadeInUp hw-delay-"+100*(t+1)+"'>").text(o)),t<a.length-1&&e.append(" ")}))})),n(".hw-animate").each((function(e){var t=n(this);n(window).on("load scroll",(function(n){t.isInViewport()&&t.addClass("hw-animated")}))})),n.fn.isInViewport=function(){var e=n(this).offset().top,t=e+n(this).outerHeight(),a=n(window).scrollTop(),o=a+n(window).height();return t>a&&e<o}},423:function(){!function(n){function e(e){var t=n("body"),a=e.split("#")[1],o=n("#"+a);o.length>0&&(t.removeClass("nav-active").addClass("nav-passive"),setTimeout((function(){t.removeClass("nav-passive")}),800),n("html,body").animate({scrollTop:o.offset().top-(n(window).width()<980?64:100)}))}n(window).on("load",(function(t){n(".preloader").fadeOut(),e(window.location.hash)})),n(document).ready((function(){n(".menu-toggle").on("click",(function(){var e=n("html");e.hasClass("nav-active")||e.hasClass("nav-passive")?(e.toggleClass("fixed nav-active nav-passive"),setTimeout((function(){e.removeClass("fixed nav-passive")}),800)):e.addClass("fixed nav-active")})),n(".menu-item a").on("click",(function(){e(this.href)}))})),n(window).on("load scroll",(function(e){n(window).scrollTop()>0?n("header").addClass("fixed-header"):n("header").removeClass("fixed-header")}))}(jQuery)}},e={};function t(a){var o=e[a];if(void 0!==o)return o.exports;var i=e[a]={exports:{}};return n[a](i,i.exports,t),i.exports}t.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return t.d(e,{a:e}),e},t.d=function(n,e){for(var a in e)t.o(e,a)&&!t.o(n,a)&&Object.defineProperty(n,a,{enumerable:!0,get:e[a]})},t.o=function(n,e){return Object.prototype.hasOwnProperty.call(n,e)},t(423),t(27)}();