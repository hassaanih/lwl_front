function initMaps() {
    var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();
    var map = new google.maps.Map(document.getElementById("maps"), {
      zoom: 10,
      center: { lat: 41.8781, lng: -87.6298 }
    });
    directionsRenderer.setMap(map);
  
    var pickupInput = document.getElementById("ploc");
    var dropInput = document.getElementById("daddress");
    var pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
    var dropAutocomplete = new google.maps.places.Autocomplete(dropInput);
  
    var pickupMarker = new google.maps.Marker({ map: map });
    var dropMarker = new google.maps.Marker({ map: map });
  
    pickupAutocomplete.addListener("place_changed", function() {
      var place = pickupAutocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
      pickupMarker.setPosition(place.geometry.location);
      calculateAndDisplayRoute(directionsService, directionsRenderer);
    });
  
    dropAutocomplete.addListener("place_changed", function() {
      var place = dropAutocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
      dropMarker.setPosition(place.geometry.location);
      calculateAndDisplayRoute(directionsService, directionsRenderer);
    });
  
    function calculateAndDisplayRoute(directionsService, directionsRenderer) {
      directionsService.route(
        {
          origin: pickupMarker.getPosition(),
          destination: dropMarker.getPosition(),
          travelMode: google.maps.TravelMode.DRIVING
        },
        function(response, status) {
          if (status === "OK") {
            directionsRenderer.setDirections(response);
          } else {
            window.alert("Directions request failed due to " + status);
          }
        }
      );
    }
  }