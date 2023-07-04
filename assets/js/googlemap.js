var map;
var directionsService;
var directionsRenderer;
var mapDiv;

function initMaps() {
  directionsService = new google.maps.DirectionsService();
  directionsRenderer = new google.maps.DirectionsRenderer();
  mapDiv = document.getElementById("maps");
  map = new google.maps.Map(mapDiv, {
    center: { lat: 40.0, lng: -89.0 },
    zoom: 8,
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
    window.calculateAndDisplayRoute(directionsService, directionsRenderer, []);
  });

  dropAutocomplete.addListener("place_changed", function () {
    var place = dropAutocomplete.getPlace();
    if (!place.geometry) {
      window.alert("No details available for input: '" + place.name + "'");
      return;
    }

    dropMarker.setPosition(place.geometry.location);
    window.calculateAndDisplayRoute(directionsService, directionsRenderer, []);
  });

  window.calculateAndDisplayRoute = function (
    directionsService,
    directionsRenderer,
    stopsGeometry
  ) {
    if (stopsGeometry.length != 0) {
      var waypoints = stopsGeometry.map((locations) => {
        return {
          location: locations,
          stopover: true,
        };
      });
    }

    directionsService.route(
      {
        origin: pickupMarker.getPosition(),
        destination: dropMarker.getPosition(),
        travelMode: google.maps.TravelMode.DRIVING,
        waypoints: waypoints,
      },
      function (response, status) {
        if (status === "OK") {
          directionsRenderer.setDirections(response);
          console.log(response);
          let milesDistance = convertMetersToMiles(
            response.routes[0].legs
          );
          console.log(milesDistance);
          document.getElementById("totalkms").value = milesDistance;
          console.log(milesDistance);
        } else {
          window.alert("Directions request failed due to " + status);
        }
      }
    );
  }
}

function convertMetersToMiles(meters) {
  let totalMeters = 0;
  meters.forEach(element => {
    totalMeters += element.distance.value;
  });
  let miles = totalMeters / 1609.344;
  return miles.toFixed(2);
}
