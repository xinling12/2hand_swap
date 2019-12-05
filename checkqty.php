<?php
include("dbconnect.php");
session_start();
$quantity = $_POST['quantity'];
$sql_cus="select email from view_pro_cus where pro_id =".$_SESSION['pro_id'].";";
$result = $conn->query($sql_cus);
while($row = mysqli_fetch_array($result)){
	$pro_email = $row['email'];
}
	if($_SESSION['email']==$pro_email){
		echo "<script>alert('Sorry, you cannot buy your own product.');</script>
			  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";

	}
	elseif ($quantity<1){
		echo "<script>alert('Quantity should not be less than 1.');</script>
			  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
	}
	elseif ($quantity>$_SESSION['stock']){
		echo "<script>alert('Excess inventory limit.');</script>
			  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
	}else{
		$sql_check_rep = "select stock from wishlist where email='".$_SESSION['email']."' and pro_id=".$_SESSION['pro_id'].";";
		$result1 = $conn->query($sql_check_rep);
		while($row = mysqli_fetch_array($result1)){
				$stock = $row['stock'];
			}
		if(isset($stock)){
				$total=$quantity+$stock;
				if($total>$_SESSION['stock']){
					echo "<script>alert('Sorry, you can\'t add product,excess inventory limit.');</script>
					  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
				}else{
					$sql_update_stk="update wishlist set stock=".$total." where email='".$_SESSION['email']."' and pro_id=".$_SESSION['pro_id'].";";
					if($conn->query($sql_update_stk)===True){
						echo "<script>alert('Product added successfully.');</script>
					  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
					}else{
						echo "<script>alert('Sorry,the product has not been added.Please try again.');</script>
					  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
					}
				}	
		}else{
			$sql = "insert into wishlist (email,pro_id,name,type,price,stock,special_point,img) values ('".$_SESSION['email']."','".$_SESSION['pro_id']."','".$_SESSION['proname']."','".$_SESSION['type']."','".$_SESSION['price']."','".$quantity."','".$_SESSION['spe_poi']."','".$_SESSION['img']."');";
			if($conn->query($sql)=== TRUE){
				echo "<script>alert('Product added successfully.');</script>
			  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
			}else{
				echo "<script>alert('Sorry,the product has not been added.Please try again.');</script>
			  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
			}
	
		}
	}
?>