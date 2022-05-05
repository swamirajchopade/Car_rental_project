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
              <h1 class="m-0 text-dark">Client Login Details</h1>
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

            $sql = "SELECT * FROM tbluser";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

            if (mysqli_num_rows($result) > 0) {
            ?>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Date of birth</th>
            <th scope="col">Reg Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <th scope="row"><?php echo $row['uid']; ?></th>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contactno']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['regdate']; ?></td>

            <td>
            <a href='delete_client.php?id=<?php echo $row['uid']; ?> '><i class='fa fa-close'></i><i class='bi bi-trash'></i></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else {
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