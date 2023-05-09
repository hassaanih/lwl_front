function initMaps() {
  var geocoder = new google.maps.Geocoder();

  // Set the geocoding options to restrict to Illinois
  var geocodeOptions = {
    componentRestrictions: {
      country: "US",
      administrativeArea: "IL",
    },
  };

  const illinoisBounds = {
    north: 42.5083,
    south: 36.9861,
    west: -91.5131,
    east: -87.0199,
  };
  var directionsService = new google.maps.DirectionsService();
  var directionsRenderer = new google.maps.DirectionsRenderer();
  var map = new google.maps.Map(document.getElementById("maps"), {
    zoom: 10,
    center: { lat: 40.0, lng: -89.0 },
    restriction: {
      latLngBounds: illinoisBounds,
      strictBounds: false,
    },
  });
  directionsRenderer.setMap(map);

  var pickupInput = document.getElementById("ploc");
  var dropInput = document.getElementById("daddress");
  var pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput, {
    // types: ["address"],
    // componentRestrictions: { country: "US", administrativeArea: "IL" },
  });
  var dropAutocomplete = new google.maps.places.Autocomplete(dropInput, {
    // types: ["address"],
    // componentRestrictions: { country: "US", administrativeArea: "IL" },
  });

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
          document.getElementById('#totalkms').value = milesDistance;
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
