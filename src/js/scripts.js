// jQuery(window).on("load", function() {
// 	"use strict";
//
//
// 	/* -----------------------------------------
// 	 FlexSlider Init
// 	 ----------------------------------------- */
//
//
//
//
// });


jQuery(document).ready(function($){



	var slider = jQuery('.flexslider');
	if ( slider.length ) {
		jQuery(".flexslider").flexslider({
			animation: "slide",
			directionNav: true,
			controlNav: false,
			prevText: '',
			nextText: '',
			start: function(slider) {
				slider.removeClass('loading');
			}
		});
	}
	/* -----------------------------------------
	 open_popup_booking
	 ----------------------------------------- */

	$('#phone_mask').mask('000000000');

	$("#open_popup_booking").click(function () {
		$("#popup_booking_block_step1").toggle();
	});


	
	



	




	
// device detection








	/* -----------------------------------------
	 FlexSlider Init
	 ----------------------------------------- */
	if($('#carousel').length > 0){
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: true,
			animationLoop: false,
			slideshow: true,
			// itemWidth: 210,
			// itemMargin: 5,
			// asNavFor: '#slider',
			prevText: '',
			nextText: ''
		});
	}
	if($('#carousel2').length > 0){
		$('#carousel2').flexslider({
			animation: "slide",
			// controlNav: false,
			// animationLoop: false,
			// slideshow: false,
			// itemWidth: 210,
			// itemMargin: 5,
			// asNavFor: '#slider',
			prevText: '',
			nextText: ''
		});
	}

	if($('#slider').length > 0){
		$('#slider').flexslider({
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel",
			directionNav: false,
			prevText: '',
			nextText: ''
		});
	}

	if($(".testimonial-slider").length > 0){
		$(".testimonial-slider").flexslider({
			directionNav: false,
			direction: "vertical",
			controlNav: true
		});
	}

	//fix the resizing issue on the carousel
	var carousel_width = $("#slider").width();
	$("#carousel").css('width', carousel_width);

	$(window).resize(function() {
		var carousel_width = $("#slider").width();
		$("#carousel").css('width', carousel_width);

	});

	/* -----------------------------------------
	 Responsive Menus Init with mmenu
	 ----------------------------------------- */
	var maiNnav = $(".navigation"),
			mobileNav = $("#mobilemenu");
			mobileNav.append('<ul></ul>');
	var	mobileUl = $('#mobilemenu > ul');



	/* -----------------------------------------
	 Mobile Menu
	 ----------------------------------------- */
	maiNnav.each(function() {
		var content = $(this).html();
			mobileUl.append(content);
	});
	mobileUl.find('li').attr('id', '');
	mobileNav.mmenu({
		offCanvas: {
			position: 'top',
			zposition: 'front',
			isMenu: true
		}
	});

	/* -----------------------------------------
	 Main Navigation Init
	 ----------------------------------------- */
	$('.navigation').superfish({
		delay:       300,
		animation:   { opacity:'show', height:'show' },
		speed:       'fast',
		dropShadows: false
	});

	/* -----------------------------------------
	 Responsive Videos with fitVids
	 если включить его то при изменении размера браузера будет менятся размер видео
	 ----------------------------------------- */
	$('body').fitVids();


	/* -----------------------------------------
	 Dropkick
	 ----------------------------------------- */
	var select = $(".dk, .widget select");
	select.dropkick({
		theme: 'ci',
		mobile: true
	});

	/* -----------------------------------------
	 Fancybox
	 ----------------------------------------- */
	$(".fancybox, a[data-rel^='fancybox[']").fancybox({
		fitToView: true,
		padding: 0,
		nextEffect: 'fade',
		prevEffect: 'fade'
	});

	/* -----------------------------------------
	 Top row visibility
	 ----------------------------------------- */
	var map_icon = $('#map-icon');
	map_icon.click(function(){
		var panel = $('#panel');
		panel.toggle();
		map_init('panel-map');
		
			
		// var map_icon = document.getElementsByClassName("fa-map-marker")[0];
		var weather = document.getElementById("weather-widget");
		var misc = document.getElementById("misc");
		if (panel.is(':visible')) {
			
			map_icon.css({
				"font-size" : "red"
			});
			// map_icon.style.fontSize = "20px";
			// map_icon.style.color = "#d3b274"
			// weather.style.display = "block";
			// misc.style.display = "block";
			
		} else {
			map_icon.css({
				"font-size": "20",
				"color" : "#d3b274"
			});
			// map_icon.style.color = "red"
			// map_icon.style.fontSize = "40px";
			// weather.style.display = "none";
			// misc.style.display = "none";
						
		}
	
		
		
	
		// addResponsiveWhenWeOpenMap();
	});

	map_init('panel-map');

	/* -----------------------------------------
	 Page map
	 ----------------------------------------- */
	if ( $("#map").length ) {
		map_init('map');
	}

});
/*
Добавление Google карты на сайт
 */

function map_init(map_element) {
	'use strict';
	var mapStyleWhite = [
		{
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#f5f5f5"
				}
			]
		},
		{
			"elementType": "labels.icon",
			"stylers": [
				{
					"visibility": "off"
				}
			]
		},
		{
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#616161"
				}
			]
		},
		{
			"elementType": "labels.text.stroke",
			"stylers": [
				{
					"color": "#f5f5f5"
				}
			]
		},
		{
			"featureType": "administrative.land_parcel",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#bdbdbd"
				}
			]
		},
		{
			"featureType": "poi",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#eeeeee"
				}
			]
		},
		{
			"featureType": "poi",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#757575"
				}
			]
		},
		{
			"featureType": "poi.business",
			"stylers": [
				{
					"visibility": "off"
				}
			]
		},
		{
			"featureType": "poi.park",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#e5e5e5"
				}
			]
		},
		{
			"featureType": "poi.park",
			"elementType": "labels.text",
			"stylers": [
				{
					"visibility": "off"
				}
			]
		},
		{
			"featureType": "poi.park",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#9e9e9e"
				}
			]
		},
		{
			"featureType": "road",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#ffffff"
				}
			]
		},
		{
			"featureType": "road.arterial",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#757575"
				}
			]
		},
		{
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#dadada"
				}
			]
		},
		{
			"featureType": "road.highway",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#616161"
				}
			]
		},
		{
			"featureType": "road.local",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#9e9e9e"
				}
			]
		},
		{
			"featureType": "transit.line",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#e5e5e5"
				}
			]
		},
		{
			"featureType": "transit.station",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#eeeeee"
				}
			]
		},
		{
			"featureType": "water",
			"stylers": [
				{
					"weight": 0.5
				}
			]
		},
		{
			"featureType": "water",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#8eafff"
				},
				{
					"weight": 0.5
				}
			]
		},
		{
			"featureType": "water",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#9e9e9e"
				}
			]
		}
	];
	var mapStyleBlack = [
		{elementType: 'geometry', stylers: [{color: '#242f3e'}]},
		{elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
		{elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
		{
			featureType: 'administrative.locality',
			elementType: 'labels.text.fill',
			stylers: [{color: '#d59563'}]
		},
		{
			featureType: 'poi',
			elementType: 'labels.text.fill',
			stylers: [{color: '#d59563'}]
		},
		{
			featureType: 'poi.park',
			elementType: 'geometry',
			stylers: [{color: '#263c3f'}]
		},
		{
			featureType: 'poi.park',
			elementType: 'labels.text.fill',
			stylers: [{color: '#6b9a76'}]
		},
		{
			featureType: 'road',
			elementType: 'geometry',
			stylers: [{color: '#38414e'}]
		},
		{
			featureType: 'road',
			elementType: 'geometry.stroke',
			stylers: [{color: '#212a37'}]
		},
		{
			featureType: 'road',
			elementType: 'labels.text.fill',
			stylers: [{color: '#9ca5b3'}]
		},
		{
			featureType: 'road.highway',
			elementType: 'geometry',
			stylers: [{color: '#746855'}]
		},
		{
			featureType: 'road.highway',
			elementType: 'geometry.stroke',
			stylers: [{color: '#1f2835'}]
		},
		{
			featureType: 'road.highway',
			elementType: 'labels.text.fill',
			stylers: [{color: '#f3d19c'}]
		},
		{
			featureType: 'transit',
			elementType: 'geometry',
			stylers: [{color: '#2f3948'}]
		},
		{
			featureType: 'transit.station',
			elementType: 'labels.text.fill',
			stylers: [{color: '#d59563'}]
		},
		{
			featureType: 'water',
			elementType: 'geometry',
			stylers: [{color: '#17263c'}]
		},
		{
			featureType: 'water',
			elementType: 'labels.text.fill',
			stylers: [{color: '#515c6d'}]
		},
		{
			featureType: 'water',
			elementType: 'labels.text.stroke',
			stylers: [{color: '#17263c'}]
		}
	];
	var uluru = {lat: 46.124327, lng: 32.272250};
	var myLatlng = new google.maps.LatLng(uluru);
	var mapOptions = {
		zoom: 15,
		center: myLatlng,
		styles: mapStyleBlack,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById(map_element), mapOptions);

	var contentString = '<div id="content"><p>Пансионат Верона</p><p><b>Адрес:</b>ул. Школьная, 65/30</p><img src="/assets/images/map_streed_mini.jpeg" alt="ул. Школьная, 65/30"></div>';

	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Пансионат Верона'
	});
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
}

