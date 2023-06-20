<?php
    include 'connection.php';

    if(isset($_POST['submit'])) {
        //declaring values from the form
        $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $em = $_POST['email'];
        $ph = $_POST['phone'];
        $up = $_POST['pass'];

        if(isset($_FILES['image'])) {
            $pp = $_FILES['image'];
            $imagefilename = $pp['name'];
            $imagefiletemp = $pp['tmp_name'];
            $filename_separate = explode('.', $imagefilename);
            $files_extension = end($filename_separate);

            $extension = array('jpeg', 'jpg', 'png');
            if(in_array($files_extension, $extension)) {
                $upload_image = 'uploads/admin/'.$imagefilename;
                move_uploaded_file($imagefiletemp, $upload_image);

                // Prepared statement to prevent SQL injection attacks
                $stmt = $conn->prepare("INSERT INTO admin (fname, lname, email, password, phone, photo) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $fn, $ln, $em, $up, $ph, $upload_image);
                $stmt->execute();
                $stmt->close();

                header("location:dashboard.php");
                exit();
            }
            else {
                echo "Invalid file format. Allowed file formats are: jpeg, jpg, png.";
                exit();
            }
        }
        else {
            echo "No file uploaded.";
            exit();
        }
    }
?>






