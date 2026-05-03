<?php
    session_start();

    include("db.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$email = $_POST['email'];
$pass = $_POST['pass'];

if(!empty($email) && !empty($pass) && !is_numeric($email)) {

    $query = "select * from form where email = '$email' limit 1";
    $result = mysqli_query($con, $query);

    if($result) {
        if($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);

            if($user_data['pass'] == $pass) {
                header("location: index.php");
                die;
            }
        }
    }
    echo "<script type='text/javascript'>alert('Wrong username or Passwords ')</script>";
}
else{
    echo "<script type='text/javascript'>alert('Wrong username or Passwords ')</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
	
</head>
<body>
    
    <div class="container">
        <form method="post" >
        <div class="login row  p-5">
            <div class=" col-md-6 offset-3">
                <h3 class="signin-title">Log In</h3>
                <div class="form-group mb-3">
                    <label>Email <span class="required">*</span></label>
                    <input type="text" name="email" class="form-control" placeholder="Enter email id">
                </div>
    
                <div class="form-group mb-3">
                    <label>Password <span class="required">*</span></label>
                    <input type="password" name="pass" class="form-control" placeholder="*********">
                </div>
    
                <div class="form-group mb-5">
                    <button class="btn btn-success btn-md w-100" onclick="window.location.href='index.php';"  name="signin" >Log In</button>
			</div>
                <div>
                <p>Don't have an account? <a href="signup.php">Sign Up here</a></p>
            </div>
        </div>
        </form>
    </div>
</body>
</html>