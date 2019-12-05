<?php
session_start();
include("dbconnect.php");
$username = $_POST["username"];
$password = $_POST["password"];

if($username==""){
	echo "<script>alert('Email cannot be empty.');</script>
		  <script type=text/javascript>location.href = 'login_signup.html';</script>";
}
else if($password==""){
	echo "<script>alert('Password cannot be empty.');</script>
		  <script type=text/javascript>location.href = 'login_signup.html';</script>";
}
else {
	$sql = "select * from customer where email='".$username."';";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	if ($num!=0) {
		while($row = mysqli_fetch_array($result)){
			$firstname = $row['first_name'];
			$lastname =  $row['last_name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $password;
			$_SESSION['name'] = $firstname." ".$lastname;
			$hash = $row['password'];
			if (password_verify($password,$hash)) {
				echo "<script type=text/javascript>location.href = 'index.php';</script>";
			}else{
				echo "<script>alert('Your email or password does\'t exist or is wrong.');</script>
			  		  <script type=text/javascript>location.href = 'login_signup.html';</script>";
				}
		}
	}else{
		echo "<script>alert('Your email or password does\'t exist or is wrong.');</script>
			  <script type=text/javascript>location.href = 'login_signup.html';</script>";
		}
}
?>