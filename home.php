<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="login2.css">
</head>

<body>
   <h1>Hello <?php echo $_SESSION['username']?></h1>
</body>

</html>

<?php 
}
else {
    header("Location: login2.php");
    exit();
}
?>