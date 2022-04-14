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
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Vehicle</th>
            <th scope="col">From Date</th>
            <th scope="col">To Date</th>
            <th scope="col">Destination</th>
            <th scope="col">Payment Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Sanket Nalage</td>
            <td>Innova</td>
            <td>30/02/2023</td>
            <td>04/03/2022</td>
            <td>Tirupati Balaji</td>
            <td>NOT Conformed</td>
            <!-- <td>#</td> -->
            <td><a href="edit-vehicle.php?id=1"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
              <a href="manage-vehicles.php?del=1" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i><i class='bi bi-trash'></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Abhi Bhoite</td>
            <td>BMW</td>
            <td>01/04/2021</td>
            <td>01/04/2021</td>
            <td>Delhi</td>
            <td>Confermed</td>
            <!-- <td>#</td> -->
            <td><a href="edit-vehicle.php?id=1"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
              <a href="manage-vehicles.php?del=1" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i><i class='bi bi-trash'></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Saami Chopra</td>
            <td>Vitar Brezza</td>
            <td>02/05/2022</td>
            <td>03/05/2022</td>
            <td>Mumbai</td>
            <td>Confermed</td>
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