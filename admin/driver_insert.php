<?php
session_start();
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

                            <h1 class="m-0 text-dark"><b> INSERT DRIVER</b></h1>

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
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Full Name<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vtitle" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Mobile No.<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vbrand" required>
                    </div>
                    <!-- Date -->
                    <div class="col-md-6">
                        <label>Date of birth:<span style="color:red">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask  required>
                        </div>
                    </div>
                    <!-- date end -->
                    <div class="col-md-6">
                        <label for="exampleSelectRounded0">Gender<span style="color:red">*</span></label>
                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Address<span style="color:red">*</span></label>
                        <textarea class="form-control" name="voverview" rows="1" required=""></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">State<span style="color:red">*</span></label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="indputdist" class="form-label">Dist<span style="color:red">*</span></label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="citypin" class="form-label">Pin<span style="color:red">*</span></label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Blood Group<span style="color:red">*</span></label>
                        <input type="text" class="form-control" required>
                    </div>

                    <!-- <label class="col-sm-2 control-label">xfghfghxfghc<span style="color:red">*</span></label>
                    <div class="col-sm-1">
                        <select class="selectpicker" name="fueltype" required>
                            <option value=""> Select </option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="CNG">CNG</option>
                        </select>
                    </div> -->


                    <div class="col-md-6">
                        <label for="year" class="form-label">Driving Lic. NO.<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vtitle" required>
                    </div>
                    <div class="col-md-6">
                        <label for="capacity" class="form-label">Releted Vehicle no.<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vbrand" required>
                    </div>
                    <div class="col-md-6">
                        <label for="capacity" class="form-label">alter phone no.<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vbrand" required>
                    </div>
                    <div class="hr-dashed"></div>
                    <div class="container">
                        <div class="col-sm-12">
                            <h4><b>Upload Images</b></h4>
                        </div>
                    </div>

                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Driving lic. <span style="color:red">*</span><input type="file" name="img1" required>
                        </div>
                        <div class="col-sm-4">
                            Aaddhar card<span style="color:red">*</span><input type="file" name="img2" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Driver photo<span style="color:red">*</span><input type="file" name="img3" required>
                        </div>


                        <div class="col-sm-4">
                            Bank passbook<span style="color:red">*</span><input type="file" name="img4" required>
                        </div>

                    </div>


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