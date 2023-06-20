<?php
include 'connection.php';

$sql_update = "UPDATE booking SET status = 1 WHERE status = 0";
mysqli_query($conn, $sql_update);

$sql_get = mysqli_query($conn, "SELECT * FROM booking WHERE status=0");
$notifier = mysqli_num_rows($sql_get);
echo $notifier;
?>
