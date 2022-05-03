<?php 
session_start();
include "includes/connection.php";
if (isset($_POST['email']) && isset($_POST['password']) ) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header('Location: login3.php?error=email is required');
        exit();
    }
    else if (empty($pass)) {
        header('Location: login3.php?error=password is required');
        exit();
    }
    else 
    {
        $sql = "SELECT * from doctor where username = '$email' AND password = '$pass' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $email && $row['password'] === $pass) {
                // echo "Logged in";
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header('Location: docdash.php');
                exit();
            }
            else {
                header('Location: login3.php?error=Incorrect username or password');
                exit();
            }
        }
        else {
            header('Location: login3.php?error=Incorrect username or password');
            exit();
        }
    }
}
else {
    header('Location: login3.php');
    exit();
}
?>