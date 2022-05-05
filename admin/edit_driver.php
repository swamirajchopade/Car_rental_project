<?php
session_start();
if ($_SESSION["login"] == true) {
} else {
    header("Location:index.php");
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "config.php";
    $v_id = $_GET['id'];
    $dname = $_POST['dname'];
    $dcontactno = $_POST['dcontactno'];
    $daltno = $_POST['daltno'];
    $dgender = $_POST['dgender'];
    $ddob = $_POST['ddob'];
    $daddress = $_POST['daddress'];
    $dstate = $_POST['dstate'];
    $ddist = $_POST['ddist'];
    $dpin = $_POST['dpin'];
    $dbloodgroup = $_POST['dbloodgroup'];
    $ddlno = $_POST['ddlno'];
    $dvehicleno = $_POST['dvehicleno'];

    $query = " UPDATE `tbldriver` SET `dname` = '{$dname}', `dcontactno` = '{$dcontactno}', `daltno` = '{$daltno}', `{$dgender}` = '2', `ddob` = '{$ddob}', `daddress` = '{$daddress}', `dstate` = '{$dstate}', `ddist` = '{$ddist}', `dpin` = '{$dpin}', `dbloodgroup` = '{$dbloodgroup}', `ddlno` = '{$ddlno}' WHERE `tbldriver`.`did` ='{$v_id}' ;";


    $result = mysqli_query($conn, $query) or die("Query Unsuccessful.");
    //header("Location:driver_info.php");
}
?>
<?php
$v_id = $_GET['id'];
$sql_1 = "SELECT * FROM tbldriver WHERE did = '{$v_id}'";
$result_1 = mysqli_query($conn, $sql_1) or die("Query Unsuccessful.");
$row = mysqli_fetch_assoc($result_1);
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

                            <h1 class="m-0 text-dark"><b> UPDATE DRIVER INFO</b></h1>

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index1.php">Car Insert Info</a>/Home</li>

                            </ol> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container m-1">
                <form class="row g-3" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Full Name<span style="color:red">*</span></label>
                        <input type="hidden" name="vid" value="<?php echo $row['did']; ?>" />
                        <input type="text" class="form-control" name="dname" value="<?php echo $row['dname']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Mobile No.<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="dcontactno" value="<?php echo $row['dcontactno']; ?>" required>
                    </div>
                    <!-- Date -->
                    <div class="col-md-6">
                        <label>Date of birth:<span style="color:red">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" name="ddob" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask value="<?php echo $row['ddob']; ?>" required>
                        </div>
                    </div>
                    <!-- date end -->
                    <div class="col-md-6">
                        <label for="exampleSelectRounded0">Gender<span style="color:red">*</span></label>
                        <select class="custom-select rounded-0" name="dgender" value="<?php echo $row['dgender']; ?>" id="exampleSelectRounded0">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Address<span style="color:red">*</span></label>
                        <textarea class="form-control" name="daddress" rows="1" value="<?php echo $row['daddress']; ?>" required=""></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">State<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="dstate" value="<?php echo $row['dstate']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="indputdist" class="form-label">Dist<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="ddist" value="<?php echo $row['ddist']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="citypin" class="form-label">Pin<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="dpin" value="<?php echo $row['dpin']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Blood Group<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="dbloodgroup" value="<?php echo $row['dbloodgroup']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="year" class="form-label">Driving Lic. NO.<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="ddlno" value="<?php echo $row['ddlno']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="capacity" class="form-label">Releted Vehicle no.<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="dvehicleno" value="<?php echo $row['dvehicleno']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="capacity" class="form-label">alter phone no.<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="daltno" value="<?php echo $row['daltno']; ?>" required>
                    </div>
                    <div class="hr-dashed"></div>


                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Insert driver</button>
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