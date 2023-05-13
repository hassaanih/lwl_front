function initMaps() {
  var directionsService = new google.maps.DirectionsService();
  var directionsRenderer = new google.maps.DirectionsRenderer();
  var mapDiv = document.getElementById('maps');
  var map = new google.maps.Map(mapDiv, {
    center: {lat: 40.0000, lng: -89.0000},
    zoom: 8
  });
  directionsRenderer.setMap(map);

  var pickupInput = document.getElementById("ploc");
  var dropInput = document.getElementById("daddress");
  var pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
  var dropAutocomplete = new google.maps.places.Autocomplete(dropInput);

  var pickupMarker = new google.maps.Marker({ map: map });
  var dropMarker = new google.maps.Marker({ map: map });

  pickupAutocomplete.addListener("place_changed", function () {
    var place = pickupAutocomplete.getPlace();
    if (!place.geometry) {
      window.alert("No details available for input: '" + place.name + "'");
      return;
    }

    pickupMarker.setPosition(place.geometry.location);
    calculateAndDisplayRoute(directionsService, directionsRenderer);
  });

  dropAutocomplete.addListener("place_changed", function () {
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
        travelMode: google.maps.TravelMode.DRIVING,
      },
      function (response, status) {
        if (status === "OK") {
          directionsRenderer.setDirections(response);
          console.log(response);
          let milesDistance = convertMetersToMiles(
            response.routes[0].legs[0].distance.value
          );
          console.log(milesDistance);
          document.getElementById('totalkms').value = milesDistance;
          console.log(milesDistance);
        } else {
          window.alert("Directions request failed due to " + status);
        }
      }
    );
  }
}

function convertMetersToMiles(meters) {
  const miles = meters / 1609.344;
  return miles.toFixed(2);
}
