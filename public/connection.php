<?php
    define('DB_HOST','localhost');
    define('DB_USER','kato');
    define('DB_PASS','Jankan@1999');
    define('DB_NAME','coffeedb');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    or die("database has failed to load: ".mysqli_error($conn));
?>