<?php
include 'includes/connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>