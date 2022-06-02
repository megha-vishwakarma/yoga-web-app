<?php
	$name = $_POST['eventName'];
	$date = $_POST['when'];
	$location = $_POST['location'];
	$details = $_POST['discription'];

	
	// Database connection
	
	$conn = new mysqli('localhost','root','','yoga');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO `event`(`name`, `dNt`, `location`, `details`) VALUES  (?, ?, ?, ?)");
		$stmt->bind_param("ssss",$name ,$date,$location,$details);
		$execval = $stmt->execute();
		echo $execval;
		//echo "Registration successfully...";

		echo '<script>alert("Data inserted Successfully")</script>';

		$stmt->close();
		$conn->close();
	}
?>