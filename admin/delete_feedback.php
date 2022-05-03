<?php 

$d_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM feedback WHERE fid = {$d_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location:feedback.php");

mysqli_close($conn);
?>