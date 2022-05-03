<?php

include 'includes/connection.php';

if (isset($_POST['submit'])) 
{  
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['conpassword']) && !empty($_POST['gender']) && !empty($_POST['address']) && !empty($_POST['salary']) && !empty($_POST['shift']) && !empty($_POST['dept']) && !empty($_POST['num'])) 
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $shift = $_POST['shift'];
        $dept = $_POST['dept'];
        $num = $_POST['num'];

        if ($password === $conpassword) 
        {
            $query = "insert into nurse(name,gender,department,contact_number,salary,address,email,shift,password) values ('$name','$gender','$dept','$num','$salary','$address','$email','$shift','$password')";

            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if ($run) {
                echo '<script>alert("Form submitted successfully")
                return True</script>';
                header("Location: appointments0.php");
                exit();
            }
            else {
                echo '<script>alert("All fields required");
                return True</script>';
                header("Location: add-nurse0.php");
                exit();
            }
        }
    }
}

?>

