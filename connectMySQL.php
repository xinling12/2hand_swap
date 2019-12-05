<?php
class MySQLDatabase{
	public $link = null;
	function connect($servername, $username, $password, $dbname){
		$this->link = mysqli_connect($servername, $username, $password);
		if (!$this->link) {
    		die("Connection failed: " . mysqli_connect_error());
			} 
		//echo "Connected successfully/";
		$db = mysqli_select_db($this->link, $dbname);
		if (!$db){
			die ("Cannot use :" . $dbname);
		}
		//echo "DB Connected successfully";
		return $this->link;
	}

	function disconnect(){
		mysqli_close($this->link);
	}
}
?>