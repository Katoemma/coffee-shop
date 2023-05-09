<?php
    include 'connection.php';

    if(isset($_POST['submit'])) {
        //declaring values from the form
        $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $em = $_POST['email'];
        $ph = $_POST['phone'];
        $up = $_POST['pass'];
        $d = $_POST['department'];

        mysqli_query($conn, "INSERT INTO employees (fname, lname, email, password, number, department)
         VALUES ('$fn','$ln', '$em', '$up', '$ph', '$d')" )
        or die("failed to add " .mysqli_error($conn));
        header("location:dashboard_employees.php");
    }  
?>






