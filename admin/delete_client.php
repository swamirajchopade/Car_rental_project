<?php 

$d_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM tbluser WHERE uid = {$d_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location:client_login_info.php");

mysqli_close($conn);
?>