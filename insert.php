<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $message = $_POST['message'];
   // $sql = "INSERT INTO contact (name,email,mobile) VALUES ('$name','$email','$mobile')";

$sql="INSERT INTO `contact` (`name`, `email`, `mobile`, `message`) VALUES ('$name', '$email','$mobile','$message')";


     if (mysqli_query($conn, $sql)) {
       // echo "alert('New record has been added successfully !')";
       echo '<script>alert("New record has been added successfully !")</script>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>