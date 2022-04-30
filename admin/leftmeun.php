
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Car Rental</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <!-- Change has done just given path -->
                            <a href="index1.php" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                    Home
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>

                        <div class="container">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-car"></i>
                                    <p>
                                        Car Info/Insert
                                        <i class="fas fa-angle-left right"></i>
                                        <span class="badge badge-info right"></span>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="car_info.php" class="nav-link">
                                            <!-- <i class="far fa-circle nav-icon"></i> -->
                                            <ion-icon name="list-circle-outline"></ion-icon>
                                            <p>Cars Information</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="car_insert.php" class="nav-link">
                                            <!-- <i class="far fa-circle nav-icon"></i> -->
                                            <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                                            <p>Car Insert</p>
                                        </a>
                                    </li>
                        </div>



                        <li class="nav-item">
                            <a href="booking_info.php" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>
                                    Booking Car Info
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="client_login_info.php" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Client/Login Info
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>

                        <div class="container">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-street-view"></i>
                                    <p>
                                        Driver info/insert
                                        <i class="fas fa-angle-left right"></i>
                                        <span class="badge badge-info right"></span>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="driver_info.php" class="nav-link">
                                            <!-- <i class="far fa-circle nav-icon"></i> -->
                                            <ion-icon name="list-circle-outline"></ion-icon>
                                            <p>Driver Information</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="driver_insert.php" class="nav-link">
                                            <!-- <i class="far fa-circle nav-icon"></i> -->
                                            <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                                            <p>Driver Insert</p>
                                        </a>
                                    </li>
                        </div>

                        <li class="nav-item">
                            <a href="payment.php" class="nav-link">
                            <ion-icon name="wallet-outline" size="small"></ion-icon>
                                <!-- <i class="nav-icon fa fa-archive"></i> -->
                                <p>
                                  &nbsp;&nbsp;  Payment Details
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="feedback.php" class="nav-link">
                                <i class="nav-icon fa fa-comments"></i>
                                <p>
                                    Feedback
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Web Setting
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Header</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Footer</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>
</body>

</html>