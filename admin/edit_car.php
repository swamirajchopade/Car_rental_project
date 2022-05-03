<?php
session_start();
include "config.php";

if ($_SESSION["login"] == true) {
} else {
    header("Location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "header.php";
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include "leftmeun.php";
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><b> Edit Car Info</b></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- action="car_operation_insert.php" -->
            <!-- Main content -->

            <?php
             $v_id = $_GET['id'];
            if($_SERVER['REQUEST_METHOD'] == "POST"){
            include "config.php";
           
           
            $v_id = $_POST['vid'];
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

            $sql = "UPDATE car SET vtitle = '{$vtitle}' ,vbrand = '{$vbran}', voverview = '{$voverview}', pdprice = '{$pdprice}', ftype = '{$ftype}', myear = '{$myear}', scapacity = '{$scapacity}', vimg1 = '{$vimg1}',vimg2 = '{$vimg2}',vimg3 = '{$vimg3}',vimg4 = '{$vimg4}',vimg5 = '{$vimg5}',vimg6 = '{$vimg6}' , ac = '{$ac}',  airbag = '{$airbag}'  WHERE vid = '{$v_id}'";
            
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
            header("Location:car_info.php");
            
            mysqli_close($conn);
        }
         $sql_1="SELECT * FROM car ";
         $result_1= mysqli_query($conn, $sql_1) or die("Query Unsuccessful.");
         $row = mysqli_fetch_assoc($result_1);
            ?>
            
         <div class="container m-1">
                <form class="row g-3" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Vehicle Title<span style="color:red">*</span></label>
                        <input type="hidden" name="vid" value="<?php echo $row['vid']; ?>" />
                        <input type="text" class="form-control" name="vtitle" value="<?php echo $row['vtitle']; ?>">
                    </div>
                    <div class=" col-md-6">
                        <label for="inputPassword4" class="form-label">Vehicle Brand<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vbrand" value="<?php echo $row['vbrand']; ?>">
                    </div>
                    <div class=" col-12">
                        <label for="inputAddress" class="form-label">Overview<span style="color:red">*</span></label>
                        <textarea class="form-control" name="voverview" rows="2"><?php echo $row['voverview']; ?></textarea>
                    </div>
                    <div class=" col-md-6">
                        <label for="inputCity" class="form-label">Price per day (In rupees)<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="pdprice" placeholder="₹" value="<?php echo $row['pdprice']; ?>">
                    </div>

                    <label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
                    <div class="col-sm-1">
                        <select class="selectpicker" name="fueltype">
                        <?php echo $row['fueltype']; ?>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="CNG">CNG</option>
                        </select>
                    </div>


                    <div class="col-md-6">
                        <label for="year" class="form-label">Model year<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="myear" value="<?php echo $row['myear']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="capacity" class="form-label">Sitting capacity<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="scapacity" value="<?php echo $row['scapacity']; ?>">
                    </div>
                    <div class="hr-dashed"></div>


                    <div class="form-group">
                        <div class="col-sm-12">
                            <h4><b>Upload Images</b></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Image 1 <input type="file" name="img1" ><?php echo $row['vimg1']; ?>
                        </div>
                        <div class="col-sm-4">
                            Image 2<input type="file" name="img2"><?php echo $row['vimg2']; ?>
                        </div>
                        <div class="col-sm-4">
                            Image 3<input type="file" name="img3"><?php echo $row['vimg3']; ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-4">
                            Image 4<input type="file" name="img4"><?php echo $row['vimg4']; ?>
                        </div>
                        <div class="col-sm-4">
                            Image 5<input type="file" name="img5"><?php echo $row['vimg5']; ?>
                        </div>

                        <div class="col-sm-4">
                            Image 6<input type="file" name="img6" ><?php echo $row['vimg6']; ?>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="gridCheck">Speciality</label>
                        <div class="form-check">
                            <input class="form-check-input" name="ac" type="checkbox" value="<?php echo $row['ac']; ?>" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Air Condition
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="airbag" value="<?php echo $row['airbag']; ?>" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Airbag (Safety)
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                
            </div>
            <!-- Main Content End -->
        </div>
        <?php
        include "footer.php";
        ?>
    </div>
</body>

</html>