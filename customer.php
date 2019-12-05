<?php
include('iflogin.php');
include("dbconnect.php");
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$region = $_POST["postcode"];

if($firstname==""){
		echo "<script>alert('Firstname cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'User_Account.php';</script>";
	}
else if($lastname==""){
		echo "<script>alert('Lastname cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'User_Account.php';</script>";
	}
else if($dob==""){
		echo "<script>alert('Birthday cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'User_Account.php';</script>";
	}
else if($address==""){
		echo "<script>alert('Address cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'User_Account.php';</script>";
	}
else if($region==""){
		echo "<script>alert('Postcode cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'User_Account.php';</script>";
	}
else{
	$sql = "update customer set first_name = '".$firstname."', last_name = '".$lastname."', dob = '".$dob."', gender = '".$gender."', address = '".$address."', region='".$region."' where email = '".$email."';";
	if($conn->query($sql)){
		$_SESSION['name']=$firstname." ".$lastname;
		echo "<script>alert('Details has been uploaded successfully.');</script>
			  <script type=text/javascript>location.href = 'User_Account.php';</script>";
	}else{
		echo "<script>alert('Sorry,something wrong with DB,please try again.');</script>
			  <script type=text/javascript>location.href = 'User_Account.php';</script>";
	}
}
?>