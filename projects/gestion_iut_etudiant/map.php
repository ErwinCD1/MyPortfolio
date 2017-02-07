  <!-- Map -->
    <div id="contact" class="map">
    <style>
	html, body {
	  height: 100%;
	  margin: 0;
	  padding: 0;
	}

	#map_canvas {
		height: 100%;
		width: 100%;
		margin:0px ;
	}	
	</style>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
    var lycees_coords = [
    [46.9158344,6.3514785,'LYCEE POLYVALENT XAVIER MARMIER (PONTARLIER) 1 étudiants',1],
    [47.8011401,7.1139147,'LYCEE GENERAL ET TECHNOLOGIQUE SCHEURER (THANN) 1 étudiants',1],
    [47.5,7,'LPO LYCEE DES METIERS JEAN JACQUES HENNE (ALTKIRCH) 4 étudiants',4]
    ];
        	

	function initialize() {

		var mapOptions = {
			zoom: 8,
			center: new google.maps.LatLng(47.5,7),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: true,
			scrollwheel: false
		}
		var macarte = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
		setMarkers(macarte,lycees_coords);
	}
	
	function setMarkers(carte, tableau_lycees) {
    	for (var i = 0; i < tableau_lycees.length; i++) {			
			var lycee = tableau_lycees[i];			
			var mesLatLng = new google.maps.LatLng(lycee[0],lycee[1]);
            var texte=lycee[2]+" étudiants";
			var infoWindow = new google.maps.InfoWindow();
            var optionsMarqueur = ({position: mesLatLng, map: carte,title: texte});
            var marqueur = new google.maps.Marker(optionsMarqueur);

			
		}	
	}		
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas"></div>
  </body>
    </div>
    <!-- /Map -->