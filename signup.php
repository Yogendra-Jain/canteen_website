<?php
session_start();

include ("db.php");

// Singup Here
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

	if(empty($name) || empty($contact) || empty($email) || empty($pass)) {
		echo "<script type/javascript'>alert('Please fill all details')</script>";
	}  
    else if ($pass != $cpass) {
        echo "<script type='text/javascript'>alert('Passwords do not match')</script>";
    }
	else {
		
					
		$query="insert into form ( name ,contact, email, pass) values ('$name', '$contact', '$email', '$pass')";
		mysqli_query($con,$query);
		echo "<script type/javascript'>alert('successfully Register')</script>";
				
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="signup.css">
	
</head>
<body>
    <div class="container">
        <form method="post" >
        <div class="row p-5">
            <div class="col-md-6 offset-3">
                <h1 class="signin-title">Sign Up Here</h3>
    
                <div class="form-group mb-3">
                    <label>Full Name <span class="required">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
    
                <div class="form-group mb-3">
                    <label>Contact Number <span class="required">*</span></label>
                    <input type="text" name="contact" class="form-control" placeholder="Contact Number">
                </div>
    
                <div class="form-group mb-3">
                    <label>Email <span class="required">*</span></label>
                    <input type="text" name="email" class="form-control" placeholder="Enter email id">
                </div>
    
                <div class="form-group mb-3">
                    <label>Password <span class="required">*</span></label>
                    <input type="password" name="pass" class="form-control" placeholder="*********">
                </div>
    
                <div class="form-group mb-3">
                    <label>Confirm Password <span class="required">*</span></label>
                    <input type="password" name="cpass" class="form-control" placeholder="Confirm Password">
                </div>
    
                <div class="form-group mb-5">
                    <button class="btn btn-success btn-md w-100" type="submit" name="singup">Sign Up</button>
                    
    
                </div>
                <p>Already have an account?<a href="login.php">Log In here</a>
            </div>
        </div>
    </form>
    </div>
    
</body>
</html>