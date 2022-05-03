<?php 
include 'includes/connection.php';

$db= $conn;
    $tableName = "nurse";
    $columns = ['id','name','gender','department','contact_number','salary','address','email','shift'];
    $fetchData = fetch_data($db, $tableName, $columns);
    function fetch_data($db, $tableName, $columns)
    {
        if(empty($db)) {
            $msg= "Database connection error";
        }
        elseif (empty($columns) || !is_array($columns)) {
            $msg="columns Name must be defined in an indexed array";
        }
        elseif(empty($tableName)) {
            $msg= "Table Name is empty";
        }
        else {
            $columnName = implode(", ", $columns);
            $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
            $result = $db->query($query);
            if($result== true)
            { 
                if ($result->num_rows > 0) {
                    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $msg= $row;
                } 
                else {
                    $msg= "No Data Found"; 
                }
            }
            else {
            $msg= mysqli_error($db);
            }
        }
            return $msg;
    }
?>

<!DOCTYPE html>
<html lang="en">


<!-- doctors23:12-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets3/img/f.png">
    <title>Nurses</title>
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
                        <a class="dropdown-item" href="profile0.php">My Profile</a>
                        <!-- <a class="dropdown-item" href="edit-profile0.php">Edit Profile</a>
                        <a class="dropdown-item" href="settings0.php">Settings</a> -->
                        <a class="dropdown-item" href="login2.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile0.php">My Profile</a>
                    <!-- <a class="dropdown-item" href="edit-profile0.php">Edit Profile</a>
                    <a class="dropdown-item" href="settings0.php">Settings</a> -->
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Nurses</h4>
                    </div>
                </div>

                <div class="container">
                <div class="row">
                <div class="col-sm-11">
                    <?php echo $deleteMsg??''; ?>
                    <div class="table-responsive">
                    <table class="table table-bordered w-auto">
                    <thead><tr><th>S.N</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Contact Number</th>
                        <th>Salary</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Shift</th>
                    </thead>
                    <tbody>
                <?php
                    if(is_array($fetchData)){      
                    $sn=1;
                    foreach($fetchData as $data){
                    ?>
                    <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $data['name']??''; ?></td>
                    <td><?php echo $data['gender']??''; ?></td>
                    <td><?php echo $data['department']??''; ?></td>
                    <td><?php echo $data['contact_number']??''; ?></td>
                    <td><?php echo $data['salary']??''; ?></td>
                    <td><?php echo $data['address']??''; ?></td> 
                    <td><?php echo $data['email']??''; ?></td>
                    <td><?php echo $data['shift']??''; ?></td>  
                    </tr>
                    <?php
                    $sn++;}}else{ ?>
                    <tr>
                        <td colspan="8">
                    <?php echo $fetchData; ?>
                </td>
                    <tr>
                    <?php
                    }?>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
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


<!-- doctors23:17-->

</html>