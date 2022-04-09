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
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
            <div id="main-content">
    <h2>All Records</h2>
	
    <table cellpadding="10px" border="1">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>Email</th>
        <th>Password</th>
        <th>Status</th>
        <th>Action</th>
        </thead>
        <tbody>
		
            <tr>
                <td>1</td>
                <td>Swami</td>
                <td>BCS</td>
                <td>swami@gmail.com</td>
                <td>Swami</td>
                <td></td>
                <td>
                    <a href="#">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>   
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


</div>
<?php
include "footer.php";
?>
</div>    
</body>
</html>