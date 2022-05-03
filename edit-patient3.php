<?php 
session_start();
include 'includes/connection.php';
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
        $_SESSION['id'] = $id;
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM doctor WHERE id=$id");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets3/img/favicon.ico">
    <title>Edit Patient</title>
    <link rel="stylesheet" type="text/css" href="assets3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/bootstrap-datetimepicker.min.css">
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
                <a href="admindash.php" class="logo">
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
                        <a class="dropdown-item" href="profile0.php">My Profile</a>
                        <a class="dropdown-item" href="login2.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile0.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile0.php">Edit Profile</a>
                    <a class="dropdown-item" href="settings0.php">Settings</a>
                    <a class="dropdown-item" href="login2.php">Logout</a>
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
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="updatepatient3.php" onsubmit="return display()">
                            <div class="row">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group gender-select">
                                        <label class="gen-label">Gender:</label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input">M
											</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input">F
											</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control " name="address">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Contact Number </label>
                                        <input class="form-control" type="text" name="num">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Room Number </label>
                                        <input class="form-control" type="text" name="room_no">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Previous Medical Record </label>
                                        <input class="form-control" type="text" name="record" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Current Diagnosis </label>
                                        <input class="form-control" type="text" name="diag">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Age </label>
                                        <input class="form-control" type="text" name="age">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select name="dept" class="form-control select">
                                            <option>Cardiology</option>
                                            <option>General Surgery</option>
                                            <option>Oncology</option>
                                            <option>Gynaecology</option>
                                            <option>ENT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Payment Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="patient_active" value="option1" checked>
                                    <label class="form-check-label" for="patient_active">
									Paid
									</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="patient_inactive" value="option2">
                                    <label class="form-check-label" for="patient_inactive">
									Pending
									</label>
                                </div>
                            </div>

                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" name="submit">Save Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function display() {
            alert("Entry was successfully edited");
            return True;
        }
    </script>

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets3/js/jquery-3.2.1.min.js"></script>
    <script src="assets3/js/popper.min.js"></script>
    <script src="assets3/js/bootstrap.min.js"></script>
    <script src="assets3/js/jquery.slimscroll.js"></script>
    <script src="assets3/js/select2.min.js"></script>
    <script src="assets3/js/moment.min.js"></script>
    <script src="assets3/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets3/js/app.js"></script>
</body>


<!-- edit-patient24:07-->

</html>