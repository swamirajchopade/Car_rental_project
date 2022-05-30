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

      <?php
          include 'config.php';

          $sql = "SELECT * FROM booking";
          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result) > 0)  {
          ?>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">Bid</th>
            <th scope="col">Vehicle</th>
            <th scope="col">Email</th>
            <th scope="col">User Name</th>
            <th scope="col">From Date</th>
            <th scope="col">To Date</th>
            <th scope="col">Destination</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
              
        <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
          <tr>
            <th scope="row"><?php echo $row['bid']; ?></th>
            <td><?php echo $row['vname']; ?></td>
            <td><?php echo $row['uemail']; ?></td>
            <td><?php echo $row['uname']; ?></td>
            <td><?php echo $row['fromdate']; ?></td>
            <td><?php echo $row['todate']; ?></td>
            <td><?php echo $row['destination']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>&nbsp;&nbsp;
              <a href='delete_booking.php?id=<?php echo $row['bid']; ?>'><i class='fa fa-close'></i><i class='bi bi-trash'></i></a>
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