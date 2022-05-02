<?php
session_start();
if ($_SESSION["login"] == true) {
} else {
   header("Location:index.php");
}
include "config.php";
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
              <h1 class="m-0 text-dark">Car Information</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index1.php">Car Insert Info</a>/Home</li>

              </ol> -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class="container text-right ">
            <a href="car_insert.php" class="text-center"> <button type="button" class="btn btn-dark">Insert Car</button></a>
          </div>

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
          
          <?php           
            $sql = "SELECT * FROM `car`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while($row = mysqli_fetch_assoc($result)){
              $sno = $sno + 1;
           echo "<tr>
            <th scope='row'>".$sno."</th>
            <td>".$row['vtitle']."</td>
            <td>".$row['vbrand']."</td>
            <td>".$row['pdprice']."</td>
            <td>".$row['ftype']."</td>
            <td>".$row['myear']."</td>
            <td>".$row['scapacity']."</td>
            <!-- <td>#</td> -->
            <td><a href='edit-vehicle.php?id=1'><i class='fa fa-edit'></i></a>&nbsp;&nbsp;
              <a href='delete-vehicles.php?del=1' onclick='return confirm('Do you want to delete');'><i class='fa fa-close'></i><i class='bi bi-trash'></i></a>
            </td>
          </tr>";
          } 
             mysqli_close($conn);
          ?>
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