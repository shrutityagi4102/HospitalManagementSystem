<?php
session_start();
include("includes/connection.php");
if(isset($_POST['submit']))
{
 $oldpass=md5($_POST['currentPassword']);
 $useremail=$_SESSION['login'];
 $newpassword=md5($_POST['newPassword']);
$sql=mysqli_query($conn,"SELECT password FROM login where password='$oldpass'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($conn,"update userinfo set password=' $newpassword' where email='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
header('location:admindash.php');
?>