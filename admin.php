<?php
include "config.php";

if(!isset($_SESSION['Email'])){
    header("location:adminLogin.php");
}else{}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Data Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #666;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
	margin: 30px 0;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.pagination {
    margin: 10px 0 5px;
}
.pagination li a {
    border: none;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 4px !important;
    text-align: center;
    padding: 0;
}
.pagination li a:hover {
    color: #666;
}
.pagination li.active a, .pagination li.active a.page-link {
    background: #59bdb3;
}
.pagination li.active a:hover {        
    background: #45aba0;
}
.pagination li:first-child a, .pagination li:last-child a {
    padding: 0 10px;
}
.pagination li.disabled a {
    color: #ccc;
}
.pagination li i {
    font-size: 17px;
    position: relative;
    top: 1px;
    margin: 0 2px;
}
</style>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Event</th>
                        <th>Bookings</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Wedding's</td>
                        <td><a href="adminWedding.php">Check Bookings</a></td>
                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Club Party</td>
                        <td><a href="adminClubParty.php">Check Bookings</a></td>
                        
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Exhibition</td>
                        <td><a href="adminExhibition.php">Check Bookings</a></td>
                        
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Birthday</td>
                        <td><a href="adminBirthday.php">Check Bookings</a></td>
                        
                    </tr>
                           
                </tbody>
            </table>
           
        </div>
    </div>
</div>     
</body>
</html>