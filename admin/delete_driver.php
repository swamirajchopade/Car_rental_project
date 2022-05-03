<?php 

$d_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM tbldriver WHERE did = {$d_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location:driver_info.php");

mysqli_close($conn);
?>