<!doctype html>
<html lang="en">

<head>
    <title>Lightwaterlimo | Admin Dashboard</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="env.js"></script>







    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link href="assets/css/m-style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/newcss.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <!--[if IE]>
  <script src="assets/js/html5.js"></script>
<![endif]-->

    <style type="text/css">
        section.foot {

            padding: 20px 0;
        }

        section.foot p {
            color: black;
            padding: 0;
            font-size: 15px;
            font-weight: 700;
            text-align: center;


        }

        .tb .container-fluid {
            display: block;
            align-items: center;
            justify-content: center;
            background-color: white;
            margin-top: 0;
            padding: 50px 20px !IMPORTANT;
            box-shadow: unset;
            margin: 0 0 0 -10px;
        }

        table#myTable {
            margin: 0 auto;
        }

        table#myTable thead {}

        table#myTable thead th {
            padding: 0 20px;
        }

        table#myTable tbody {}

        table#myTable tbody tr {
            padding: 0 0px;
        }

        table#myTable tbody tr td {
            padding: 10px 20px;
        }

        .odd .drv {
            border: unset;
            width: 100%;
            height: 31px;
            padding: 0;
        }

        button.self {
            padding: 0;
            background-color: #9a4d55;
            color: white;
            text-transform: uppercase;
            border: unset;
            font-size: 15px;
            width: 100%;
            height: 31px;
            margin-top: 3px;
        }

        .log_img img {
            width: 21%;
            filter: brightness(0) invert(1);
        }

        .logo {
            padding: 30px 0;
            background-color: #111c30;
        }

        .green-row {
            background-color: green !important;
            color: white !important;
            padding: 10px !important;

        }

        .red-row {
            background-color: red !important;
            color: white !important;
            padding: 10px !important;

        }

        .yellow-row {
            background-color: yellow !important;
            color: red !important;
            padding: 10px !important;
        }

        .blue-row {
            background-color: lightskyblue !important;
            color: red !important;
            padding: 10px !important;
        }




        /* @media (max-width: 1600px) {
    /* section.logo:before {
    content: '';
    background-color: #111c30;
    width: 126%;
    position: absolute;
    height: 137px;
    top: 0;
} 
}
@media (max-width: 1366px) {
     section.logo:before {
    content: '';
    background-color: #111c30;
    width: 150%;
    position: absolute;
    height: 137px;
    top: 0;
} 
}*/
        @media (max-width: 1280px) {
            section.logo:before {
                content: '';
                background-color: #111c30;
                width: 20px;
                position: absolute;
                height: 137px;
                top: 0;
                right: -10px;
            }
        }

        @media (max-width: 1024px) {
            section.logo:before {
                content: '';
                background-color: #111c30;
                width: 470px;
                position: absolute;
                height: 125px;
                top: 0;
                right: -270px;
            }

        }

        @media (max-width: 800px) {
            .log_img img {
                width: 28%;
                filter: brightness(0) invert(1);
            }

            section.logo:before {
                content: '';
                background-color: #111c30;
                width: 540px;
                position: absolute;
                height: 125px;
                top: 0;
                right: -510px;
            }

            .odd .drv {
                border: unset;
                width: 100%;
                height: 31px;
                padding: 0 10px;
            }
        }

        @media (max-width: 768px) {}

        @media (max-width: 480px) {
            .log_img img {
                width: 43%;
                filter: brightness(0) invert(1);
            }

            section.logo:before {
                content: '';
                background-color: #111c30;
                width: 940px;
                position: absolute;
                height: 125px;
                top: 0;
                right: -830px;
            }

        }

        @media (max-width: 430px) {
            .log_img img {
                width: 100%;
                filter: brightness(0) invert(1);
            }

            section.foot p {
                color: white;
                padding: 0;
                font-size: 14px;
                font-weight: 700;

            }

            section.logo:before {
                content: '';
                background-color: #111c30;
                width: 970px;
                position: absolute;
                height: 175px;
                top: 0;
                right: -950px;
            }
        }

        @media (max-width: 375px) {
            section.logo:before {
                content: '';
                background-color: #111c30;
                width: 970px;
                position: absolute;
                height: 175px;
                top: 0;
                right: -950px;
            }
        }

        @media (max-width: 360px) {
            section.logo:before {
                content: '';
                background-color: #111c30;
                width: 970px;
                position: absolute;
                height: 175px;
                top: 0;
                right: -950px;
            }
        }

        */
    </style>

</head>

<body class="hompg">
    <section class="logo">
        <div class="container">
            <div class="row">
                <div class="log_img">
                    <img src="assets/images/LIGHT-WATER-LOGO.png">
                </div>
            </div>
        </div>
    </section>
    <div class="tb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <button type="button" onclick="redirectToCoupon()">Generate Coupon</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="adminDashboard" class="row-border display page-datatable-ajax p-2">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Contact Number</th>
                                    <th>Driver Name</th>
                                    <th>Driver Price ($)</th>
                                    <th>Tip ($)</th>
                                    <th>Total Charges ($)</th>
                                    <th>Pickup Location</th>
                                    <th>Drop Location</th>
                                    <th>Pickup Date</th>
                                    <th>Pickup Time</th>
                                    <th>Traveller</th>
                                    <th>Child Seat</th>
                                    <th>Inside Meetup</th>
                                    <th>Additional Remarks</th>
                                    <th>Total Miles</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Driver</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="booking_id">
                    <div class="row">
                        <div class="col-3">
                            <label class="form-control">Driver's Name:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="drv_name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label class="form-control">Driver Payment</label>
                        </div>
                        <div class="col-9">
                            <input type="number" class="form-control" id="drv_payment" placeholder="$">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="assignDriver()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="self-assign-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Self</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="booking_id">
                    <div class="row">
                        <div class="col-3">
                            <label class="form-control">Self Name:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="drv_name_self" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label class="form-control">Self Payment</label>
                        </div>
                        <div class="col-9">
                            <input type="number" class="form-control" id="drv_payment_self" placeholder="$">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="assignSelf()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="booking_id">
                    <input type="hidden" id="booking_details_id">
                    <div class="row">
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">First Name:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="text" id="first-name-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Last Name:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="text" id="last-name-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Pickup Location:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="text" id="pickup-location-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Drop Location:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="text" id="drop-location-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Driver Tip:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="text" id="driver-tip-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Pickup Date:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="date" id="pickup-date-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Pickup Time:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="time" id="pickup-time-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Driver Name:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="text" id="driver-name-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Driver Payment:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="text" id="driver-payment-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Additional Remarks:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <input class="form-control" type="text" id="additional-remarks-details">
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Vehicle Type:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <label id="vehicle-type-detail"></label>
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Vehicle:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <label id="vehicle-detail"> Any </label>
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Stops:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <ol id="stopsList" style="list-style-type: square;">

                            </ol>
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Traveller:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <label id="traveller-detail"></label>
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Child Seat:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <label id="child-seat-detail"></label>
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Bags:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <label id="bags-detail"></label>
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Inside Meetup:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <label id="inside-meetup-detail"></label>
                        </div>
                        <div class="mb-5 col-3 d-flex align-items-center">
                            <label class="form-label font-weight-bold">Total Miles:</label>
                        </div>
                        <div class="mb-5 col-9">
                            <label id="total-miles-detail"></label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="updateButton" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    <section class="footer">
        <p style="font-weight: 400; text-align: center; font-size: 15px; margin-top: 40px"><a style="color:#000; font-weight:600;" href="https://lightwaterlimo.com/">All Rights Reserved 2023 By Light Water Limo </a><br><a style="color:#000; font-weight:600;" href="https://1solpk.com/">Developed By 1 Sol Digital Services (SMC-Private) Ltd.</a> </p>
    </section>


    <script type="text/javascript">
        $(function() {
            $('.page-datatable-ajax').dataTable({
                order: [0, "desc"],
                ajax: apiUrl + 'bookings/findAll',
                lengthMenu: [10, 25, 50, 100, 500],
                responsive: true,

                columns: [{
                        data: 'id',
                        name: 'id',
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'first_name',
                        name: 'first_name',
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'last_name',
                        name: 'last_name',
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'mobile_number',
                        name: 'mobile_number',
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'diver_name',
                        name: 'diver_name',
                        className: 'align-top',
                        render: function(data, type, row) {
                            // Modify the data for the first column
                            if (data == null) {
                                return 'Not Assigned';
                            } else {
                                return data;
                            }
                        },
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'driver_payment',
                        name: 'driver_payment',
                        className: 'align-top',
                        render: function(data, type, row) {
                            // Modify the data for the first column

                            if (data == null) {
                                return 'N/A';
                            } else {
                                return data;
                            }
                        },
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: 'tip_for_driver',
                        name: 'tip_for_driver',
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'total_charges',
                        name: 'total_charges',
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'details.pickup_location',
                        name: 'details.pickup_location',
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'details.drop_location',
                        name: 'details.drop_location',
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'details.pickup_date',
                        name: 'details.pickup_date',
                        render: function(data, type, row) {
                            // Modify the data for the first column
                            var date = new Date(data);
                            return date.toDateString();
                        },
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'details.pickup_time',
                        name: 'details.pickup_time',
                        className: 'align-top',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'details.travellers',
                        name: 'details.travellers',
                        className: 'align-top',
                        orderable: true,
                        searchable: true,
                        visible: false
                    },
                    {
                        data: 'details.kids',
                        name: 'details.kids',
                        className: 'align-top',
                        orderable: true,
                        searchable: true,
                        visible: false
                    },
                    {
                        data: 'details.onsight_meetup',
                        name: 'details.onsight_meetup',
                        className: 'align-top',
                        render: function(data, type, row) {
                            // Modify the data for the first column

                            if (data == null) {
                                return 'N/A';
                            } else {
                                return data;
                            }
                        },
                        orderable: true,
                        searchable: true,
                        visible: false
                    },
                    {
                        data: 'specail_intruction',
                        name: 'specail_intruction',
                        className: 'align-top',
                        render: function(data, type, row) {
                            // Modify the data for the first column

                            if (data == null) {
                                return 'N/A';
                            } else {
                                return data;
                            }
                        },
                        orderable: true,
                        searchable: true,
                        visible: false
                    },
                    {
                        data: 'details.total_km',
                        name: 'details.total_km',
                        className: 'align-top',
                        orderable: true,
                        searchable: true,
                        visible: false
                    },
                    {
                        data: 'booking_status',
                        name: 'booking_status',
                        className: 'align-top',
                        orderable: true,
                        searchable: true,
                        visible: true
                    },
                    // {
                    //     data: 'assigned_to',
                    //     name: 'assigned_to',
                    //     // className: 'align-top',
                    //     orderable: true,
                    //     searchable: true,
                    //     visible: false
                    // },
                    {
                        render: function(data, type, row) {
                            // Modify the data for the first column
                            return `
                            <button type="button" class="btn btn-dark open-modal-button drv mr-2">Assign To Driver</button>
                            <button type="button" class="btn btn-dark open-detail-modal-button mt-2 mr-2 drv" style="width: 100%;">View/Edit Details</button>
                            <button type="button" class="self mr-2">Self</button>
                            <button type="button" class="complete-ride mr-2 btn btn-dark mt-2" style="width: 100%;">Completed</button>
                            <button type="button" class="btn btn-danger cancel-ride-button drv">Cancel Ride</button>
                            `;
                            // return '<div class="dropdown">'+
                            //             '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton'+row.id+'" data-bs-toggle="dropdown" aria-expanded="false">'+
                            //             'Actions'+
                            //             '</button>'+
                            //             '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton'+row.id+'">'+
                            //             '<li><a class="dropdown-item" href="#">Edit</a></li>'+
                            //             '<li><a class="dropdown-item" href="#">Delete</a></li>'+
                            //             '<!-- Add more actions as needed -->'+
                            //             '</ul>'+
                            //         "</div>";
                        },
                    }
                ],
                rowCallback: function(row, data, index) {
                    var status = data.booking_status; // Assuming the status is in the "status" property of the data object
                    console.log(status)
                    if (status === 'completed') {
                        $(row).addClass('green-row'); // Add a CSS class to the row
                    } else if (status === 'cancel') {
                        $(row).addClass('red-row'); // Add a CSS class to the row
                    } else if (data.assigned_to === 'driver') {
                        $(row).addClass('yellow-row');
                    } else if (data.assigned_to === 'self') {
                        $(row).addClass('blue-row');
                    }
                }
            });

        });
        $(document).ready(function() {


            $('.page-datatable-ajax').on('click', '.cancel-ride-button', function() {
                // Get the data from the DataTable row
                const table = $('.page-datatable-ajax').DataTable();
                const rowData = table.row($(this).closest('tr')).data();
                $('#booking_id').val(rowData.id);
                console.log(rowData.id);
                // Extract the necessary data from the row

                // Open the modal and populate the data
                cancelRide(rowData.id);
            });


            setInterval(function() {
                const table = $('.page-datatable-ajax').DataTable();
                table.ajax.reload(null, false);
            }, 10000);

            $('.page-datatable-ajax').on('click', '.open-modal-button', function() {
                // Get the data from the DataTable row
                const table = $('.page-datatable-ajax').DataTable();
                const rowData = table.row($(this).closest('tr')).data();
                $('#booking_id').val(rowData.id);
                console.log(rowData.id);
                // Extract the necessary data from the row

                // Open the modal and populate the data
                openModal();
            });

            $('.page-datatable-ajax').on('click', '.self', function() {
                // Get the data from the DataTable row
                const table = $('.page-datatable-ajax').DataTable();
                const rowData = table.row($(this).closest('tr')).data();
                $('#booking_id').val(rowData.id);
                console.log(rowData.id);
                // Extract the necessary data from the row

                // Open the modal and populate the data
                openAssignToSelfModal();
            });

            $('.page-datatable-ajax tbody').on('click', '.complete-ride', function() {
                // Get the data from the DataTable row
                const table = $('.page-datatable-ajax').DataTable();
                const rowData = table.row($(this).closest('tr')).data();
                $('#booking_id').val(rowData.id);

                $.ajax({
                    url: apiUrl + "bookings/complete",
                    type: "POST",
                    data: {
                        id: $('#booking_id').val()
                    },
                    dataType: "json",
                    success: function(result) {
                        // result contains the response from the server-side PHP script
                        // you can use this result to update the UI or perform other operations
                        // sendToNextView();
                        const table = $('.page-datatable-ajax').DataTable();
                        table.ajax.reload(null, false);
                    },
                    error: function(xhr, status, error) {
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
            });

            $('.page-datatable-ajax').on('click', '.open-detail-modal-button', function() {
                // Get the data from the DataTable row

                const table = $('.page-datatable-ajax').DataTable();
                const rowData = table.row($(this).closest('tr')).data();
                $('#booking_id').val(rowData.id);
                console.log(rowData.id);
                // Extract the necessary data from the row

                // Open the modal and populate the data
                openDetailsModal();
            });
            
            $('#updateButton').on('click', function(){
                updateDetailsModal();
            })

            function openModal() {
                $('#exampleModal').modal('show');
            }

            function openAssignToSelfModal() {
                $("#self-assign-modal").modal('show');
            }

            function openDetailsModal() {
                $.ajax({
                    url: apiUrl + "bookings/find/id/" + $('#booking_id').val(),
                    type: "GET",
                    dataType: "json",
                    success: function(result) {
                        // result contains the response from the server-side PHP script
                        // you can use this result to update the UI or perform other operations
                        // sendToNextView();
                        let booking = result.booking;
                        setValueToDetailsModal(booking)
                        console.log(result);
                    },
                    error: function(xhr, status, error) {
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
                $("#details-modal").modal('show');
            }

            function updateDetailsModal() {
                let data = {
                    booking_id: $('#booking_id').val(),
                    booking_details_id: $('#booking_details_id').val(),
                    first_name: $('#first-name-details').val(),
                    last_name: $('#last-name-details').val(),
                    pickup_location: $('#pickup-location-details').val(),
                    drop_location: $('#drop-location-details').val(),
                    pickup_time: $('#pickup-time-details').val(),
                    pickup_date: $('#pickup-date-details').val(),
                    tip_for_driver: $('#driver-tip-details').val(),
                    diver_name: $('#driver-name-details').val(),
                    driver_payment: $('#driver-payment-details').val(),
                    specail_intruction: $('#additional-remarks-details').val(),
                }
                $.ajax({
                    url: apiUrl + "booking/details/update",
                    type: "POST",
                    data: data,
                    dataType: "json",
                    success: function(result) {
                        // result contains the response from the server-side PHP script
                        // you can use this result to update the UI or perform other operations
                        // sendToNextView();
                        let booking = result.booking;
                        // setValueToDetailsModal(booking)
                        $(".page-datatable-ajax").DataTable().ajax.reload(null, false);
                        console.log(result);
                    },
                    error: function(xhr, status, error) {
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
                $("#details-modal").modal('hide');
            }

            function setValueToDetailsModal(booking) {
                console.log(booking)
                $('#first-name-details').val(booking.first_name);
                $('#last-name-details').val(booking.last_name);
                $('#pickup-location-details').val(booking.details.pickup_location);
                $('#drop-location-details').val(booking.details.drop_location);
                $('#driver-tip-details').val(booking.tip_for_driver);
                $('#driver-name-details').val(booking.diver_name);
                $('#driver-payment-details').val(booking.driver_payment);
                $('#additional-remarks-details').val(booking.specail_intruction);
                $('#pickup-time-details').val(booking.details.pickup_time);
                $('#pickup-date-details').val(new Date(booking.details.pickup_date).toISOString().slice(0, 10));
                $('#vehicle-type-detail').text(booking.details.vehicle_type.name);
                $('#vehicle-detail').text(booking.details.vehicle == null ? 'Any Vehicle' : booking.details.vehicle.company + ' ' + booking.details.vehicle.model);
                $('#traveller-detail').text(booking.details.travellers);
                $('#child-seat-detail').text(booking.details.kids);
                $('#bags-detail').text(booking.details.bags);
                $('#inside-meetup-detail').text(booking.details.onsight_meetup == null ? 'No' : 'Yes');
                $('#total-miles-detail').text(booking.details.total_km);
                $('#booking_details_id').val(booking.details.id);




                // For the stopsList
                booking.details.stops.forEach(function(item, key) {
                    var li = $('<li>').text((key + 1) + ') ' + item.location);
                    $('#stopsList').append(li);
                })
            }
        });
    </script>




    <script src="assets/js/apilinking.js?v=1.1.0"></script>

</body>

</html>