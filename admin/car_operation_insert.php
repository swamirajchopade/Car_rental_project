
<?php

include "config.php";

 $vtitle = $_POST['vtitle'];
 $vbran = $_POST['vbrand'];
 $voverview = $_POST['voverview'];
 $pdprice = $_POST['pdprice'];
 $ftype = $_POST['fueltype'];
 $myear = $_POST['myear'];
 $scapacity = $_POST['scapacity'];
 $vimg1 = $_POST['img1'];
 $vimg2 = $_POST['img2'];
 $vimg3 = $_POST['img3'];
 $vimg4 = $_POST['img4'];
 $vimg5 = $_POST['img5'];
 $vimg6 = $_POST['img6'];
 $ac = $_POST['ac'];
 $airbag = $_POST['airbag'];

 $query = "INSERT INTO car (vtitle,vbrand,voverview,pdprice,ftype,myear,scapacity,vimg1,vimg2,vimg3,vimg4,vimg5,vimg6,ac,airbag) VALUES ('$vtitle','$vbran','$voverview','$pdprice','$ftype','$myear','$scapacity','$vimg1','$vimg2','$vimg3','$vimg4','$vimg5','$vimg6','$ac','$airbag')";


 $result = mysqli_query($conn, $query) or die("Query Unsuccessful.");
 header("Location:car_info.php");

 mysqli_close($conn);
?>