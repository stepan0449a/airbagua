// JS
import './js/jquery-3.4.1.min'
import './js/jquery.onepage-scroll'


import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';


// SCSS

import './assets/scss/modules/onepage-scroll.css'
import './assets/scss/main.scss'

//dsdsadasdasd


import './js/classie'
import './js/uiMorphingButton_fixed'
//adasdasdasdasd

(function() {
    var docElem = window.document.documentElement,
        didScroll, scrollPosition,
        container = document.getElementById('container_menu');

    // trick to prevent scrolling when opening/closing button
    function noScrollFn() {
        window.scrollTo(scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0);
    }

    function noScroll() {
        window.removeEventListener('scroll', scrollHandler);
        window.addEventListener('scroll', noScrollFn);
    }

    function scrollFn() {
        window.addEventListener('scroll', scrollHandler);
    }

    function canScroll() {
        window.removeEventListener('scroll', noScrollFn);
        scrollFn();
    }

    function scrollHandler() {
        if (!didScroll) {
            didScroll = true;
            setTimeout(function() { scrollPage(); }, 60);
        }
    };

    function scrollPage() {
        scrollPosition = { x: window.pageXOffset || docElem.scrollLeft, y: window.pageYOffset || docElem.scrollTop };
        didScroll = false;
    };

    scrollFn();

    var el = document.querySelector('.morph-button');

    new UIMorphingButton(el, {
        closeEl: '.icon-close',
        onBeforeOpen: function() {
            // don't allow to scroll
            noScroll();
            // push main container
            classie.addClass(container, 'pushed');
        },
        onAfterOpen: function() {
            // can scroll again
            canScroll();
            // add scroll class to main el
            classie.addClass(el, 'scroll');
        },
        onBeforeClose: function() {
            // remove scroll class from main el
            classie.removeClass(el, 'scroll');
            // don't allow to scroll
            noScroll();
            // push back main container
            classie.removeClass(container, 'pushed');
        },
        onAfterClose: function() {
            // can scroll again
            canScroll();
        }
    });
})();


//asdasdadasdas

$("#main").onepage_scroll({
    easing: "ease",
    pagination: true,
    updateURL: true,
    animationTime: 500,
    beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
    afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
    loop: true,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
    keyboard: true,                  // You can activate the keyboard controls
    responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
    // the browser's width is less than 600, the fallback will kick in.
    direction: "vertical"
});



$(".button_up").click(function(){
    $("#main").moveUp();
});``
$(".button_down").click(function(){
    $("#main").moveDown();
});
$(".menu_1").click(function(){
    $(".main").moveTo(1);
});
$(".menu_2").click(function(){
    $(".main").moveTo(2);
});
$(".menu_3").click(function(){
    $(".main").moveTo(3);
});
$(".menu_4").click(function(){
    $(".main").moveTo(4);
});
$(".menu_5").click(function(){
    $(".main").moveTo(5);
});
$(".menu_6").click(function(){
    $(".main").moveTo(6);
});
$(".menu_7").click(function(){
    $(".main").moveTo(7);
});
$(".menu_8").click(function(){
    $(".main").moveTo(8);
});
$(".menu_9").click(function(){
    $(".main").moveTo(9);
});
$(document).ready(function(){
    
    $(".owl-carousel").owlCarousel({
        loop: true,
    });
    var serviceCarousel = $('.features-slider');
    if (serviceCarousel.length > 0) {
        serviceCarousel.owlCarousel({
            merge: true,
            smartSpeed: 1000,
            loop: true,
            nav: true,
            center: false,
            dots: false,
            navText: ['<i class="dripicons-arrow-thin-left"></i>', '<i class="dripicons-arrow-thin-right"></i>'],
            autoplay: false,
            autoplayTimeout: 3000,
            margin: 0,
            responsiveClass: true,
            responsive: {
                0: {
                    center: true,
                    nav: false,
                    dots: true,
                    items: 1
                },
                600: {
                    nav: false,
                    dots: true,
                    items: 3
                },
                1000: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
    }
  });

