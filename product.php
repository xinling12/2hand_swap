<?php
include("iflogin.php");
include("dbconnect.php");
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$pro_name = $_POST["pro_name"];
$type = $_POST["type"];
$price = $_POST["price"];
$description = $_POST["description"];
$stock = $_POST["stock"];

if($pro_name==""){
		echo "<script>alert('Product Name cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'Myproduct.php';</script>";
	}
else if($type==""){
		echo "<script>alert('Type cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'Myproduct.php';</script>";
	}
else if($price==""){
		echo "<script>alert('Price cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'Myproduct.php';</script>";
	}
else if($description==""){
		echo "<script>alert('Description cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'Myproduct.php';</script>";
	}
else if($stock==""){
		echo "<script>alert('Stock cannot be empty.');</script>
			  <script type=text/javascript>location.href = 'Myproduct.php';</script>";
	}
else{
	$sql_select = "select * from customer where email = '".$email."'";
	$result_cus_id = $conn->query($sql_select);
	while($row = mysqli_fetch_array($result_cus_id)){
		$cus_id = $row['cus_id'];
		$firstname = $row['first_name'];
		$lastname = $row['last_name'];
		$_SESSION['name']=$firstname." ".$lastname;
		$_SESSION['cus_id'] = $cus_id;
	};
	$sql = "insert into product (cus_id,name,type,price,stock,special_point) values ('".$cus_id."','".$pro_name."','".$type."','".$price."','".$stock."','".$description."');";
	if($conn->query($sql)){			
		$sql_find_id = "select * from product where cus_id='".$cus_id."' and name='".$pro_name."' and type='".$type."';";
		$result_pro_id = $conn->query($sql_find_id);
		while($row = mysqli_fetch_array($result_pro_id)){
			$pro_id = $row['pro_id'];
			$_SESSION['pro_id']=$pro_id;
		};
		echo "<script>alert('Details has been uploaded successfully.');</script>
			  <script type=text/javascript>location.href = 'Myproduct.php';</script>";
	}else{
		echo "<script>alert('Sorry,something wrong with DB,please try again.');</script>
			  <script type=text/javascript>location.href = 'Myproduct.php';</script>";
	}
}
?>