<?php 
	
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$emailaddress = $_POST["EmailAddress"];
	$phonenumber = $_POST["PhoneNumber"];
	$id = null;
	
	
	echo $firstname." ". $lastname ." ". $emailaddress." ". $phonenumber ;
	
	
	$connection = mysqli_connect("localhost", "root", "", "customers_appointment",);
	
	$SQL = "INSERT INTO appointment VALUE('$id', '$firstname', '$lastname', '$emailaddress', '$phonenumber' )";
	
	//$result = mysqli_query($connection, $SQL);
	
	//print_r($result); 
	
	
	if (mysqli_query($connection, $SQL)) {
		echo "new record created successfully";
	}else {
		echo "error: " . $SQL . "<br>" . mysqli_error($connection);
	}
//this function will direct the user to a particular page
header("Location:step_1.php");


?>