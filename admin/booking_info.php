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
              <h1 class="m-0 text-dark">Booking Information</h1>
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
            <th scope="col">Bid</th>
            <th scope="col">Vid</th>
            <th scope="col">Vehicle</th>
            <th scope="col">Uid</th>
            <th scope="col">email</th>
            <th scope="col">UName</th>
            <th scope="col">From Date</th>
            <th scope="col">To Date</th>
            <th scope="col">Destination</th>
            <th scope="col">Pid</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <th scope="col">2</th>
            <td>Innova</td>
            <th scope="col">2</th>
            <td>sanketnalage@gmail.com</td>
            <td>sanket nalage</td>
            <td>30/02/2023</td>
            <td>04/03/2022</td>
            <td>Tirupati Balaji</td>
            <th scope="row">1</th>

            <!-- <td>#</td> -->
            <td><a href="edit-vehicle.php?id=1"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
              <a href="manage-vehicles.php?del=1" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i><i class='bi bi-trash'></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <th scope="col">2</th>
            <td>Innova</td>
            <th scope="col">2</th>
            <td>sanketnalage@gmail.com</td>
            <td>sanket nalage</td>
            <td>30/02/2023</td>
            <td>04/03/2022</td>
            <td>Tirupati Balaji</td>
            <th scope="row">1</th>
            <!-- <td>#</td> -->
            <td><a href="edit-vehicle.php?id=1"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
              <a href="manage-vehicles.php?del=1" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i><i class='bi bi-trash'></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <th scope="col">2</th>
            <td>Innova</td>
            <th scope="col">2</th>
            <td>sanketnalage@gmail.com</td>
            <td>sanket nalage</td>
            <td>30/02/2023</td>
            <td>04/03/2022</td>
            <td>Tirupati Balaji</td>
            <th scope="row">1</th>
            <!-- <td>#</td> -->
            <td><a href="edit-vehicle.php?id=1"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
              <a href="manage-vehicles.php?del=1" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i><i class='bi bi-trash'></i></a>
            </td>
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