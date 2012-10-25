function initialize() 
{
	var marker, i;
    
    var map;

    var myLatlng = new google.maps.LatLng(49.419237,2.825838);

    var myOptions = {
        zoom: 9,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoomControl: false,
        streetViewControl: false,
        mapTypeControl: false
    }

   	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);


   	var locations = [
   	["Compiégne", 49.418197, 2.824279],
   	["Noyon", 49.581626,2.998264],
   	["Thourotte", 49.476093,2.881309],
   	];



	for (i = 0; i < locations.length; i++) {

        var optionsMarqueur = {
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map,
					title: locations[i][0]
				}
		var marqueur = new google.maps.Marker(optionsMarqueur);
	};



  /*-----------------------------------------Compiégne-----------------------------------------------------*/
    var myLatlng = new google.maps.LatLng(49.419237,2.825838);
     var myOptions = {
        zoom: 9,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
  var map_comp = new google.maps.Map(document.getElementById("map_comp"), myOptions);
  /*var optionsMarqueur = {
          position: new google.maps.LatLng(49.418197, 2.824279),
          map: map,
          title: "Compiégne"
        }
    var marqueur = new google.maps.Marker(optionsMarqueur);*/

  /*----------------------------------------fin-Compiégne-----------------------------------------------------*/

}