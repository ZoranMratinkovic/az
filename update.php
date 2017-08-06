<?php 
	if(isset($_GET['id_productProd']) && !empty($_GET['id_productProd']))
	{

		$id_product = $_GET['id_productProd'];
		$one = 1;
		include("connectionFile/connection.php");
		$sql_query = "UPDATE product SET expired = ? WHERE id_product = ?";
		$Stmt = $conn->prepare($sql_query);
		$Stmt->bind_param("ii",$one,$id_product);
		$Stmt->execute();
		if($Stmt)
		{
			echo "Sve je u redu";
		}
		else
		{
			echo "nije dobro";
		}
	}
	else
	{
		header("Location :index.php?page=login");
	}
	$Stmt->close();
 ?>