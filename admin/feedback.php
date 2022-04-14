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
              <h1 class="m-0 text-dark">Feedback</h1>
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
            <th scope="col">Vehical Title</th>
            <th scope="col">Brand</th>
            <th scope="col">Price(per day)</th>
            <th scope="col">Fule Type</th>
            <th scope="col">Model Year</th>
            <th scope="col">Sit</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Grand Vitara</td>
            <td>Suzuki</td>
            <td>3500</td>
            <td>Petrol</td>
            <td>2014</td>
            <td>5</td>
            <!-- <td>#</td> -->
            <td><a href="edit-vehicle.php?id=1"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
              <a href="manage-vehicles.php?del=1" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i><i class='bi bi-trash'></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Swift</td>
            <td>Suzuki</td>
            <td>2800</td>
            <td>Diesel</td>
            <td>2017</td>
            <td>4</td>
            <!-- <td>#</td> -->
            <td><a href="edit-vehicle.php?id=1"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
              <a href="manage-vehicles.php?del=1" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i><i class='bi bi-trash'></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Nexon</td>
            <td>TATA</td>
            <td>3200</td>
            <td>CNG</td>
            <td>2021</td>
            <td>4</td>
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