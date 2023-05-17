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
<script	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


<?php
$srcurl = "includes/";
$basesurl = "assets/";
?>




<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "homepage";
?>

<style type="text/css">
    .tb .container {
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

table#myTable 
 tbody {}

table#myTable 
 tbody tr {
    padding: 0 0px;
}

table#myTable tbody tr td {
    padding: 10px 20px;
}
</style>

</head>
<body class="hompg">
    <div class="tb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table id="myTable" class="display page-datatable-ajax">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
            <th>Column 4</th>
            <th>Column 5</th>
            <th>Column 6</th>
            <th>Column 7</th>
            <th>Column 8</th>
        </tr>
    </thead>
</table>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
    $(function() {
        $('.page-datatable-ajax').dataTable({
            order: [[ 1, "asc" ]],
            ajax: config.API_URL+'/page/list',
            lengthMenu: [10, 25, 50, 100, 500],
            columns: [
              { data: 'id', name: 'id', className: 'align-top', orderable: true, searchable: true},
              { data: 'name', name: 'name', className: 'align-top', orderable: true, searchable: false},
              { data: 'slug', name: 'slug', className: 'align-top', orderable: true, searchable: false},
              { data: 'content', name: 'content', className: 'align-top', orderable: true, searchable: false},
              
              
              
            ]
        });
    });
</script>





</body>
</html>