<?php 
session_start();
include "includes/connection.php";
if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header('Location: login1.php?error = email is required');
        exit();
    }
    else if (empty($pass)) {
        header('Location: login1.php?error = password is required');
        exit();
    }
    else {
        $sql = "SELECT * FROM nurse WHERE email = '$email' AND password = '$pass' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // print_r($row);
            if ($row['email'] === $email && $row['password'] === $pass) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header('Location: nursedash.php');
                exit();
            }
            else {
                header('Location: login1.php?error=Incorrect username or password');
                exit();
            }
        }
        else {
            header('Location: login1.php?error=Incorrect username or password');
            exit();
        }
    }
}
else {
    header('Location: login1.php');
    exit();
}
?>