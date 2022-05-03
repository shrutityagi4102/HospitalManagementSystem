<?php

include 'includes/connection.php';

if (isset($_POST['submit'])) 
{  
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['conpassword']) && !empty($_POST['gender']) && !empty($_POST['address']) && !empty($_POST['des']) && !empty($_POST['salary']) && !empty($_POST['shift']) && !empty($_POST['dept']) && !empty($_POST['num'])) 
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $des = $_POST['des'];
        $salary = $_POST['salary'];
        $shift = $_POST['shift'];
        $dept = $_POST['dept'];
        $num = $_POST['num'];

        if ($password === $conpassword) 
        {
            $query = "insert into doctor(name,gender,department,designation,contact_number,salary,address,username,shift,password) values ('$name','$gender','$dept','$des','$num','$salary','$address','$email','$shift','$password')";

            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if ($run) {
                echo '<script>alert("Form submitted successfully")
                return True</script>';
                header("Location: doctors0.php");
                exit();
            }
            else {
                echo '<script>alert("All fields required");
                return True</script>';
                header("Location: add-doctor0.php");
                exit();
            }
        }
    }
}

?>

