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
    $salary = $_POST['salary'];
    $shift = $_POST['shift'];
    $department = $_POST['dept'];
    $number = $_POST['num'];

	mysqli_query($conn, "UPDATE nurse SET name='$name', address='$address', email='$email', password='$password', gender='$gender', salary='$salary', shift='$shift', department='$department', contact_number='$number' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: appointments0.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM nurse WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: appointments0.php');
}
?>