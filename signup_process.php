<?php
session_start();
include("dbconnect.php");
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

if($email==""){
		echo "<script>alert('Email cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'login_signup.html';</script>";
	}
else if($password==""){
		echo "<script>alert('Password cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'login_signup.html';</script>";
	}
else if($confirm_password==""){
		echo "<script>alert('Confirm password cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'login_signup.html';</script>";
	}
else{
	$sql = "select * from customer where email = ".$email.";";
	if (mysqli_query($conn,$sql)==False){
		if($password===$confirm_password){
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$sql_insert = "insert into customer (email,password) values ('".$email."','".$hash."');";
			if (mysqli_query($conn,$sql_insert)) {
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				echo "<script>alert('Registered successfully!');</script>
					  <script type=text/javascript>location.href = 'customerinfo.php';</script>";
			} else {
				echo "DB cannot be queried...";
			}
							
			}
		else{
				echo "<script>alert('Your confirmed password is different from your password.');</script>
					  <script type=text/javascript>location.href = 'login_signup.html';</script>";
				}
	} else {
		echo "<script>alert('The email has been registered.');</script>
					  <script type=text/javascript>location.href = 'login_signup.html';</script>";
		}
	}
?>
