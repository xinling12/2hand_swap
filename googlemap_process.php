<?php
session_start();
	include("dbconnect.php");
	$username = $_SESSION['email'];
	$sql = "select * from view_pro_address where pro_id='".$_SESSION['pro_id']."';";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	if ($num != 0) {
	} else {
		echo "<script>alert('Your email or password doesn't exist or is wrong...');</script>";
		echo "<script type=text/javascript>location.href = 'login_signup.html';</script>";
	}
	while($row = mysqli_fetch_array($result)){
		$address = $row['address'];
		$region = $row['region'];
		$_SESSION['address']=$address;
		$_SESSION['region'] =$region;
	}
	echo str_replace(" ", " +", $_SESSION['address']." ".$_SESSION['region']);
	return str_replace(" ", " +", $_SESSION['address']." ".$_SESSION['region']);
	$db->disconnect();
?>