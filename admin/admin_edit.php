<?php
session_start();
if ($_SESSION["alogin"] == true) {
} else {
    header("Location:index.php");
}
include "config.php";
if(isset($_POST['submit'])){  
    $email=$_POST['email'];
    $opass=$_POST['opass'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $sql="SELECT password FROM admin WHERE email=$email";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
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
                            <h1 class="m-0 text-dark">Admin Password Edit</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container-sm card card-body">
                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Old Password</label>
                        <input type="password" class="form-control" name="opass" placeholder="Old Password">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" placeholder="New Password">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Confarm Password</label>
                        <input type="password" class="form-control" name="cpass" placeholder="New Conform Password">
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

            </div>
            <!-- Main row -->
        </div>
        </section>
    </div>
    <?php
    include "footer.php";
    ?>
    </div>
</body>

</html>