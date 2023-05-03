<?php
    include 'connection.php';

    //declaring variables for the inputs
    $n = $_POST['name']; 
    $e = $_POST['email']; 
    $d = $_POST['date']; 
    $t = $_POST['time']; 
    $g = $_POST['guests']; 

    //inserting data into table in database

    mysqli_query($conn, "INSERT INTO booking (name, email, date, time, guests) VALUES ('$n', '$e', '$d', '$t', '$g')" )
    or die("failed to add " .mysqli_error($conn));
    header("location:index.php");
    print '<script> alert("your order is submitted");</script>';
?>