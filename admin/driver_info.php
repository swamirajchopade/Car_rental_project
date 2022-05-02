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
              <h1 class="m-0 text-dark">Driver Information</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index1.php">Car Insert Info</a>/Home</li>

              </ol> -->
            </div><!-- /.col -->
          </div><!-- /.row -->


          <div class="container text-right ">
            <a href="driver_insert.php" class="text-center"> <button type="button" class="btn btn-dark">Insert New Driver</button></a>
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
            <th scope="col">Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Address</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Driving lic no.</th>
            <th scope="col">Vehical no.</th>
            <th scope="col">Home Phone no.</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
         
         
          <?php           
            $sql = "SELECT * FROM `tbldriver`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while($row = mysqli_fetch_assoc($result)){
              $sno = $sno + 1;
           echo "<tr>
            <th scope='row'>".$sno."</th>
            <td>".$row['dname']."</td>
            <td>".$row['dcontactno']."</td>
            <td>".$row['daddress']."</td>
            <td>".$row['dbloodgroup']."</td>
            <td>".$row['ddlno']."</td>
            <td>".$row['dvehicleno']."</td>
            <td>".$row['daltno']."</td>
            <!-- <td>#</td> -->
            <td><a href='edit-vehicle.php?id=1'><i class='fa fa-edit'></i></a>&nbsp;&nbsp;
              <a href='manage-vehicles.php?del=1' onclick='return confirm('Do you want to delete');'><i class='fa fa-close'></i><i class='bi bi-trash'></i></a>
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