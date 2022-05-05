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

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                include "config.php";


                $v_id = $_GET['id'];
                $vtitle = $_POST['vtitle'];
                $vbran = $_POST['vbrand'];
                $voverview = $_POST['voverview'];
                $pdprice = $_POST['pdprice'];
                $ftype = $_POST['fueltype'];
                $myear = $_POST['myear'];
                $scapacity = $_POST['scapacity'];

                $ac = $_POST['ac'];
                $airbag = $_POST['airbag'];
                $sql = "UPDATE car SET vtitle = '{$vtitle}' ,vbrand = '{$vbran}', voverview = '{$voverview}', pdprice = '{$pdprice}', ftype = '{$ftype}', myear = '{$myear}', scapacity = '{$scapacity}',ac = '{$ac}' , airbag = '{$airbag}'  WHERE car.vid = '{$v_id}'";

                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                // header("Location:car_info.php");


            }
            ?>

            <?php
            $v_id = $_GET['id'];
            $sql_1 = "SELECT * FROM car WHERE vid = '{$v_id}'";
            $result_1 = mysqli_query($conn, $sql_1) or die("Query Unsuccessful.");
            $row = mysqli_fetch_assoc($result_1);
            ?>

            <div class="container m-1">
                <form class="row g-3" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
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


                   

                    <div class="col-12">
                        <label class="form-label" for="gridCheck">Speciality</label>
                        <div class="form-check">
                            <?php //if ($row['ac'] == 1) { ?>
                                <?php //echo $row['ac']; ?>
                                <input class="form-check-input" name="ac" type="checkbox" id="gridCheck" value="1">
                                <input class="form-check-input" name="ac" type="hidden" id="gridCheck" value="0" >
                            
                            <label class="form-check-label" for="gridCheck">
                                Air Condition
                            </label>
                        </div>
                        <div class="form-check">
                        <!-- <?php //echo $row['airbag']; ?> -->
                                <input class="form-check-input" name="airbag" type="checkbox" id="gridCheck" value="1" >
                                <input class="form-check-input" name="airbag" type="hidden" id="gridCheck" value="0" >
                           
                            <label class="form-check-label" for="gridCheck">
                                Airbag (Safety)
                            </label>
                        </div>

                    </div>
                    <div class="col-12">
                        <a href="car_info.php"> <button type="submit" class="btn btn-primary">Update </button></a>
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