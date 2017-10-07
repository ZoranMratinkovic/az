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
								echo "<div class='kolone col-lg-12 col-sm-12 col-xs-12 komentar_i_ime'>";
								echo "<div class='description row'>";
								echo "<span class='pull-right color col-xs-4 col-lg-2'><i>".date('M d, H:i',$row['date'])."</i></span>";
								if(isset($_SESSION['email']) && $_SESSION['id_role'] == 1)
								{
									echo "
									<p class='col-xs-8 col-lg-10'>
										<b class='pull-left'><i class='fa fa-user ml' aria-hidden='true'></i>".$row['name']." ".$row['last_name']."<a href='deleteComm.php?id={$row['id_product']}&id_kom={$row['id_com']}' title='Obrisi komentar'> X</a>
										</b>
									</p>";
								}
								else
								{
								  echo "<p class='col-xs-8'>
											<b class='pull-left'><i class='fa fa-user ml' aria-hidden='true'></i>".$row['name']." ".$row['last_name']." </b>
										</p>";
								}

								echo "<p class='col-xs-12 cntr'><i class='pull-left'> ".$row['comment']."</i></p></div></div>";
//odvojeno ovde ide odgovor admina

					if($row['odgovor']=='')
					{
						//something
					}
					else {
								echo "<div class='kolone col-lg-10 col-sm-12 col-xs-12 komentar_i_ime pull-right '>";

								echo "<div class='description row color1'>";
								echo "<span class='pull-right color col-xs-4 col-lg-2'><i>".date('M d, H:i',$row['date'])."</i></span>";
								if(isset($_SESSION['email']) && $_SESSION['id_role'] == 1)
								{
									echo "
									<p class='col-xs-8 col-lg-10'>
										<b class='pull-left'><i class='fa fa-user ml' aria-hidden='true'></i>Admin<a href='deleteComm.php?id={$row['id_product']}&id_kom={$row['id_com']}' title='Obrisi komentar'> X</a>
										</b>
									</p>";
								}
								else
								{
								  echo "<p class='col-xs-8'>
											<b class='pull-left'><i class='fa fa-user ml' aria-hidden='true'></i>Admin </b>
										</p>";
								}

								echo "<p class='col-xs-12 cntr'><i class='pull-left'> ".$row['odgovor']."</i></p></div></div>";


}
							}
									echo "<div class='clear'></div>";
							if(isset($_SESSION['email']))
							{//if the user is logged in

								echo "<form method='post' action='#' onSubmit='return comment();'><textarea class='col-lg-12' name='taComment' placeholder='Add a public comment...' id='textArea' rows='4'></textarea>";
								echo "<input type='submit' class='btn btn-lg' name='commentSubmit' id='commentSubmit' value='Comment'/>";
								echo "<input type='button' class='btn btn-lg' name='commentCancel' id='commentCancel' value='Cancel'/></form>";
								echo "<span class='errorC' id='comErr'>Morate uneti nesto!</span>";

							}
							else
							{
								echo "<div class='col-xs-12'> <a href='index.php?page=login'>Login in order to comment</a></div>";
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

				$upisC = "INSERT INTO commentar VALUES(?,?,?,?,?,?)";
				$id_com = "";
				$comment = $_POST['taComment'];
			    $datum_objave = time();
			    $id_prodC = $id;
			    $id_userC = $_SESSION['id_user'];
					$prazna='';

			    $stmtC = $conn->prepare($upisC);
			    $stmtC->bind_param('isiiis',$id_com,$comment,$datum_objave,$id_userC,$id_prodC,$prazna);
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

function select_color($id_pr)
{
	include("connectionFile/connection.php");
	$selectQ = "SELECT * FROM color c INNER JOIN colorProduct cp on c.id_color=cp.id_color INNER JOIN product p on p.id_product = cp.id_product WHERE p.id_product =?";
	$stmtQ = $conn->prepare($selectQ);
	$stmtQ -> bind_param('i',$id_pr);
	$stmtQ->execute();
	echo "<select name='ddlFarbe' class='form-control' id='selectQ'>
	<option value='0'>Deal</option>";
	if($stmtQ)
	{
		if($rez = $stmtQ->get_result())
		{
			while($row = $rez->fetch_assoc())
			{
				echo "<option value='{$row['id_color']}'>{$row['color_name']}</option>";
			}
			echo "</select>";
		}
	}
	else
	{
		echo "<option value='noFarbe'>No Farbe</option></select>";
	}
}



 ?>
