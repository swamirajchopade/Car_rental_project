<?php
session_start();
if ($_SESSION["alogin"] == true) {
} else {
   header("Location:index.php");
}
include "config.php";
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
      <?php
          include 'config.php';

          $sql = "SELECT * FROM tbldriver";
          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result) > 0)  {
          ?>
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
            while($row = mysqli_fetch_assoc($result)){
          ?>
           <tr>
            <th scope='row'><?php echo $row['did']; ?></th>
            <td><?php echo $row['dname']; ?></td>
            <td><?php echo $row['dcontactno']; ?></td>
            <td><?php echo $row['daddress']; ?></td>
            <td><?php echo $row['dbloodgroup']; ?></td>
            <td><?php echo $row['ddlno']; ?></td>
            <td><?php echo $row['dvehicleno']; ?></td>
            <td><?php echo $row['daltno']; ?></td>
            <!-- <td>#</td> -->
            <td><a href='edit_driver.php?id=<?php echo $row['did']; ?>'><i class='fa fa-edit'></i></a>&nbsp;&nbsp;
              <a href='delete_driver.php?id=<?php echo $row['did']; ?>'><i class='fa fa-close'></i><i class='bi bi-trash'></i></a>
            </td>
          </tr>
          <?php } ?>
          
        
        </tbody>
      </table>
      <?php }
        else{
          echo "<h2>No Record Found</h2>";
            }
        mysqli_close($conn);
      ?>
      <!-- Main Content End -->
    </div>
    <?php
    include "footer.php";
    ?>
  </div>
</body>

</html>