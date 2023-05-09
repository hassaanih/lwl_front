const apiUrl = "http://localhost/ligth-weight-limo-api/public/api/";
// const apiUrl = 'https://api.limewaterlimo.com/public/api/';

var bookingDetailsId = 0;

/* 

      Step 1 Api's and function

*/

function submitBookingDetails() {
  let data = {
    pickup_date: $("#pick").val(),
    pickup_time: $("#time").val(),
    pickup_location: $("#ploc").val(),
    drop_location: $("#daddress").val(),
    travellers: $("#travellerNumber").val(),
    kids: $("#kidsNumber").val(),
    bags: $("#bagsNumber").val(),
    baby_chair: $("#kidsNumber").val(),
    total_km: $("#totalkms").val(),
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
  document.getElementById('total-charges').innerHTML = bookingDetails.total_charges == undefined ? 0 : bookingDetails.total_charges;
}

/* 

      Step 2 Api's and function

*/
function selectVehicleType(vehicleType){
  let nextButton = document.getElementById('next-step-checkout').disabled;
  nextButton = true;
  let data = {
    id: bookingDetailsId,
    vehicle_type_id: vehicleType
  };
  
  $.ajax({
    url: apiUrl + "booking/vehicle/select",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      bookingDetailsId = result.booking_details.id;
      nextButton = false;
      // setSummaryView(result.booking_details);
      document.getElementById('car-selected-summary').innerHTML = result.booking_details.vehicle_type_id != 3 ? result.booking_details.vehicle_type.name : result.booking_details.vehicle.name;
      setSummaryView(result.booking_details);
      console.log(bookingDetailsId);
    },
    error: function (error) {
      console.log("Error: " + error);
    },
  });
}

/* 

      Step 3 Api's and function

*/
function proceedToCheckout() {
  let data = {
    first_name: $('#pfname').val(),
    last_name: $('#plname').val(),
    contact_name: $('#cname').val(),
    contact_phone: $('#ctel').val(),
    mobile_number: $('#ptel').val(),
    email: $('#pemail').val(),
    tip_for_driver: $('#tip').val(),
    booking_detail_id: bookingDetailsId
  };

  $.ajax({
    url: apiUrl + "booking/create",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();
      
      console.log(bookingDetailsId);
    },
    error: function (error) {
      console.log("Error: " + error);
    },
  });
}
