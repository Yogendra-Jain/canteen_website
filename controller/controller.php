<?php
session_start();

include ("../config/config.php");

// Singup Here
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name = $_REQUEST['name'];
	$contact = $_REQUEST['contact'];
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];
	$cpass = $_REQUEST['cpass'];

	if(empty($name) || empty($contact) || empty($email) || empty($pass)) {
		echo "<script type/javascript'>alert('Please fill all details')</script>";
	}
	else {
		
					
		$query="INSERT INTO form (name, contact, email, pass) VALUES('$name', '$contact', '$email', '$pass')";
		mysqli_query($con,$query);
		echo "<script type/javascript'>alert('successfully Register')</script>";
				
	}

}
?>




