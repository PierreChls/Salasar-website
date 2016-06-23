function simulate_remove(){
	$('#link_remove_first_product').trigger( 'click' );
}

function initialize() {

	var styles = [
	    {
	        "featureType": "all",
	        "elementType": "labels.text.fill",
	        "stylers": [
	            {
	                "saturation": 36
	            },
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 40
	            }
	        ]
	    },
	    {
	        "featureType": "all",
	        "elementType": "labels.text.stroke",
	        "stylers": [
	            {
	                "visibility": "on"
	            },
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 16
	            }
	        ]
	    },
	    {
	        "featureType": "all",
	        "elementType": "labels.icon",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative",
	        "elementType": "all",
	        "stylers": [
	            {
	                "color": "#d76565"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 20
	            }
	        ]
	    },
	    {
	        "featureType": "administrative",
	        "elementType": "geometry.stroke",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 17
	            },
	            {
	                "weight": 1.2
	            }
	        ]
	    },
	    {
	        "featureType": "administrative",
	        "elementType": "labels",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative",
	        "elementType": "labels.text",
	        "stylers": [
	            {
	                "color": "#ff6b00"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative.country",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "simplified"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative.country",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "visibility": "simplified"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative.country",
	        "elementType": "labels.text",
	        "stylers": [
	            {
	                "visibility": "simplified"
	            },
	            {
	                "color": "#c27171"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative.province",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative.locality",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "simplified"
	            },
	            {
	                "saturation": "98"
	            },
	            {
	                "lightness": "30"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative.neighborhood",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative.land_parcel",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "landscape",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "simplified"
	            },
	            {
	                "gamma": "0.00"
	            },
	            {
	                "lightness": "74"
	            }
	        ]
	    },
	    {
	        "featureType": "landscape",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 20
	            }
	        ]
	    },
	    {
	        "featureType": "landscape.man_made",
	        "elementType": "all",
	        "stylers": [
	            {
	                "lightness": "3"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "all",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 21
	            }
	        ]
	    },
	    {
	        "featureType": "road",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "visibility": "simplified"
	            }
	        ]
	    },
	    {
	        "featureType": "road.highway",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 17
	            }
	        ]
	    },
	    {
	        "featureType": "road.highway",
	        "elementType": "geometry.stroke",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 29
	            },
	            {
	                "weight": 0.2
	            }
	        ]
	    },
	    {
	        "featureType": "road.arterial",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 18
	            }
	        ]
	    },
	    {
	        "featureType": "road.local",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 16
	            }
	        ]
	    },
	    {
	        "featureType": "transit",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 19
	            }
	        ]
	    },
	    {
	        "featureType": "water",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#000000"
	            },
	            {
	                "lightness": 17
	            }
	        ]
	    }
	];

	var styledMap = new google.maps.StyledMapType(styles, {name: "Gmap stylée"});
	var myLatlng = new google.maps.LatLng(42.916826, 2.20505);
	var mapOptions = {
		center: new google.maps.LatLng(42.916826, 2.20505),
		zoom: 12,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	};
        
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'My Home'
	});
		
	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');
}

google.maps.event.addDomListener(window, 'load', initialize);