// JS
import './js/jquery-3.4.1.min'
import './js/jquery.onepage-scroll'
import './js/odometer'


import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';


// SCSS

import './assets/scss/modules/onepage-scroll.css'
import './assets/scss/main.scss'

$("#main").onepage_scroll({
    easing: "ease",
    pagination: true,
    updateURL: true,
    animationTime: 500,
    pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
    updateURL: true,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
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

$(document).ready(function(){
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