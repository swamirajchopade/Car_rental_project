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
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Gender</th>
            <th scope="col">Date of birth</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Tejas Gund</td>
            <td>tejasgund02@gmail.com</td>
            <td>9561409792</td>
            <td>Male</td>
            <td>20/07/2001</td>
          </tr>
          <tr>
          <th scope="row">2</th>
            <td>Saami Chopra</td>
            <td>swamiraj9006@gmail.com</td>
            <td>9561402342</td>
            <td>Male</td>
            <td>19/07/2001</td>
          </tr>
          <tr>
          <th scope="row">3</th>
            <td>Abhi Bhoite</td>
            <td>Abhi@gmail.com</td>
            <td>9561409792</td>
            <td>Male</td>
            <td>20/12/2000</td>
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