<?php 
session_start();
include 'includes/connection.php';
if (isset($_POST['submit'])) {
	// $id = $_POST['id'];
    $id = $_SESSION['id'];
	$name = $_POST['name'];
    $email = $_POST['username'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $number = $_POST['num'];

	mysqli_query($conn, "UPDATE login SET name='$name', username='$email' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: admindash.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM login WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: admindash.php');
}
?>