const apiUrl = "http://localhost/ligth-weight-limo-api/public/api/";
// const apiUrl = 'https://api.limewaterlimo.com/public/api';

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

var bookingDetailsId = 0;


function submitBookingDetails() {
  var data = {
    pickup_date: $("#pick").val(),
    pickup_time: $("#time").val(),
    pickup_location: $("#ploc").val(),
    drop_location: $("#daddress").val(),
    travellers: $("#travellerNumber").val(),
    kids: $("#kidsNumber").val(),
    bags: $("#bagsNumber").val(),
    total_km: 32,
  };

  $.ajax({
    url: apiUrl + "booking/details/create",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();
      bookingDetailsId = result.booking_details.id;
      setSummaryView(result.booking_details);
      console.log(bookingDetailsId);
    },
    error: function (error) {
      console.log("Error: " + error);
    },
  });
}

function setSummaryView(bookingDetails) {
  document.getElementById('pickup-date-summary').innerHTML = new Date(bookingDetails.pickup_date).toLocaleDateString();
  document.getElementById('time-summary').innerHTML = bookingDetails.pickup_time;
  document.getElementById('pickup-location-summary').innerHTML = bookingDetails.pickup_location;
  document.getElementById('drop-location-summary').innerHTML = bookingDetails.drop_location;
  document.getElementById('passenger-number-summary').innerHTML = bookingDetails.travellers;
  document.getElementById('children-number-summary').innerHTML = bookingDetails.kids;
  document.getElementById('bags-number-summary').innerHTML = bookingDetails.bags;
  document.getElementById('total-charges').innerHTML = bookingDetails.total == undefined ? 0 : bookingDetails.total;
}
