<?php
session_start();
$email = "From:".$_SESSION['seller_email'];
$sender_email = $_SESSION['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
if($subject==""){
	echo "<script>alert('Subject cannot be empty.');</script>
		  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
}
else if($message==""){
	echo "<script>alert('Message cannot be empty.');</script>
		  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
}
else{
	$mail_result = mail($sender_email,$subject,$message,$email);
	if($mail_result){
		echo "<script>alert('Message has been sent successfully.');</script>
			  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
	}else{
		echo "<script>alert('Sorry, message has not been sent.');</script>
			  <script type=text/javascript>location.href = 'Single_Item.php?pro_id=".$_SESSION['pro_id']."';</script>";
	}
}