(function() {
	  window.onload = function() {
		  
		// Creating a reference to the mapDiv
		var mapDiv = document.getElementById('map');
		    
		// Creating a latLng for the center of the map
		var latlng = new google.maps.LatLng(53.491436, -6.192949);
		var infowindow = null;
		// Creating an object literal containing the properties 
		// we want to pass to the map  

		var options = {

		center: latlng,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		disableDefaultUI: true,

		navigationControl: false,
		
					};
	    
		// Creating the map
		var map = new google.maps.Map(mapDiv, options);

		// Creating an array that will contain the coordinates
		// of QualFlow HQ
		var places = [];

		var surfSpots = []

		surfSpots.push('Qualflow Systems - Unit 20 Redleaf Business Park, Turvey Avenue, Donabate, Co. Dublin');

		// Adding a LatLng object for each spot
		
		//QualFlow
		places.push(new google.maps.LatLng(53.491436, -6.192949));
		
		// Looping through the places array
		for (var i = 0; i < places.length; i++) {
		
				// Creating a new marker
				var marker = new google.maps.Marker({
				position: places[i],
				map: map,
				icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png",
				title: surfSpots[i]
								});

				(function(i, marker) {
						google.maps.event.addListener(marker, 'click', function() {
						if (infowindow) {
							infowindow.close();
					    			}
					    infowindow = new google.maps.InfoWindow({
					content: surfSpots[i]
				});
						
		
				infowindow.open(map, marker);
				});
				
		})(i, marker);


		var styles = [
		  {
		    stylers: [
		      { hue: "#008cba" },
		      { saturation: -20 }
		    ]
		  },{
		    featureType: "road",
		    elementType: "geometry",
		    stylers: [
		      { lightness: 100 },
		      { visibility: "simplified" }
		    ]
		  },{
		    featureType: "road",
		    elementType: "labels",
		    stylers: [
		      { visibility: "off" }
		    ]
		  }
		];

		map.setOptions({styles: styles});

				}


				}

	})();









