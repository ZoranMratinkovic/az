<?php
ob_start();
$brojac = rand(1,1000)*100;
$brojac1 = rand(1,1000)*100;
if(isset($_REQUEST['bestel'])){

	$produkt22=$_REQUEST['produkt22'];
$name1=$_REQUEST['name1'];
$vorname=$_REQUEST['vorname'];
$tel=$_REQUEST['tel'];
$adress=$_REQUEST['adresse'];
$postleitzahl=$_REQUEST['postleitzahl'];
$kanton=$_REQUEST['kanton'];
$anzahl=$_POST['anzahl22'];
$price1=$_REQUEST['price22'];
$price=$price1*$anzahl;

	$message = '
	<html>
	<body>
	<table>
	<tr><td>
	<p><b>Produkt:  <b/></td><td>'.$produkt22.'</p></td></tr><tr><td>
	<p><b>Name:  <b/></td><td>'.$email.'</p></td></tr><tr><td>
	<p><b>Vorname:  <b/></td><td>'.$geburts.'</p></td></tr><tr><td>
	<p><b>Telefon:  <b/></td><td>'.$tel.'</p></td></tr><tr><td>
	<p><b>Adresse:  <b/></td><td>'.$postleitzahl.'</p></td></tr><tr><td>
	<p><b>Postleitzahl:  <b/></td><td>'.$kanton.'</p></td></tr><tr><td>
	<p><b>Anzahl:  <b/></td><td>'.$anzahl.'</p></td></tr>
	<tr><td>
	<p><b>Total Preis:  <b/></td><td>'.$price.'</p></td></tr>


	</table>
	</body>
	</html>
	';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$headers .= 'To: David <zoran.mratinkovic1@gmail.com>' . "\r\n";
	$headers .= 'From: '.$_REQUEST['email'] . "\r\n";


	mail("zoran.mratinkovic1@gmail.com", "mysubject", $message, $headers);
	echo "<script>alert('ne radi');</script>";
	header("Location: cart/pay.php");


}

?>
