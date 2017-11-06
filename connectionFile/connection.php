<?php 
	$host = "localhost";
	$root = "root";
	$pass = "";
	$db = "webvi";
	$conn= mysqli_connect($host,$root,$pass,$db);
	if(!$conn){
		echo "Connection problem: " . mysqli_connect_errno();
	}

 ?>