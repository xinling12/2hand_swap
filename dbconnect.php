<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2rd_hand";

include("connectMySQL.php");
$db = new MySQLDatabase();
$conn = $db->connect($servername,$username,$password,$dbname);
?>