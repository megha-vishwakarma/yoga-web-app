<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sys";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);
if(mysqli_connect_errno())
{     echo 'Failed to connect to database'.mysqli_connect_error();
}
?>