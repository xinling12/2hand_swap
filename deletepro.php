<?php
include("dbconnect.php");
$pro_id=$_GET['pro_id'];
$sql = "delete from product where pro_id = ".$pro_id.";";
if($conn->query($sql)===True){
	echo "<script>alert('Product has been deleted.');</script>
		  <script type=text/javascript>location.href = 'Myproduct.php';</script>";
}else{
	echo "<script>alert('Sorry,product has not been deleted, please try again.');</script>
		  <script type=text/javascript>location.href = 'Myproduct.php';</script>";
}
?>