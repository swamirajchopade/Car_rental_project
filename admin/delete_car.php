<?php 

$d_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM car WHERE vid = {$d_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location:car_info.php");

mysqli_close($conn);
?>