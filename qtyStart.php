<?php
include("dbconnect.php");
$sql="select email,count(name) as qty FROM wishlist where email= '".$_SESSION['email']."' group by email;";
$result=$conn->query($sql);
$a="";
while($row = mysqli_fetch_array($result)){
	$a=$row['qty'];
}
echo $a === "" ? "(0)" : "(".$a.")";
?>