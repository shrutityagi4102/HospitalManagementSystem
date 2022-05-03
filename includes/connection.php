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

// $server = "localhost";
// $uname = "root";
// $password = "";
// $dbname = "hospital_management";

$server = "remotemysql.com";
$uname = "S3zNYTFaEx";
$password = "rJ8V6qH95T";
$dbname = "S3zNYTFaEx";

$conn = mysqli_connect($server, $uname, $password, $dbname);

if (!$conn) {
    echo "Connection failed";
}

?>