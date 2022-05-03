<?php 
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {

?>

<!DOCTYPE html>
<html lang="en">

<!-- index22:59-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets3/img/favicon.ico">
    <title>Nurse Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets3/css/bootstrap.min.css">
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
                        <span class="user-img">
							<img class="rounded-circle" src="assets3/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
                        </span>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
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
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>10</h3>
                                <span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>10</h3>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>10</h3>
                                <span class="widget-title3">Nurses <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>1</h3>
                                <span class="widget-title4">Admin <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline-block">Previous Patients Data </h4> 
                                <!-- <a href="patients3.php" class="btn btn-primary float-right">View all</a> -->
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table mb-0 new-patient-table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img width="28" height="28" class="rounded-circle" src="assets3/img/user.jpg" alt="">
                                                    <h2>Joey Tribbiani</h2>
                                                </td>
                                                <td>M</td>
                                                <td>1234567890</td>
                                                <td><button class="btn btn-primary btn-primary-one float-right">Cardiology</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="28" height="28" class="rounded-circle" src="assets3/img/user.jpg" alt="">
                                                    <h2>Phoebe Buffay</h2>
                                                </td>
                                                <td>F</td>
                                                <td>1234567890</td>
                                                <td><button class="btn btn-primary btn-primary-one float-right">Cardiology</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="28" height="28" class="rounded-circle" src="assets3/img/user.jpg" alt="">
                                                    <h2>Ross Geller</h2>
                                                </td>
                                                <td>M</td>
                                                <td>1234567890</td>
                                                <td><button class="btn btn-primary btn-primary-two float-right">ENT</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="28" height="28" class="rounded-circle" src="assets3/img/user.jpg" alt="">
                                                    <h2>Rachel Green</h2>
                                                </td>
                                                <td>F</td>
                                                <td>1234567890</td>
                                                <td><button class="btn btn-primary btn-primary-three float-right">Oncology</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="28" height="28" class="rounded-circle" src="assets3/img/user.jpg" alt="">
                                                    <h2>Chandler Bing</h2>
                                                </td>
                                                <td>M</td>
                                                <td>1234567890</td>
                                                <td><button class="btn btn-primary btn-primary-four float-right">ENT</button></td>
                                            </tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
                            <div class="card-header bg-white">
                                <h4 class="card-title mb-0">Departments</h4>
                            </div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <img src="assets3/img/cardio.png" alt="" class="w-40 rounded-circle">
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Cardiology</span>
                                                <span class="contact-date">Heart related diseases</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <img src="assets3/img/gyna.png" alt="" class="w-40 rounded-circle">
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name ext-ellipsis">Gyanecology</span>
                                                <br>
                                                <span class="contact-date">Pregnancy and Child Delivery</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <img src="assets3/img/gs.png" alt="" class="w-40 rounded-circle">
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">General Surgery</span>
                                                <span class="contact-date">Surgery of all kinds</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <img src="assets3/img/ent.png" alt="" class="w-40 rounded-circle">
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">ENT</span>
                                                <span class="contact-date">Eyes Nose and Throat</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <img src="assets3/img/can.png" alt="" class="w-40 rounded-circle">
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Oncology</span>
                                                <span class="contact-date">Cancer related treatment</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

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
    <script src="assets3/js/jquery.slimscroll.js"></script>
    <script src="assets3/js/Chart.bundle.js"></script>
    <script src="assets3/js/chart.js"></script>
    <script src="assets3/js/app.js"></script>

</body>

</html>

<?php 
}
else {
    header('Location: login1.php');
    exit();
}
?>