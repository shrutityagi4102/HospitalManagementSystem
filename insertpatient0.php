<?php

include 'includes/connection.php';

if (isset($_POST['submit'])) 
{  
    if (!empty($_POST['name']) && !empty($_POST['gender']) && !empty($_POST['address']) && !empty($_POST['num']) && !empty($_POST['room_no']) && !empty($_POST['med_record']) && !empty($_POST['diagnosis']) && !empty($_POST['age']) && !empty($_POST['dept']) && !empty($_POST['status'])) 
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $num = $_POST['num'];
        $room_no = $_POST['room_no'];
        $med_record = $_POST['med_record'];
        $diagnosis = $_POST['diagnosis'];
        $age = $_POST['age'];
        $dept = $_POST['dept'];
        $status = $_POST['status'];

            $query = "insert into patient(name,gender,address,medical_record,contact_number,room_no,payment_status,department,diagnosis,age) values ('$name','$gender','$address','$med_record','$num','$room_no','$status','$dept','$diagnosis','$age')";

            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if ($run) {
                echo '<script>alert("Form submitted successfully")
                return True</script>';
                header("Location: patients0.php");
                exit();
            }
            else {
                echo '<script>alert("All fields required");
                return True</script>';
                header("Location: add-patient0.php");
                exit();
            }
    }
}

?>

