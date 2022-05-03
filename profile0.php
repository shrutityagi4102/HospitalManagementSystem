<?php 
include 'includes/connection.php';

$db= $conn;
    $tableName = "login";
    $columns = ['id','username','password','name'];
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
    <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="assets0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets0/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets0/js/html5shiv.min.js"></script>
		<script src="assets0/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="admindash.html" class="logo">
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
                    <?php
                        if(is_array($fetchData)){      
                        $sn=1;
                        foreach($fetchData as $data){
                    ?>
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
            <?php $sn++;}}else{ echo $fetchData; }?>
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
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>


                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="assets0/img/user.jpg" alt=""></a>
                                    </div>
                                </div>

                                <?php
                                if(is_array($fetchData)){      
                                $sn=1;
                                foreach($fetchData as $data){
                                ?>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <!-- <?php echo $sn; ?> -->
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $data['name']??''; ?></h3>
                                                <small class="text-muted">Admin</small>
                                                <div class="staff-id">Employee ID : 1</div>
                                                <!-- <div class="staff-msg"><a href="edit-profile.html" class="btn btn-primary">Edit Profile</a></div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text">1234567890</span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><?php echo $data['username']??''; ?></span>
                                                </li>

                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">4th st, 5th ave</span>
                                                </li>
                                                <li>
                                                    <span class="title">Role:</span>
                                                    <span class="text">Responsible for maintaining the hospital management system</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $sn++;}}else{ echo $fetchData; }?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="notification-box">
            <div class="msg-sidebar notifications msg-noti">
                <div class="topnav-dropdown-header">
                    <span>Messages</span>
                </div>
                <div class="drop-scroll msg-list-scroll" id="msg_list">
                    <ul class="list-box">
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">R</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Richard Miles </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item new-message">
                                    <div class="list-left">
                                        <span class="avatar">J</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">John Doe</span>
                                        <span class="message-time">1 Aug</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">T</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Tarah Shropshire </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">M</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Mike Litorus</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">C</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Catherine Manseau </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">D</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Domenic Houston </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">B</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Buster Wigton </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">R</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Rolland Webber </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">C</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Claire Mapes </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">M</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Melita Faucher</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">J</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Jeffery Lalor</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">L</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Loren Gatlin</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">T</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Tarah Shropshire</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="chat.html">See all messages</a>
                </div>
            </div>
        </div> -->
    </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets0/js/jquery-3.2.1.min.js"></script>
    <script src="assets0/js/popper.min.js"></script>
    <script src="assets0/js/bootstrap.min.js"></script>
    <script src="assets0/js/jquery.slimscroll.js"></script>
    <script src="assets0/js/app.js"></script>
</body>

</html>