<?php 
session_start();
include 'includes/connection.php';
if (isset($_POST['submit'])) {
	// $id = $_POST['id'];
    $id = $_SESSION['id'];
	$name = $_POST['name'];
    $email = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
	$address = $_POST['address'];
    $designation = $_POST['des'];
    $salary = $_POST['salary'];
    $shift = $_POST['shift'];
    $department = $_POST['dept'];
    $number = $_POST['num'];

	mysqli_query($conn, "UPDATE doctor SET name='$name', address='$address', username='$email', password='$password', gender='$gender', designation='$designation', salary='$salary', shift='$shift', department='$department', contact_number='$number' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: admindash.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM doctor WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: doctors0.php');
}
?>