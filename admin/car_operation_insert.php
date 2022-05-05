
<?php

include "config.php";
 $vtitle = $_POST['vtitle'];
 $vbran = $_POST['vbrand'];
 $voverview = $_POST['voverview'];
 $pdprice = $_POST['pdprice'];
 $ftype = $_POST['fueltype'];
 $myear = $_POST['myear'];
 $scapacity = $_POST['scapacity'];
 $vimg1 = basename($_FILES["img1"]["tmp_name"]);
 $vimg2 = basename($_FILES["img2"]["tmp_name"]);
 $vimg3 = basename($_FILES["img3"]["tmp_name"]);
 $vimg4 = basename($_FILES["img4"]["tmp_name"]);
 $vimg5 = basename($_FILES["img5"]["tmp_name"]);
 $vimg6 = basename($_FILES["img6"]["tmp_name"]);
 $ac = $_POST['ac'];
 $airbag = $_POST['airbag'];

 $query = "INSERT INTO car (vtitle,vbrand,voverview,pdprice,ftype,myear,scapacity,vimg1,vimg2,vimg3,vimg4,vimg5,vimg6,ac,airbag) VALUES ('$vtitle','$vbran','$voverview','$pdprice','$ftype','$myear','$scapacity','$vimg1','$vimg2','$vimg3','$vimg4','$vimg5','$vimg6','$ac','$airbag')";


 $result = mysqli_query($conn, $query) or die("Query Unsuccessful.");
 header("Location:car_info.php");

 mysqli_close($conn);
?>