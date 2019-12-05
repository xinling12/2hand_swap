<?php
session_start();
include("dbconnect.php");
$sql="select pro_id,count(email) as qty FROM wishlist where pro_id= ".$_SESSION['pro_id']." group by pro_id;";
$result=$conn->query($sql);
$a="";
while($row = mysqli_fetch_array($result)){
	$a=$row['qty'];
}
echo $a === "" ? "0 people have put it into wishlist" : $a." people have put it into wishlist";
?>