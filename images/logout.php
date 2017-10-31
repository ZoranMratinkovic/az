<?php 
	session_start();
	ob_start();
	if (isset($_SESSION['name']) && isset($_SESSION['last_name']))
	{
		unset($_SESSION['name']);
		unset($_SESSION['email']);
		unset($_SESSION['last_name']);
		unset($_SESSION['id_user']);
		header("Location: index.php");
	}
	else
	{
		header("Location: index.php?page=login");
	}
 ?>