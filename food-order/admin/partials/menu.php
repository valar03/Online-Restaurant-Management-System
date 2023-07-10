<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Food Order Website - Home Page</title>
        <link rel="icon" type="image/x-icon" href="http://localhost:8080/olive-kitchen/logo_olive.jpg">
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><h4 class="heading">OLIVE KITCHEN<br><br>ADMIN PANEL</h4></li><br><br>
                    <li><a href="index.php">Home</a></li><br><br>
                    <li><a href="manage-admin.php">Admin</a></li><br><br>
                    <li><a href="manage-customer.php">Customer details</a></li><br><br>
                    <li><a href="manage-category.php">Category</a></li><br><br>
                    <li><a href="manage-food.php">Food</a></li><br><br>
                    <li><a href="manage-order.php">Order</a></li><br><br>
                    <li><a href="manage_table.php">Table</a></li><br><br>
                    <li><a href="manage-reserve.php">Reservation</a></li><br><br>
                    <li><a href="logout.php">Logout</a></li><br><br>
                    
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->