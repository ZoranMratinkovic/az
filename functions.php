<?php 
	function commentsShow($ida)
	{
					

					include('connectionFile/connection.php');
					$kom = "SELECT * FROM commentar com INNER JOIN product p on com.id_product=p.id_product INNER JOIN user u on com.id_user=u.id_user WHERE com.id_product=? ORDER BY date DESC";
					$id=2;
					$stmt = $conn->prepare($kom);
					$stmt->bind_param('i',$ida);
					$stmt->execute();
					if($stmt)
					{

						if($rez= $stmt->get_result())
						{

						
					 
							while($row = $rez->fetch_assoc())
							{
								echo "<div class='kolone col-lg-12 col-sm-10 col-xs-10 komentar_i_ime'>";
								echo "<div class='description col-xs-12'>";
								echo "<span class='pull-right color col-xs-3'><i>".date('F d, Y h:i',$row['date'])."</i></span>";
								if(isset($_SESSION['email']) && $_SESSION['id_role']==1)
								{
									echo "
									<p class='col-xs-9'>
										<b class='pull-left'><i class='fa fa-user ml' aria-hidden='true'></i>".$row['name']." ".$row['last_name']."<a href='deleteComm.php?id={$row['id_product']}&id_kom={$row['id_com']}' title='Obrisi komentar'> X</a>
										</b>
									</p>";
								}
								else
								{
								  echo "<p class='col-xs-9'>
											<b class='pull-left'><i class='fa fa-user ml' aria-hidden='true'></i>".$row['name']." ".$row['last_name']." </b>
										</p>";
								}

								echo "<p class='col-xs-12'><i class='pull-left'> ".$row['comment']."</i></p></div></div>"; 
			
							}

							if(isset($_SESSION['email'])){//if the user is logged in

								echo "<form method='post' action='#' onSubmit='return comment();'><textarea class='col-lg-12' name='taComment' placeholder='Add a public comment...' id='textArea' rows='4'></textarea>";
								echo "<input type='submit' class='btn btn-lg' name='commentSubmit' id='commentSubmit' value='Comment'/>";
								echo "<input type='button' class='btn btn-lg' name='commentCancel' id='commentCancel' value='Cancel'/></form>";
								echo "<span class='errorC' id='comErr'>Morate uneti nesto!</span>";
							
							}
							else
							{
								echo "<a href='index.php?page=login'>Login in order to comment</a>";
							}
						
						}
						else
						{
							echo "no results";
						}

					}
		
		}


function commentsInsert($id)
{
		
			if(isset($_POST['taComment']) && $_POST['taComment'] !== "")
			{
				
				
				include('connectionFile/connection.php');
							
				$upisC = "INSERT INTO commentar VALUES(?,?,?,?,?)";
				$id_com = "";
				$comment = $_POST['taComment'];
			    $datum_objave = time();
			    $id_prodC = $id;
			    $id_userC = $_SESSION['id_user'];
			    
			    $stmtC = $conn->prepare($upisC);
			    $stmtC->bind_param('isiii',$id_com,$comment,$datum_objave,$id_userC,$id_prodC);
			    $stmtC->execute();
			    if($stmtC)
			    {
			    	echo "<script>window.location.href=index.php</script>";
			    }
			    else
			    {
			    	echo "<script>window.location.href=index.php</script>";
			    }

			}

			else
			{
				echo "<script>alert('Morate unesti nesto');</script>";
			}
}


 ?>