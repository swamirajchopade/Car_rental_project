<?php

include "config.php";

 $dname = $_POST['dname'];
 $dcontactno = $_POST['dcontactno'];
 $daltno = $_POST['daltno'];
 $dgender=$_POST['dgender'];
 $ddob=$_POST['ddob'];
 $daddress = $_POST['daddress'];
 $dstate = $_POST['dstate'];
 $ddist = $_POST['ddist'];
 $dpin= $_POST['dpin'];
 $dbloodgroup = $_POST['dbloodgroup'];
 $ddlno = $_POST['ddlno'];
 $dvehicleno = $_POST['dvehicleno'];
 $dimg1 = basename($_FILES["img1"]["tmp_name"]);
 $dimg2 = basename($_FILES["img2"]["tmp_name"]);
 $dimg3 = basename($_FILES["img3"]["tmp_name"]);
 $dimg4 = basename($_FILES["img4"]["tmp_name"]);

 $query = " INSERT INTO tbldriver(dname, dcontactno, daltno, dgender, ddob, daddress, dstate, ddist, dpin, dbloodgroup, ddlno, dvehicleno, dimg1, dimg2, dimg3, dimg4) VALUES ( '$dname', '$dcontactno', '$daltno', '$dgender', '$ddob', '$daddress', '$dstate', '$ddist', '$dpin', '$dbloodgroup', '$ddlno', '$dvehicleno', '$dimg1', '$dimg2', '$dimg3', '$dimg4');";


 $result = mysqli_query($conn, $query) or die("Query Unsuccessful.");
 header("Location: driver_info.php");

 mysqli_close($conn);
?>