<?php
// function OpenCon()
//  {
//  $dbhost = "localhost";
//  $dbuser = "root";
//  $dbpass = "";
//  $db = "hospital_management";
//  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
//  return $conn;
//  }
 
// function CloseCon($conn)
//  {
//  $conn -> close();
//  }

$server = "localhost";
$uname = "root";
$password = "";
$dbname = "hospital_management";

$conn = mysqli_connect($server, $uname, $password, $dbname);

if (!$conn) {
    echo "Connection failed";
}



// $server = "localhost";
// $username = "root";
// $password = "";
// $db = "faculty_portal";

// $conn = mysqli_connect($server, $username, $password, $db);

// $connect = new PDO("mysql:host=localhost;dbname=faculty_portal", "root", "");

// if (!$conn) {
// 	die("Connection failed" . mysqli_connect_error());
// }
?>