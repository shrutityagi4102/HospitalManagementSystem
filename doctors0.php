<?php 
include 'includes/connection.php';

$db= $conn;
    $tableName = "doctor";
    $columns = ['id','name','gender','department','designation','contact_number','salary','address','username','shift'];
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

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets0/img/favicon.ico">
    <title>Doctors</title>
    <link rel="stylesheet" type="text/css" href="assets0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets0/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets0/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets0/css/style.css">
    <link rel="stylesheet" href="/assets0/fontawesome/all.min.css" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/4a3a9d18d6.js" crossorigin="anonymous"></script> -->
    <!--[if lt IE 9]>
		<script src="assets0/js/html5shiv.min.js"></script>
		<script src="assets0/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="admindash.php" class="logo">
                    <img src="assets0/img/logo.png" width="35" height="35" alt=""> <span>HMS</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets0/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile0.php">My Profile</a>
                        <a class="dropdown-item" href="edit-profile0.php?edit=<?php echo $data['id']; ?>">Edit Profile</a>
                        <a class="dropdown-item" href="settings0.php">Settings</a>
                        <a class="dropdown-item" href="login2.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile0.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile0.php?edit=<?php echo $data['id']; ?>">Edit Profile</a>
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
                        <li>
                            <a href="admindash.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="doctors0.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li>
                            <a href="patients0.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="appointments0.php"><i class="fa fa-hospital-o"></i> <span>Nurses</span></a>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="salary0.php"> Employee Salary </a></li>
                                <li><a href="salary-view0.php"> Patient Tariff </a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="settings0.php"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctors</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-doctor0.php" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
                    </div>
                </div>

                <div class="container">
                <div class="row">
                <div class="col-sm-12">
                    <?php echo $deleteMsg??''; ?>
                    <div class="table-responsive">
                    <table class="table table-bordered w-auto">
                    <thead><tr><th>S.N</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Salary</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>Shift</th>
                        <th>Edit</th>
                        <th>Delete</th>
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
                    <td><?php echo $data['designation']??''; ?></td>
                    <td><?php echo $data['salary']??''; ?></td>
                    <td><?php echo $data['contact_number']??''; ?></td>
                    <td><?php echo $data['address']??''; ?></td> 
                    <td><?php echo $data['shift']??''; ?></td>  
                    <td><a class="dropdown-item" href="edit-doctor0.php?edit=<?php echo $data['id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a></td>
                    <td>
                    <a href="updatedoc0.php?del=<?php echo $data['id']; ?>" data-dismiss="modal"><div class="m-t-20"><button type="submit" class="btn btn-danger">Delete</button></div></a>
                    </td>
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
                </div>

                <div id="delete_doctor" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Doctor?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets0/js/jquery-3.2.1.min.js"></script>
    <script src="assets0/js/popper.min.js"></script>
    <script src="assets0/js/bootstrap.min.js"></script>
    <script src="assets0/js/jquery.slimscroll.js"></script>
    <script src="assets0/js/select2.min.js"></script>
    <script src="assets0/js/moment.min.js"></script>
    <script src="assets0/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets0/js/app.js"></script>
</body>

</html>