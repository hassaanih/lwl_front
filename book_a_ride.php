<!doctype html>
<html lang="en">

<head>
	<title>Home Page</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNCYnCArZoOrroMJTcZZQddwSqiAvtWm4&libraries=places" async></script>
	<script src="env.js"></script>


	<?php
	$srcurl = "includes/";
	$basesurl = "assets/";
	?>




	<?php
	$style = $_SERVER['HTTP_HOST'];
	$style = $srcurl . "style.php";
	include($style);

	$urhere = "homepage";
	?>



</head>

<body class="hompg" onload="initMaps()">
	<!--  <?php
			$header = $_SERVER['HTTP_HOST'];
			$header = $srcurl . "header.php";
			include($header);
			?> -->




	<section class="step1">
		<div class="container">
			<div class="row mai">
				<div class="col-md-12">
					<div class="stp1_wrp">


						<form id="msform" action="thankyou_for_booking.php">
							<!-- progressbar -->
							<ul id="progressbar">
								<li class="active" id="account"><strong>WHERE & WHEN</strong></li>
								<li id="personal"><strong>SELECT VEHICLE</strong></li>
								<li id="confirm"><strong>PAYMENT & CONFIRM</strong></li>
							</ul>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div> <br>
							<!-- fieldsets -->
							<fieldset>

								<div class="row form-card frm1">
									<div class="col-md-7">
										<div class="row in">
											<div class="col-7">
												<h2 class="fs-title">WHERE & WHEN</h2>
											</div>
											<div class="col-5 my-auto">
												<h2 class="steps">Step 1 - 3</h2>
											</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="step-1-button active-option pointer" onclick="selectTransferOption()" id="transferButton"> Transfer</div>
											<div class="step-1-button pointer" onclick="myFunction()" id="airportButton"> Airport</div>
											<div class="step-1-button pointer" onclick="selectHourlyOption()" id="hourlyButton"> Hourly</div>

										</div>
										<div class="row" id="hourlyEnable" style="display: none;">
											<div class="col-md-6">
												<input type="number" id="hour" placeholder="Hours" min="0" max="24">
											</div>
											<div class="col-md-6">
												<input type="number" id="minutes" placeholder="Minutes" min="0" max="24">
											</div>
										</div>
										<div class="row in1">
											<div class="col-md-6">
												<label for="pickupdate">* Pick Up Date:</label><input type="date" id="pick" name="pick" placeholder="Pick Up Date">
											</div>
											<div class="col-md-6">
												<label for="appt">* Pickup time:</label><br>
												<input type="time" id="time" name="time">
											</div>
										</div>
										<div class="row in2">
											<div class="col-md-12">
												<div class="for">
													<label for="exampleInputEmail1">Pickup Location</label>
													<input type="text" class="form-control" id="ploc" pattern="/^(?=.*\b(Illinois|IL)\b).+$/i">
													<div class="row">
														<div class="col-md-12">
															<p id="text" style="display:none"><input type="text" class="form-control" id="flghno" placeholder="Flight No*">
																<label for="appt">* Flight time:</label><br><input type="time" id="flghtm" name="time">
																<select class="form-control" id="airlineName">
																	<option value="Choose Your Airline">Choose Your Airline</option>
																	<option value="Aer Lingus">Aer Lingus</option>
																	<option value="AeroMexico">AeroMexico</option>
																	<option value="Air Canada">Air Canada</option>
																	<option value="Air France">Air France</option>
																	<option value="Air India">Air India</option>
																	<option value="Alaska Airlines">Alaska Airlines</option>
																	<option value="All Nippon">All Nippon</option>
																	<option value="American Airlines">American Airlines</option>
																	<option value="Austrian Airlines">Austrian Airlines</option>
																	<option value="British Airways">British Airways</option>
																	<option value="Cape Air">Cape Air</option>
																	<option value="Cathay Pacific Airways">Cathay Pacific Airways</option>
																	<option value="Copa Airlines">Copa Airlines</option>
																	<option value="Delta and Delta Shuttle">Delta and Delta Shuttle</option>
																	<option value="Denver Air Connection (Key Lime Air)">Denver Air Connection (Key Lime Air)</option>
																	<option value="EVA Air">EVA Air</option>
																	<option value="Emirates">Emirates</option>
																	<option value="Ethiopian Airlines">Ethiopian Airlines</option>
																	<option value="Etihad Airways">Etihad Airways</option>
																	<option value="Finnair">Finnair</option>
																	<option value="Frontier Airlines">Frontier Airlines</option>
																	<option value="Iberia Airlines">Iberia Airlines</option>
																	<option value="Icelandair">Icelandair</option>
																	<option value="Japan Airlines (JAL)">Japan Airlines (JAL)</option>
																	<option value="JetBlue">JetBlue</option>
																	<option value="KLM Royal Dutch">KLM Royal Dutch</option>
																	<option value="Korean Air">Korean Air</option>
																	<option value="LOT Polish Airlines">LOT Polish Airlines</option>
																	<option value="Lufthansa">Lufthansa</option>
																	<option value="Qatar Airways">Qatar Airways</option>
																	<option value="Royal Jordanian">Royal Jordanian</option>
																	<option value="SWISS">SWISS</option>
																	<option value="Scandinavian Airlines (SAS)">Scandinavian Airlines (SAS)</option>
																	<option value="Southwest Airlines">Southwest Airlines</option>
																	<option value="Spirit Airlines">Spirit Airlines</option>
																	<option value="Sun Country">Sun Country</option>
																	<option value="TAP Air Portugal">TAP Air Portugal</option>
																	<option value="Turkish Airlines">Turkish Airlines</option>
																	<option value="United Airlines">United Airlines</option>
																	<option value="VivaAerobus">VivaAerobus</option>
																	<option value="Volaris Airlines">Volaris Airlines</option>
																	<option value="WestJet">WestJet</option>
																</select>



																<body>
																	<label for="checkbox">Inside Meetup:<span style="color: red; font-size: 14px;"> &nbsp; (If you want us to welcome you inside the airport with a Card.)</span></label> <br>
																	<input type="checkbox" id="checkbox" name="options" value="yes" onclick="toggleTextField(this)"><label for="vehicle1" class="in_yesno"> Yes</label>
																	<input type="checkbox" id="checkbox" name="options" value="no" onclick="toggleTextField(this)"><label for="vehicle1" class="in_yesno"> No</label>

																	<div class="text-field" id="text-field">
																		<label for="text-input">Additional Message:</label>
																		<textarea placeholder="" id="card"></textarea>
																	</div>

																	<!-- <script>
																		// Set the default value to "No"
																		var checkbox = document.getElementById("checkbox");
																		checkbox.checked = false;
																		toggleTextField();
																	</script> -->
																	<style>
																		#msform label.in_yesno {
																			padding: 0 10px 0 10px;
																			font-family: 'Poppins';
																			font-size: 18px;
																			font-weight: 600;
																		}

																		#msform .text-field {
																			display: none;
																		}

																		#msform input#checkbox {
																			padding: 0 0px 0 0px !IMPORTANT;
																			margin: unset !important;
																			box-shadow: unset;
																			width: auto;
																		}
																	</style>


															</p>
														</div>

													</div>

													<input type="hidden" id="totalkms">
													<input type="hidden" id="bookingDetailsId">
												</div>
												<div class="for">
													<label id="addEmail" class="link" onclick="addStop()">Add Additional Pickup Location</label>
													<label id="removeEmail" class="link" onclick="removeStop()">Remove Additional Pickup Location</label>

												</div>

											</div>
										</div>

										<div class="row in3">
											<div class="col-md-12">
												<label for="address">* Dropoff Location:</label>
												<br><input type="text" id="daddress" name="daddress">
											</div>
										</div>
										<div id="more-email"></div>
										<div class="row in4">
											<div class="col-md-3">
												<label for="address">*Travellers:</label>
												<div class="quantity buttons_added">
													<input type="button" value="-" class="minus"><input id="travellerNumber" type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
												</div>
											</div>

											<div class="col-md-3">
												<label for="address">*Bags:</label>
												<div class="quantity buttons_added">
													<input type="button" value="-" class="minus"><input id="bagsNumber" type="number" step="1" min="0" max="" name="quantity" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
												</div>
											</div>
											<div class="col-md-3">
												<label for="address">Child Seat:</label>
												<div class="quantity buttons_added">
													<input type="button" value="-" class="minus"><input id="kidsNumber" type="number" step="1" min="0" max="" name="quantity" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
												</div>
											</div>
											<div class="col-md-12 ds">
												<h3 class="mb-2">Disclaimer:</h3>
												<p>The Child Passenger Protection Act requires that all children under age 8 be properly secured in an appropriate child safety restraint system. This includes the use of booster seats, which must only be used with a lap/shoulder safety belt. </p>
											</div>
										</div>





									</div>
									<div class="col-md-5">
										<div class="maph">
											<h4>Check Your Distance Here</h4>
											<div id="maps"></div>
										</div>
									</div>
								</div>

								<input type="button" name="next" class="next action-button" value="Next" onclick="submitBookingDetails()" />
							</fieldset>










							<fieldset>

								<!-- POPUP MODAL FOR SEDAN -->
								<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">SEDAN</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-md-12">
														<div class="img_pop">
															<img src="assets/images/sedan1.jpg">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="info_pop">
															<span class="icon"><i class="fa fa-users" aria-hidden="true"></i>4</span>
															<span class="icon"><i class="fa fa-suitcase" aria-hidden="true"></i>2</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="info2_pop">
															<h4>$95</h4>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<p> <strong> Disclaimer: </strong> Your Credit card will be charged at time of booking. This is an esitmation of cost and prices may differ at time of completion of trip. Thank you!</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- POP MODAL END -->
								<!-- POPUP MODAL FOR SUV -->
								<div class="modal fade" id="exampleModalCenterSuv" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">SUV</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-md-12">
														<div class="img_pop">
															<img src="assets/images/suv1.jpg">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="info_pop">
															<span class="icon"><i class="fa fa-users" aria-hidden="true"></i>5</span>
															<span class="icon"><i class="fa fa-suitcase" aria-hidden="true"></i>3</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="info2_pop">
															<h4>$115</h4>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<p> <strong> Disclaimer: </strong> Your Credit card will be charged at time of booking. This is an esitmation of cost and prices may differ at time of completion of trip. Thank you!</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- POP MODAL END -->
								<!-- POPUP MODAL FOR OTHER -->
								<div class="modal fade" id="exampleModalCenterOther" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">CARS WE HAVE</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-md-12">
														<div class="img_pop">
															<div class="cs-slider">
																<div><img src="assets/images/sedan1.jpg">

																</div>
																<div><img src="assets/images/audi.png"></div>
																<div><img src="assets/images/bmw.png"></div>
																<div><img src="assets/images/cad.png"></div>
																<div><img src="assets/images/chev.jpg"></div>
															</div>
															<script>
																$(".cs-slider").slick({
																	dots: true,
																	arrows: false,
																	infinite: true,
																	speed: 1000,
																	slidesToShow: 1,
																	autoplay: true,
																	autoplaySpeed: 300,
																	adaptiveHeight: true,
																	lazyLoad: 'ondemand',
																	slidesToScroll: 1

																});
															</script>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<p> <strong> Disclaimer: </strong> Your Credit card will be charged at time of booking. This is an esitmation of cost and prices may differ at time of completion of trip. Thank you!</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- POP MODAL END -->
								<div class="form-card frm2">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">SELECT VEHICLE</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 2 - 3</h2>
										</div>
									</div>


									<div class="row fi1">
										<div class="col-md-7">
											<div class="col-md-12">
												<h3 data-toggle="modal" data-target="#kkkkkkkk">Select vehicle type by clicking on vehicle image</h3>
											</div>
											<div class="car_sel">

												<div class="col-md-12">
													<input type="hidden" value="1" class="_vehicleTypeId notranslate" id="_vehicle_1">
													<input type="hidden" value="Sedan" class="_vehicleSummary notranslate">
													<input type="hidden" value="false" class="_vehicleZeroRateDisableBooking notranslate">
													<button type="button" class="car picked" onclick="selectVehicleType(1, 0)">

														<!-- <div class="pop">
															<a type="popu" class="popp" data-toggle="modal" data-target="#exampleModalCenter"><span class="icon info" title="More Info"><i class="fa fa-info"></i></span></a>

														</div> -->

														<div class="car_img">
															<img src="assets/images/sedan.png">
														</div>
														<div class="car-info">
															<p>Sedan</p>
														</div>
														<div class="car-volume">
															<span class="icon"><i class="fa fa-users" aria-hidden="true"></i>4</span>
															<span class="icon"><i class="fa fa-suitcase" aria-hidden="true"></i>2</span>
														</div>
														<div class="car-price _vehiclePrice"><ins>USD</ins>$95</div>
													</button>
												</div>
												<div class="col-md-12">
													<input type="hidden" value="1" class="_vehicleTypeId notranslate" id="_vehicle_1">
													<input type="hidden" value="Sedan" class="_vehicleSummary notranslate">
													<input type="hidden" value="false" class="_vehicleZeroRateDisableBooking notranslate">
													<button type="button" class="car picked" onclick="selectVehicleType(2, 0)">
														<!-- <div class="pop">
															<a type="popu" class="popp" data-toggle="modal" data-target="#exampleModalCenterSuv"><span class="icon info" title="More Info"><i class="fa fa-info"></i></span></a>

														</div> -->

														<div class="car_img suvv">
															<img src="assets/images/suv1.jpg">
														</div>
														<div class="car-info">
															<p>SUV</p>
														</div>
														<div class="car-volume">
															<span class="icon"><i class="fa fa-users" aria-hidden="true"></i>5</span>
															<span class="icon"><i class="fa fa-suitcase" aria-hidden="true"></i>3</span>
														</div>
														<div class="car-price _vehiclePrice"><ins>USD</ins>$115</div>
													</button>
												</div>
												<div class="col-md-12">
													<div class="select-dropdown">
														<select id="vehicles" onchange="handleOnchange(this)">
															<option value="" class="op1">Choose Your Own Car</option>

														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-5" id="bookingSummaryPg2">
											<h3>BOOKING SUMMARY</h3>
											<div class="book">
												<div class="pdate">
													<div class="row">
														<div class="col-md-6">
															<h4>Pickup Date</h4>
														</div>
														<div class="col-md-6">
															<p id="pickup-date-summary">N/A</p>
														</div>
													</div>
												</div>

												<div class="ptime">
													<div class="row">
														<div class="col-md-6">
															<h4>Pickup time</h4>
														</div>
														<div class="col-md-6">
															<p id="time-summary">N/A</p>
														</div>
													</div>
												</div>

												<div class="ploc">
													<div class="row">
														<div class="col-md-6">
															<h4>Pickup Location</h4>
														</div>
														<div class="col-md-6">
															<p id="pickup-location-summary">N/A</p>
														</div>
													</div>
												</div>

												<div class="dloc">
													<div class="row">
														<div class="col-md-6">
															<h4>Dropoff Location</h4>
														</div>
														<div class="col-md-6">
															<p id="drop-location-summary">N/A</p>
														</div>
													</div>
												</div>

												<div class="pass">
													<div class="row">
														<div class="col-md-6">
															<h4>No. Of Passenger</h4>
														</div>
														<div class="col-md-6">
															<p id="passenger-number-summary">N/A</p>
														</div>
													</div>
												</div>

												<div class="kid">
													<div class="row">
														<div class="col-md-6">
															<h4>No. Of Child Seat</h4>
														</div>
														<div class="col-md-6">
															<p id="children-number-summary">N/A</p>
														</div>
													</div>
												</div>

												<div class="bag">
													<div class="row">
														<div class="col-md-6">
															<h4>No. Of Bags</h4>
														</div>
														<div class="col-md-6">
															<p id="bags-number-summary">N/A</p>
														</div>
													</div>
												</div>

												<div class="bag">
													<div class="row">
														<div class="col-md-6">
															<h4>Total Miles</h4>
														</div>
														<div class="col-md-6">
															<p id="total_miles_summary">N/A</p>
														</div>
													</div>
												</div>

												<div class="lne"></div>
												<div class="amount">
													<div class="row">
														<div class="col-md-6">
															<h4>Total</h4>
														</div>
														<div class="col-md-6">
															<h4 id="total-charges">N/A</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
								<!-- <input type="button" name="next" id="next-step-checkout" class="next action-button" value="Next"/> -->
							</fieldset>

							<fieldset>
								<div class="form-card frm3">

									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">PAYMENT & CONFIRM:</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 3 - 3</h2>
										</div>
									</div>
									<div class="row">
										<div class="col-md-7">
											<div class="pinfo">
												<h4>Passenger Info</h4>
												<div class="row">
													<div class="col-md-6">
														<input type="text" name="pfname" id="pfname" placeholder="*First Name">
													</div>
													<div class="col-md-6">
														<input type="text" name="plname" id="plname" placeholder="*Last Name">
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<input type="tel" name="ptel" id="ptel" placeholder="*Mobile Phone">
													</div>
													<div class="col-md-6">
														<input type="email" name="pemail" id="pemail" placeholder="*Email Address">
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<input type="text" name="cname" id="cname" placeholder="*Contact Name">
													</div>
													<div class="col-md-6">
														<input type="tel" name="ctel" id="ctel" placeholder="*Contact Phone">
													</div>
												</div>
												<div class="row">
													<!-- <div class="col-md-6">
														<input type="email" name="cemail" id="cemail" placeholder="*Contact Email">
													</div> -->
													<div class="col-md-6">
														<input type="text" name="tip" id="tip" placeholder="*Enter Tip" onchange="addTipForDriver(event)">
													</div>

													<div class="col-md-6 d-flex">
														<input type="text" id="coupon-code" placeholder="Coupon Code" width="100%">
														<button type="button" id="ccode" onclick="applyCoupon()">Apply</button>
													</div>
												</div>
											</div>


											<div class="payop">
												<h4>Payment Info</h4>

												<!-- STRIPE UI WILL COME HERE -->
												<div class="row">
													<div class="col-md-6">


														<input type="text" id="owner" placeholder="Card Holder Name">

													</div>
													<div class="col-md-6">


														<input type="text" id="cvv" placeholder="CVV">

													</div>
												</div>


												<input type="text" id="cardNumber" placeholder="Credit Card Number">

												<div class="form-group" id="expiration-date">
													<label class="ex">Select Expiry Date</label> <br>
													<select class="mnth" id="month">
														<option value="01">January</option>
														<option value="02">February </option>
														<option value="03">March</option>
														<option value="04">April</option>
														<option value="05">May</option>
														<option value="06">June</option>
														<option value="07">July</option>
														<option value="08">August</option>
														<option value="09">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
													<select class="yrs" id="year">

														<?php
														$currentYear = date("Y");
														for ($i = $currentYear; $i <= $currentYear + 10; $i++) {
															echo "<option value=\"$i\">$i</option>";
														}
														?>
													</select>
												</div>
											</div>

											<div class="xtra">
												<h4>Special Instructions</h4>
												<textarea id="instr" name="instr" placeholder="Instructions"></textarea>
											</div>

										</div>
										<div class="col-md-5">
											<h3>BOOKING SUMMARY</h3>
											<div class="book">
												<div class="pdate">
													<div class="row">
														<div class="col-md-6">
															<h4>Pickup Date</h4>
														</div>
														<div class="col-md-6">
															<p id="pickup-date-summary-checkout">N/A</p>
														</div>
													</div>
												</div>

												<div class="ptime">
													<div class="row">
														<div class="col-md-6">
															<h4>Pickup time</h4>
														</div>
														<div class="col-md-6">
															<p id="time-summary-checkout">N/A</p>
														</div>
													</div>
												</div>

												<div class="ploc">
													<div class="row">
														<div class="col-md-6">
															<h4>Pickup Location</h4>
														</div>
														<div class="col-md-6">
															<p id="pickup-location-summary-checkout">N/A</p>
														</div>
													</div>
												</div>

												<div class="dloc">
													<div class="row">
														<div class="col-md-6">
															<h4>Dropoff Location</h4>
														</div>
														<div class="col-md-6">
															<p id="drop-location-summary-checkout">N/A</p>
														</div>
													</div>
												</div>

												<div class="pass">
													<div class="row">
														<div class="col-md-6">
															<h4>No. Of Passenger</h4>
														</div>
														<div class="col-md-6">
															<p id="passenger-number-summary-checkout">N/A</p>
														</div>
													</div>
												</div>

												<div class="kid">
													<div class="row">
														<div class="col-md-6">
															<h4>No. Of Child Seat</h4>
														</div>
														<div class="col-md-6">
															<p id="children-number-summary-checkout">N/A</p>
														</div>
													</div>
												</div>

												<div class="bag">
													<div class="row">
														<div class="col-md-6">
															<h4>No. Of Bags</h4>
														</div>
														<div class="col-md-6">
															<p id="bags-number-summary-checkout">N/A</p>
														</div>
													</div>
												</div>
												<div class="car_selec">
													<div class="row">
														<div class="col-md-6">
															<h4>Car Selected</h4>
														</div>
														<div class="col-md-6">
															<p id="car-selected-summary-checkout">N/A</p>
														</div>
													</div>
												</div>
												<div class="bag">
													<div class="row">
														<div class="col-md-6">
															<h4>Total Miles</h4>
														</div>
														<div class="col-md-6">
															<p id="total_miles_summary_checkout">N/A</p>
														</div>
													</div>
												</div>
												<!-- <div class="pname">
													<div class="row">
														<div class="col-md-6">
															<h4>Name</h4>
														</div>
														<div class="col-md-6">
															<p>Lorem</p>
														</div>
													</div>
												</div>
												<div class="pemail">
													<div class="row">
														<div class="col-md-6">
															<h4>Email Address</h4>
														</div>
														<div class="col-md-6">
															<p>Lorem@ipsum.com</p>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="row">
														<div class="col-md-6">
															<h4>Card Number</h4>
														</div>
														<div class="col-md-6">
															<p>xxxxxxxxxxx</p>
														</div>
													</div>
												</div>
												<div class="cvv">
													<div class="row">
														<div class="col-md-6">
															<h4>CVV</h4>
														</div>
														<div class="col-md-6">
															<p>xxx</p>
														</div>
													</div>
												</div> -->

												<div class="lne"></div>
												<div class="amount">
													<div class="row">
														<div class="col-md-6">
															<h4>Total</h4>
														</div>
														<div class="col-md-6">
															<h4 id="total-charges-checkout">N/A</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
								<input type="button" name="sub" class="action-button submit_btn" value="Confirm" onclick="proceedToCheckout()" />
							</fieldset>

						</form>

					</div>
				</div>
				<section class="footer">
					<p style="font-weight: 400; text-align: center; font-size: 15px; margin-top: 40px"><a style="color:#000; font-weight:600;" href="https://lightwaterlimo.com/">All Rights Reserved 2023 By Light Water Limo </a><br><a style="color:#000; font-weight:600;" href="https://1solpk.com/">Developed By 1 Sol Digital Services (SMC-Private) Ltd.</a> </p>
				</section>

			</div>
		</div>
	</section>



	<!-- <?php
			$footer = $_SERVER['HTTP_HOST'];
			$footer = $srcurl . "footer.php";
			include($footer);
			?> -->

	<script type="text/javascript">
		// PLUS MINUS BUTTON

		function wcqib_refresh_quantity_increments() {
			jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
				var c = jQuery(b);
				c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
			})
		}
		String.prototype.getDecimals || (String.prototype.getDecimals = function() {
			var a = this,
				b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
			return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
		}), jQuery(document).ready(function() {
			wcqib_refresh_quantity_increments()
		}), jQuery(document).on("updated_wc_div", function() {
			wcqib_refresh_quantity_increments()
		}), jQuery(document).on("click", ".plus, .minus", function() {
			var a = jQuery(this).closest(".quantity").find(".qty"),
				b = parseFloat(a.val()),
				c = parseFloat(a.attr("max")),
				d = parseFloat(a.attr("min")),
				e = a.attr("step");
			b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
		});








		// STEP FORM 
		$(document).ready(function() {

			var current_fs, next_fs, previous_fs; //fieldsets
			var opacity;
			var current = 1;
			var steps = $("fieldset").length;

			setProgressBar(current);



			$(".previous").click(function() {

				current_fs = $(this).parent();
				previous_fs = $(this).parent().prev();

				//Remove class active
				$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
					// bookings/previous
					$.ajax({
						url: apiUrl + "bookings/previous",
						type: "POST",
						data: {id: $('#bookingDetailsId').val()},
						dataType: "json",
						success: function(result) {
							// result contains the response from the server-side PHP script
							// you can use this result to update the UI or perform other operations
							// sendToNextView();
							$("#vehicles").val("");
						},
						error: function(xhr, status, error) {
							
							console.log(error);
						},
					});
				//show the previous fieldset
				previous_fs.show();

				//hide the current fieldset with style
				current_fs.animate({
					opacity: 0
				}, {
					step: function(now) {
						// for making fielset appear animation
						opacity = 1 - now;

						current_fs.css({
							'display': 'none',
							'position': 'relative'
						});
						previous_fs.css({
							'opacity': opacity
						});
					},
					duration: 500
				});
				setProgressBar(--current);
			});



			$(".submit").click(function() {
				return false;
			})

		});
	</script>
	<script src="assets/js/googlemap.js?v=1.1.1"></script>
	<script src="assets/js/apilinking.js?v=1.2.0"></script>
</body>