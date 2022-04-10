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
                            <h1 class="m-0 text-dark"><b> Car Insert</b></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index1.php">Car Insert Info</a>/Home</li>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container m-1">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Vehicle Title<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vtitle" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Vehicle Brand<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vbrand" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Overview<span style="color:red">*</span></label>
                        <textarea class="form-control" name="voverview" rows="2" required=""></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Price per day (In rupees)<span style="color:red">*</span></label>
                        <input type="text" class="form-control" placeholder="₹" required>
                    </div>

                    <label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
                    <div class="col-sm-1">
                        <select class="selectpicker" name="fueltype" required>
                            <option value=""> Select </option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="CNG">CNG</option>
                        </select>
                    </div>

                    
                    <div class="col-md-6">
                        <label for="year" class="form-label">Model year<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vtitle" required>
                    </div>
                    <div class="col-md-6">
                        <label for="capacity" class="form-label">Setting capacity<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="vbrand" required>
                    </div>
                    <div class="hr-dashed"></div>


                    <div class="form-group">
                        <div class="col-sm-12">
                            <h4><b>Upload Images</b></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Image 1 <span style="color:red">*</span><input type="file" name="img1" required>
                        </div>
                        <div class="col-sm-4">
                            Image 2<span style="color:red">*</span><input type="file" name="img2" required>
                        </div>
                        <div class="col-sm-4">
                            Image 3<span style="color:red">*</span><input type="file" name="img3" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-4">
                            Image 4<span style="color:red">*</span><input type="file" name="img4" required>
                        </div>
                        <div class="col-sm-4">
                            Image 5<input type="file" name="img5">
                        </div>

                    </div>
                   
                    <div class="col-12">
                        <label class="form-label" for="gridCheck">Speciality</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Air Condition
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Airbag (Safety)
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
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