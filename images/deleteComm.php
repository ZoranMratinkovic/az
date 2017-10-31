<?php 	

	session_start();
	ob_start();
	if(isset($_SESSION['email']) && $_SESSION['id_role']==1 && isset($_GET['id_kom']))
	{
		$id_comment = $_GET['id_kom'];
		include('connectionFile/connection.php');
		$sql = "DELETE FROM commentar WHERE id_com=?";
		$stmtDel = $conn->prepare($sql);
		$stmtDel->bind_param('i',$id_comment);
		$stmtDel->execute();
		if($stmtDel)
		{
			header("Location: index.php");
		}
		else
		{
			header("Location: index.php?page=login");
		}
	}
	else
	{
		header("Location: index.php?page=login");
	}
 ?>