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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

    <style type="text/css">
        .tb .container-fluid {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            margin-top: 10%;
            padding: 30px 0;
            box-shadow: 0px 0px 10px 0px #ccc;
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
    </style>

</head>

<body class="hompg">
    <div class="tb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table id="myTable" class="row-border display page-datatable-ajax p-2">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Contact Number</th>
                                <!-- <th>Phone Number</th> -->
                                <th>Tip for driver</th>
                                <th>Total Charges</th>
                                <th>Pickup Location</th>
                                <th>Drop Location</th>
                                <th>Pickup Date</th>
                                <th>Pickup Time</th>
                                <th>Traveller</th>
                                <th>Total Kms</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Driver</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="booking_id">
                    <label class="form-control">Driver's Name:</label>
                    <input type="text" id="drv_name" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="assignDriver()">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(function() {
            $('.page-datatable-ajax').dataTable({
                order: [0, "asc"],
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
                        searchable: false
                    },
                    // {
                    //     data: 'contact_phone',
                    //     name: 'contact_phone',
                    //     className: 'align-top',
                    //     orderable: true,
                    //     searchable: true
                    // },
                    {
                        data: 'tip_for_driver',
                        name: 'tip_for_driver',
                        className: 'align-top',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'total_charges',
                        name: 'total_charges',
                        className: 'align-top',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'details.pickup_location',
                        name: 'details.pickup_location',
                        className: 'align-top',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'details.drop_location',
                        name: 'details.drop_location',
                        className: 'align-top',
                        orderable: true,
                        searchable: false
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
                        searchable: false
                    },
                    {
                        data: 'details.pickup_time',
                        name: 'details.pickup_time',
                        className: 'align-top',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'details.travellers',
                        name: 'details.travellers',
                        className: 'align-top',
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: 'details.total_km',
                        name: 'details.total_km',
                        className: 'align-top',
                        orderable: true,
                        searchable: false
                    },
                    {
                        render: function(data, type, row) {
                            // Modify the data for the first column
                            return `<button type="button" class="btn btn-dark open-modal-button">Assign To Driver</button>`
                        },
                    }
                ]
            });

        });
        $(document).ready(function() {
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

            function openModal() {
                // Logic to open the modal and populate the data
                // You can use your preferred method to open the modal, such as Bootstrap modal or a custom solution
                // Example:
                $('#exampleModal').modal('show');

            }
        });
    </script>




<script src="assets/js/apilinking.js"></script>

</body>

</html>