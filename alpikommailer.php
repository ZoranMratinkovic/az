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
$gutschein=rand(10000000,900000000);

	$message = '
	<html>
	<body>
	<table>
	<tr><td>
	<p><b>Produkt:  <b/></td><td>'.$produkt22.'</p></td></tr><tr><td>
	<p><b>Name:  <b/></td><td>'.$name1.'</p></td></tr><tr><td>
	<p><b>Vorname:  <b/></td><td>'.$vorname.'</p></td></tr><tr><td>
	<p><b>Telefon:  <b/></td><td>'.$tel.'</p></td></tr><tr><td>
	<p><b>Adresse:  <b/></td><td>'.$postleitzahl.'</p></td></tr><tr><td>
	<p><b>Postleitzahl:  <b/></td><td>'.$kanton.'</p></td></tr><tr><td>
	<p><b>Anzahl:  <b/></td><td>'.$anzahl.'</p></td></tr>
	<tr><td>
	<p><b>Total Preis:  <b/></td><td>'.$price.'</p></td></tr>
	<p><b>Gutschein:  <b/></td><td>'.$gutschein.'</p></td></tr>


	</table>
	</body>
	</html>
	';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$headers .= 'to: '.$_REQUEST['email'] . "\r\n";
	$headers .= 'From: info <zoran3001@gmail.com>' . "\r\n";


	mail("zoran3001@gmail.com", "mysubject", $message, $headers);
	echo "<script>alert('ne radi');</script>";

	header("Location: cart/pay.php");


}

?>
