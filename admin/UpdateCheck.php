<?php
include "config.php";
$v_id = $_GET['id'];
$sql = "UPDATE booking SET status = 1 WHERE booking.bid = '{$v_id}'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
header("location:booking_info.php");           
?>
