<?php 
	if(isset($_GET['id_productProd']) && !empty($_GET['id_productProd']))
	{

		$id_productt = $_GET['id_productProd'];
	}
	else if(isset($_GET['id_productProd1']) && !empty($_GET['id_productProd1']))
	{
		$id_productt = $_GET['id_productProd1'];
	}
	else if(isset($_GET['id_productProd2']) && !empty($_GET['id_productProd2']))
	{
		$id_productt = $_GET['id_productProd2'];
	}
	else if(isset($_GET['id_productProd3']) && !empty($_GET['id_productProd3']))
	{
		$id_productt = $_GET['id_productProd3'];
	}
	else
	{
		header("Location :index.php");
	}
	    $one = 1;
		include("connectionFile/connection.php");
		$sql_query = "UPDATE product SET expired = ? WHERE id_product = ?";
		$Stmt = $conn->prepare($sql_query);
		$Stmt->bind_param("ii",$one,$id_productt);
		$Stmt->execute();
		if($Stmt)
		{
			echo "Sve je u redu";
		}
		else
		{
			echo "nije dobro";
		}
	$Stmt->close();
 ?>