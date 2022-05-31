<?php
session_start();
if ($_SESSION["alogin"] == true) {
} else {
   header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
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
                            <h1 class="m-0 text-dark">Payment Details</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index1.php">Car Insert Info</a>/Home</li>

              </ol> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- btn btn-block bg-gradient-secondary btn-lg -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">pid</th>
                        <th scope="col">bid</th>

                        <th scope="col">Transition ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date/Time </th>
                        <th scope="col">Payment Status </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th scope="row">2</th>

                        <td>TD9561409792</td>
                        <td>tejasgund02@gmail.com</td>
                        <td>9561409792</td>
                        <td>20/07/2001 12.34 PM</td>
                        <td> <span class="badge badge-success">Success</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th scope="row">3</th>

                        <td>TD140979ss2</td>
                        <td>Sanekt7373@gmail.com</td>
                        <td>95634234</td>
                        <td>20/07/2022 12.34 PM</td>
                        <td> <span class="badge badge-success">Success</span></td>
                    </tr>
                    </tr>
                </tbody>
            </table>

            <!-- Main Content End -->
        </div>
        <?php
        include "footer.php";
        ?>
    </div>
</body>

</html>