<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['password'])){
	header('Location:login_signup.html');
}
?>