<!DOCTYPE html>
<html lang="en">


<!-- payments23:25-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets3/img/f.png">
    <title>Nurse Salary</title>
    <link rel="stylesheet" type="text/css" href="assets3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/style3a.css">
    <!--[if lt IE 9]>
		<script src="assets3/js/html5shiv.min.js"></script>
		<script src="assets3/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="nursedash.php" class="logo">
                    <img src="assets3/img/logo.png" width="35" height="35" alt=""> <span>HMS</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets3/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Nurse</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile3.php">My Profile</a>
                        <!-- <a class="dropdown-item" href="edit-profile3.php">Edit Profile</a>
                        <a class="dropdown-item" href="settings3.php">Settings</a> -->
                        <a class="dropdown-item" href="login1.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile3.php">My Profile3</a>
                    <!-- <a class="dropdown-item" href="edit-profile3.php">Edit Profile3</a>
                    <a class="dropdown-item" href="settings3.php">Settings</a> -->
                    <a class="dropdown-item" href="login1.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                        <li class="menu-title">Menu</li>
                        <li class="active">
                            <a href="nursedash.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>

                        <li>
                            <a href="doctors3.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li>
                            <a href="patients3.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="nurses3.php"><i class="fa fa-hospital-o"></i> <span>Nurses</span></a>
                        </li>

                        <li>
                            <a href="room3.php"><i class="fa fa-calendar"></i> <span>Rooms</span></a>
                        </li>
                        <li>
                            <a href="salary3.php"><i class="fa fa-book"></i> <span> Salary</span></a>
                        </li>
                        <!-- <li>
                            <a href="settings3.php"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li> -->

                    </ul>  
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Nurse's Salary</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table datatable mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Designation</th>
                                        <th>Salary per month</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1 </td>
                                        <td>
                                            <h2><a href="#">Nurse</a></h2>
                                        </td>

                                        <td>Rs. 10,0000</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets3/js/jquery-3.2.1.min.js"></script>
    <script src="assets3/js/popper.min.js"></script>
    <script src="assets3/js/bootstrap.min.js"></script>
    <script src="assets3/js/jquery.dataTables.min.js"></script>
    <script src="assets3/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets3/js/jquery.slimscroll.js"></script>
    <script src="assets3/js/app.js"></script>
</body>


<!-- payments23:25-->

</html>