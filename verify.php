<?php 
	
	function test_input($data)
    {
 		  $data = trim($data);
          $data = stripcslashes($data);
          $data = htmlspecialchars($data);
          return $data;
    }
	
	if(isset($_GET['hash']) && !empty($_GET['hash']) && isset($_GET['email']) && !empty($_GET['email']))
	{
		$get_hash = test_input(($_GET['hash']));
		$get_email = test_input(($_GET['email']));
		include("connectionFile/connection.php");
		$stmt = $conn -> prepare("UPDATE user SET status_verif=1 WHERE email=? AND hash_verif=?");
		$stmt -> bind_param("ss",$get_email,$get_hash);
		$stmt -> execute();
		if($stmt)
		{
			header("Location: index.php?page=login");
		}
		else
		{
			header("Location: index.php?page=registration");
		}
		$stmt->close();
		mysqli_close($conn);
	}
 ?>