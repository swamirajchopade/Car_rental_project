<?php 

$d_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM booking WHERE bid = {$d_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location:booking_info.php");

mysqli_close($conn);
?>