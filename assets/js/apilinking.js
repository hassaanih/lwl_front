var bookingDetailsId = 0;
var vehicleSelected;
var bookingDetailsRequestBody = {};
var bookingRequestBody = {};
bookingDetailsRequestBody.stops = [];
var bookingDetails = {};
var stopInputs = [];

var currentFs, nextFs, previousFs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;
var stopsGeometry = [];
var stopMarkers = [];

/* 

      Step 1 Api's and function

*/
function preSubmitValidation(pickupLocationValue, dropLocationValue, stopInputs){
  let regex = /^(?=.*\b(Illinois|IL)\b).+$/i;
  stopInputs.forEach(item=>{
    if(regex.test(item.value)){
      bookingDetailsRequestBody.stops.push({location: item.value});
      return true;
    }else{
      Swal.fire({
        title: 'Error',
        text: 'Cannot find the requested location.',
        icon: 'error',
      });
      return false;
    }
  })
  

  if(regex.test(dropLocationValue) && regex.test(pickupLocationValue)){
    
    return true;
  }else{
    console.log('Pickup Location value: '+ dropLocationValue)
    console.log('Drop Location value: '+ pickupLocationValue)
    console.log('Pickup Location validation: '+ regex.test(dropLocationValue))
    console.log('Drop Location validation: '+ regex.test(pickupLocationValue))
    Swal.fire({
      title: 'Error',
      text: 'Cannot find the requested location.',
      icon: 'error',
    });
    return false;
  }

}

function displayErrorMessages(errors) {
  const errorValues = Object.values(errors);
  let errorMessage = '<ul>';

  for (const fieldErrors of errorValues) {
    for (const error of fieldErrors) {
      errorMessage += `<li class="mb-2 text-danger"> &bull; ${error}</li>`;
    }
  }

  errorMessage += '</ul>';

  Swal.fire({
    title: 'Error',
    html: errorMessage,
    icon: 'error',
    customClass: {
      content: 'text-left', // Add custom CSS class for content alignment
    },
  });
}

function addStop() {
  let moreEmail = document.querySelector("#more-email");
  let div = document.createElement("div");
  div.className = "for";
  let input = document.createElement("input");
  input.type = "text";
  input.addEventListener('input', validateInput);
  input.className = "form-control stop";
  input.placeholder = "Add Additional Pickup Location";
  let stopsAutoComplete = new google.maps.places.Autocomplete(input);
  let stopMarker = new google.maps.Marker({ map: map });
  
  stopsAutoComplete.addListener('place_changed', function(){
    var place = stopsAutoComplete.getPlace();
    if (!place.geometry) {
      Swal.fire({
        title: 'Error',
        text: 'Cannot find the requested location.',
        icon: 'error',
      });
      return;
    }

    stopMarker.setPosition(place.geometry.location);
    stopsGeometry.push(place.geometry.location);
    stopMarkers.push(stopMarker);
    stopInputs.push(input);
    window.calculateAndDisplayRoute(directionsService, directionsRenderer, stopsGeometry);
  })

  div.appendChild(input);
  moreEmail.appendChild(div);
}

function validateInput(event) {
  let inputValue = event.target.value;
  let regex = /^(?=.*\b(Illinois|IL)\b).+$/i; // Example regex pattern: only alphabetic characters
  let isValid = regex.test(inputValue);

  if (isValid) {
    // Input is valid
    event.target.style.borderColor = "green";
  } else {
    // Input is invalid
    event.target.style.borderColor = "red";
  }
}

function removeStop() {
  const moreEmail = document.getElementById("more-email");
  const lastChild = moreEmail.lastElementChild;
  stopsGeometry.pop();
  let lastMarker = stopMarkers.pop();
  lastMarker.setMap(null);
  window.calculateAndDisplayRoute(directionsService, directionsRenderer, stopsGeometry);
  if (lastChild) {
    moreEmail.removeChild(lastChild);
  }
}

function handleClickNext() {
  // Get the current and next fieldset elements
  const currentFs = document.querySelector("fieldset:not([style*='none'])");
  console.log(currentFs);
  const nextFs = currentFs.nextElementSibling;
  console.log(nextFs);

  // Add the "active" class to the corresponding progress bar item
  const progressItems = document.querySelectorAll("#progressbar li");
  progressItems[
    Array.from(document.querySelectorAll("fieldset")).indexOf(nextFs)
  ].classList.add("active");

  // Show the next fieldset and hide the current fieldset
  let opacity = 1;
  const animateInterval = setInterval(function () {
    currentFs.style.opacity = opacity;
    nextFs.style.opacity = 1 - opacity;
    opacity -= 0.1;
    if (opacity < 0) {
      clearInterval(animateInterval);
      currentFs.style.display = "none";
      nextFs.style.position = "relative";
      nextFs.style.display = "block";
      setProgressBar(current + 1);
    }
  }, 50);
}

function setProgressBar(curStep) {
  var percent = parseFloat(100 / steps) * curStep;
  percent = percent.toFixed();
  $(".progress-bar").css("width", percent + "%");
}

function toggleTextField(checkboxVal) {
  var checkbox = document.getElementsByName("options");
  var textField = document.getElementById("text-field");
  
  if (checkboxVal.checked && checkboxVal.value == 'yes') {
    checkbox.forEach(element => {
      if(element !== checkboxVal){
        element.checked = false;
      }
    });
    textField.style.display = "block";
  } else {
    checkbox.forEach(element => {
      if(element !== checkboxVal){
        element.checked = false;
      }
    });
    textField.style.display = "none";
  }
}

function submitBookingDetails() {
  

  bookingDetailsRequestBody = {
    pickup_date: $("#pick").val(),
    pickup_time: $("#time").val(),
    pickup_location: $("#ploc").val(),
    drop_location: $("#daddress").val(),
    travellers: $("#travellerNumber").val(),
    kids: $("#kidsNumber").val(),
    bags: $("#bagsNumber").val(),
    baby_chair: $("#kidsNumber").val(),
    total_km: $("#totalkms").val(),
    flight_num: $("#flghno").val(),
    airline_name: $("#airlineName").val(),
    onsight_meetup: $("#card").val(),
    arrival_time: $("#flghtm").val(),
    total_duration_hours: $("#hour").val(),
    total_duration_minutes: $("#minutes").val(),
    stops: []
  };

  let preRequestLocationsValidator = preSubmitValidation(document.getElementById("ploc").value,document.getElementById("daddress").value,stopInputs);
  
  if(preRequestLocationsValidator == false){
    return;
  }

  $.ajax({
    url: apiUrl + "booking/details/create",
    type: "POST",
    data: bookingDetailsRequestBody,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();
      bookingDetailsId = result.booking_details.id;
      handleClickNext();
      setSummaryView(result.booking_details);
      getVehicles();
      console.log(bookingDetailsId);
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage);
    },
  });
}

function setSummaryView(bookingDetails) {
  document.getElementById("pickup-date-summary").innerHTML = new Date(
    bookingDetails.pickup_date
  ).toLocaleDateString();
  document.getElementById("time-summary").innerHTML =
    bookingDetails.pickup_time;
  document.getElementById("pickup-location-summary").innerHTML =
    bookingDetails.pickup_location;
  document.getElementById("drop-location-summary").innerHTML =
    bookingDetails.drop_location;
  document.getElementById("passenger-number-summary").innerHTML =
    bookingDetails.travellers;
  document.getElementById("children-number-summary").innerHTML =
    bookingDetails.kids;
  document.getElementById("bags-number-summary").innerHTML =
    bookingDetails.bags;
  document.getElementById("total-charges").innerHTML =
    bookingDetails.total_charges == undefined
      ? 0
      : "$ " + bookingDetails.total_charges;
  document.getElementById("total_miles_summary").innerHTML =
    bookingDetails.total_km + " mi";
}

function setCheckoutPageSummaryView(bookingDetails) {
  document.getElementById("pickup-date-summary-checkout").innerHTML = new Date(
    bookingDetails.pickup_date
  ).toLocaleDateString();
  document.getElementById("time-summary-checkout").innerHTML =
    bookingDetails.pickup_time;
  document.getElementById("pickup-location-summary-checkout").innerHTML =
    bookingDetails.pickup_location;
  document.getElementById("drop-location-summary-checkout").innerHTML =
    bookingDetails.drop_location;
  document.getElementById("passenger-number-summary-checkout").innerHTML =
    bookingDetails.travellers;
  document.getElementById("children-number-summary-checkout").innerHTML =
    bookingDetails.kids;
  document.getElementById("bags-number-summary-checkout").innerHTML =
    bookingDetails.bags;
  document.getElementById("total_miles_summary_checkout").innerHTML =
    bookingDetails.total_km + " mi";
  document.getElementById(
    "car-selected-summary-checkout"
  ).innerHTML = vehicleSelected;
  document.getElementById("total-charges-checkout").innerHTML =
    bookingDetails.total_charges == undefined
      ? 0
      : "$ " + bookingDetails.total_charges;
}

/* 

      Step 2 Api's and function

*/
function handleOnchange(select) {
  // Handle the change event
  var selectedValue = select.value;
  console.log("Selected value is: " + selectedValue);
  selectVehicleType(3, selectedValue);
}

function selectVehicleType(vehicleType, vehicleId) {
  nextButton = true;
  let data = {
    id: bookingDetailsId,
    vehicle_type_id: vehicleType,
    vehicle_id: vehicleId,
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
      console.log(result);
      handleClickNext();
      vehicleSelected =
        result.booking_details.vehicle_type_id != 3
          ? result.booking_details.vehicle_type.name
          : result.booking_details.vehicle.name;
      bookingDetails = result.booking_details;
      setCheckoutPageSummaryView(bookingDetails);
      console.log(bookingDetailsId);
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage)
    },
  });
}

// var selectVehicleDiv = document.getElementById();

function getVehicles() {
  $.ajax({
    url: apiUrl + "vehicles/find/all",
    type: "GET",
    // data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      console.log(result);
      setTimeout((item) => {
        for (let i = 0; i < result.vehicles.length; i++) {
          let opt = document.createElement("option");
          var chooseYourCarSelect = document.getElementById("vehicles");
          console.log(chooseYourCarSelect);
          opt.text =
            result.vehicles[i].company + " " + result.vehicles[i].model;
          opt.value = result.vehicles[i].id;
          chooseYourCarSelect.appendChild(opt);
        }
      }, 1000);
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
    },
  });
}

/* 

      Step 3 Api's and function

*/
function proceedToCheckout() {
  bookingRequestBody = {
    first_name: $("#pfname").val(),
    last_name: $("#plname").val(),
    contact_name: $("#cname").val(),
    contact_phone: $("#ctel").val(),
    mobile_number: $("#ptel").val(),
    email: $("#pemail").val(),
    tip_for_driver: $("#tip").val(),
    booking_detail_id: bookingDetailsId,
    card_details: {
      card_holder_name: $("#owner").val(),
      cvv: $("#cvv").val(),
      card_number: $("#cardNumber").val(),
      expiry_month: $("#month").val(),
      expiry_year: $("#year").val(),
    },
    specail_intruction: $("#instr").val(),
  };

  $.ajax({
    url: apiUrl + "booking/create",
    type: "POST",
    data: bookingRequestBody,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();

      console.log(bookingDetailsId);
      Swal.fire('Payment Successful');
      setTimeout(function(){
        window.location.href = appUrl + "thankyou_for_booking.php";
      },1500);
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage)
    },
  });
}

function myFunction() {
  var text = document.getElementById("text");
  var transferButton = document.getElementById("transferButton");
  transferButton.classList.remove("active-option");
  var button = document.getElementById("airportButton");
  var hourlyDiv = document.getElementById("hourlyEnable");
  var hourlyButton = document.getElementById("hourlyButton");
  text.style.display = "block";
  button.classList.add("active-option");
  hourlyButton.classList.remove("active-option");
  hourlyDiv.style.display = "none";
}

function selectHourlyOption() {
  var airportButton = document.getElementById("airportButton");
  var text = document.getElementById("text");
  var hourlyDiv = document.getElementById("hourlyEnable");
  var hourlyButton = document.getElementById("hourlyButton");
  var transferButton = document.getElementById("transferButton");
  transferButton.classList.remove("active-option");
  hourlyDiv.style.display = "flex";
  hourlyButton.classList.add("active-option");
  airportButton.classList.remove("active-option");
  text.style.display = "none";
}

function selectTransferOption() {
  var airportButton = document.getElementById("airportButton");
  var text = document.getElementById("text");
  var hourlyDiv = document.getElementById("hourlyEnable");
  var hourlyButton = document.getElementById("hourlyButton");
  var transferButton = document.getElementById("transferButton");
  transferButton.classList.add("active-option");
  hourlyDiv.style.display = "none";
  hourlyButton.classList.remove("active-option");
  airportButton.classList.remove("active-option");
  text.style.display = "none";
}

// Assign to driver.

function assignDriver() {
  let data = {
    id: $("#booking_id").val(),
    driver_name: $("#drv_name").val(),
    driver_payment: $("#drv_payment").val(),
  };

  $.ajax({
    url: apiUrl + "bookings/assign/driver",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();
      $("#drv_name").val("");
      $("#drv_payment").val("");
      $("#exampleModal").modal("hide");
      $(".page-datatable-ajax").DataTable().ajax.reload(null, false);
      console.log(result);
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage);
    },
  });
}

function cancelRide(id) {
  let data = {
    id: id,
  };

  $.ajax({
    url: apiUrl + "bookings/cancel",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();
      $(".user-datatable-ajax").DataTable().ajax.reload(null, false);
      console.log(result);
      Swal.fire('warning', 'Ride has been cancelled');
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage)
    },
  });
}

function assignSelf() {
  let data = {
    id: $("#booking_id").val(),
    driver_name: $("#drv_name_self").val(),
    driver_payment: $("#drv_payment_self").val(),
  };

  $.ajax({
    url: apiUrl + "bookings/assign/self",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();
      $("#drv_name_self").val("");
      $("#drv_payment_self").val("");
      $("#self-assign-modal").modal("hide");
      $(".page-datatable-ajax").DataTable().ajax.reload(null, false);
      console.log(result);
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage);
    },
  });
}

function showCurrentUserRides() {
  console.log("hello");
  $(".user-datatable-ajax").DataTable().ajax.reload();
}

function addTipForDriver(event) {
  let tip = event.target.value;
  console.log(tip);
}

function applyCoupon() {
  let data = {
    id: bookingDetailsId,
    code: $("#coupon-code").val(),
  };

  $.ajax({
    url: apiUrl + "coupon/apply",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();
      setCheckoutPageSummaryView(result.booking_details);
      console.log(bookingDetailsId);
      Swal.fire('warning', 'Coupon Applied');
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage)
    },
  });
}

function signin() {
  let data = {
    email: $("#signinEmail").val(),
    password: $("#signinPassword").val(),
  };

  $.ajax({
    url: apiUrl + "user/signin",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();
      localStorage.setItem("userEmail", result.user.email);
      window.location.href = appUrl + "dash_user.php";
      console.log(result);
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage)
    },
  });
}

function signup() {
  let data = {
    email: $("#signupEmail").val(),
    password: $("#signupPassword").val(),
    c_password: $("#signupConfirmPassword").val(),
    full_name: $("#signupName").val(),
  };

  $.ajax({
    url: apiUrl + "user/create",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      // result contains the response from the server-side PHP script
      // you can use this result to update the UI or perform other operations
      // sendToNextView();
      localStorage.setItem("userEmail", result.user.email);
      window.location.href = appUrl + "dash_user.php";
      console.log(result);
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage)
    },
  });
}

function openAddCouponModal() {
  $("#couponModal").modal("show");
}

function addCoupon() {
  let data = {
    code: $("#codeTxt").val(),
    total_discount: $("#discountTxt").val(),
    usage_count: $("#usageCountTxt").val(),
  };

  $.ajax({
    url: apiUrl + "coupons/add",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      $("#couponModal").modal("hide");
      $(".coupon-datatable-ajax").DataTable().ajax.reload();
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage)
    },
  });
}

function redirectToCoupon(){
  window.location.href = appUrl + 'coupon.php';
}

function showSendEmailModal(){
  console.log($('#sendEmailModal'));
  $('#sendEmailModal').modal("show");
}

function sendPasswordResetEmail(){
  let data = {
    email: $('#sendEmailForPasswordReset').val()
  }

  $.ajax({
    url: apiUrl + "user/resetpassword/send/email",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      document.getElementById('email-div').style.display = 'none';
      document.getElementById('message-div').style.display = 'block';
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage)
    },
  });
}

function resetPassword(){
  let data = {
    code: $('#resetcode').val(),
    password: $('#newPassword').val(),
    confirm_password: $('#confirmNewPassword').val()
  }

  $.ajax({
    url: apiUrl + "user/reset/password",
    type: "POST",
    data: data,
    dataType: "json",
    success: function (result) {
      document.getElementById('password-div').style.display = 'none';
      document.getElementById('password-message-div').style.display = 'block';
    },
    error: function (xhr, status, error) {
      var errorMessage = "An error occurred.";
      if (xhr.responseJSON && xhr.responseJSON.error) {
        // If the error response contains a specific error message
        errorMessage = xhr.responseJSON.error;
      } else if (xhr.responseText) {
        // If the error response is a string
        errorMessage = xhr.responseText;
      } else {
        // Fallback error message
        errorMessage = error;
      }
      console.log(errorMessage);
      displayErrorMessages(errorMessage)
    },
  });
}
