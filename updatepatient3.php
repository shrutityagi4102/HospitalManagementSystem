<?php 
session_start();
include 'includes/connection.php';
if (isset($_POST['submit'])) {
	// $id = $_POST['id'];
    $id = $_SESSION['id'];
	$name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact_number = $_POST['num'];
    $room_no = $_POST['room_no'];
    $record = $_POST['record'];
    $diag = $_POST['diag'];
    $age = $_POST['age'];
    $dept = $_POST['dept'];
    $status = $_POST['status'];

	mysqli_query($conn, "UPDATE patient SET name='$name', address='$address', gender='$gender', medical_record='$record', contact_number='$contact_number', room_no='$room_no', payment_status='$status', department='$dept', diagnosis='$diag', age='$age' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: patients3.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM patient WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: patients3.php');
}
?>