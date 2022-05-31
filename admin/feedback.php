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
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b>User Feedback Table</b></h3>

              <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div> -->
            </div>
            <!-- /.card-header -->
            <?php
            include 'config.php';

            $sql = "SELECT * FROM feedback";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

            if (mysqli_num_rows($result) > 0) {
            ?>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>FID</th>
                      <th>UID</th>
                      <th>User</th>
                      <th>Reason</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <tr>
                        <th scope='row'><?php echo $row['fid']; ?></th>
                        <td><?php echo $row['uid']; ?></td>
                        <td><?php echo $row['fuser']; ?></td>
                        <td><?php echo $row['freason']; ?></td>
                        <td>
                          <a href='delete_feedback.php?id=<?php echo $row['fid']; ?> '><i class='fa fa-close'></i><i class='bi bi-trash'></i></a>
                            </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } else {
              echo "<h2>No Record Found</h2>";
            }
            mysqli_close($conn);
            ?>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- Main Content End -->
    </div>
    <?php
    include "footer.php";
    ?>
  </div>
</body>

</html>