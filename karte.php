<form METHOD="post" action="https://e-payment.postfinance.ch/ncol/test/orderstandard.asp" id="form1" name="paymentform">
<?php
      if(isset($_GET['id1']))
      {

        include("connectionFile/connection.php");

        $id_pro = $_GET['id1'];
        $prikaz = "SELECT * FROM product p INNER JOIN categorie c on p.id_cat = c.id_cat WHERE p.id_product = ?";
        $stmtPr = $conn->prepare($prikaz);
        $stmtPr -> bind_param('i',$id_pro);
        $stmtPr -> execute();

        if($stmtPr)
        {
            if($rez= $stmtPr->get_result())
            {
              while($row = $rez->fetch_assoc())
              {
                 $id_prod = $row['id_product'];
                 $date_pro = $row['expire_date'];
                 $timestamp_pro = strtotime($date_pro);
                 $name_cat_pro = $row['categorie'];
                 $name_pro = $row['product_name'];
                 $ammount_pro = $row['amount'];
                 $old_price_pro = $row['price_old'];
                 $new_price_pro = $row['price_new'];
                 $lieferkosten1=$row['lieferkosten'];
                 $description_pro = $row['description'];
                 $pic_pro = $row['pictures_slider'];
                 $pic_pro1 =$row['bild2'];
                 $pic_pro2 =$row['bild3'];
                 $id_product_pro = $row['id_product'];
                 $text = explode(';',$row['text']);
                 $heading = explode(';',$row['headings']);
                 $descs = explode(';',$row['descs']);
                 $headings_descs = explode(';',$row['heading_descs']);
                 $big_desc = $row['big_desc'];
                 echo "<script>
                          var bgimage_pro ='{$row['pictures_slider']}';
                          var name_cat_pro = '{$name_cat_pro}';

                          var tmp = ".$timestamp_pro.";

                      </script>";
              }
            }
        }
      }
 ?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Produkt</th>
							<th style="width:10%">Preis</th>
							<th style="width:8%">Anzahl</th>
							<th style="width:22%" class="text-center">Total</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="<?php echo $pic_pro; ?>" alt="..." class="img-responsive productKarte" height='50'/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo  $name_pro; ?></h4>
										<p><?php echo  $description_pro; ?></p>
									</div>
								</div>
							</td>
							<td data-th="Price" id='tab'><?php echo $new_price_pro ?> CHF</td>
							<td data-th="Quantity">
								<input type="number" name="anz" class="form-control text-center" value="<?php echo $_POST['nmbr']; ?>">
							</td>
							<td data-th="Subtotal" name="anzahl" id="anzahl" class="text-center"><?php echo $new_price_pro*$_POST['nmbr']; ?>CHF</td>
							<td class="actions" data-th="">

							</td>
						</tr>

					</tbody>

				</table>
</div>
  <div class="container">
    <div class="col-sm-2 col-xs-2 col-lg-2">
    </div>
<div class="col-sm-8 col-xs-8 col-lg-8">

<br/>


                    <?php            $upitchange="SELECT * FROM user where id_user=".$_SESSION['id_user'];
                                $result111 = $conn->query($upitchange)or die("bat upit");
                                $r1=mysqli_fetch_array($result111); ?>
<div class="form-group">

  <input type="hidden" class="form-control" id="pwd" placeholder="stücke"  name="produkt22" value="<?php echo  $name_pro; ?>" >
</div>
<div class="form-group">

  <input type="hidden" class="form-control" id="pwd" placeholder="stücke"  name="anzahl22" value="<?php echo $_POST['nmbr']; ?>" >
</div>
<div class="form-group">

  <input type="hidden" class="form-control" id="pwd" placeholder="stücke"  name="price22" value="<?php echo $new_price_pro ?>" >
</div>
<div class="form-group">

  <input type="hidden" class="form-control" id="pwd" placeholder="stücke"  name="email" value="<?php echo  $_SESSION['email']; ?>" >
</div>
<div class="form-group">
  <label for="pwd">Name</label>
  <input type="text" class="form-control" id="pwd" placeholder="Name" name="name1" value='<?php echo $r1['name'];?>' required>
</div>
<div class="form-group">
  <label for="pwd">Vorname </label>
  <input type="text" class="form-control" id="pwd" placeholder="Vorname" name="vorname" value='<?php echo $r1['last_name'];?>' required>
</div>
<div class="form-group">
  <label for="pwd">Telefon</label>
  <input type="text" class="form-control" id="pwd" placeholder="tel" name="tel" value='<?php echo $r1['telefon'];?>' required>
</div>
<div class="form-group">
  <label for="pwd">Adresse</label>
  <input type="text" class="form-control" id="pwd" placeholder="adresse" name="adresse" value='<?php echo $r1['strasse'];?>' required>
</div>
<div class="form-group">
  <label for="pwd">Postleitzahl</label>
  <input type="text" class="form-control" id="pwd" placeholder="postleitzahl" name="postleitzahl" value='<?php echo $r1['platz'];?>' required>
</div>

<div class="form-group">
  <input type="checkbox" name="" value="" required>  Ich habe die <a href="index.php?page=fragen" target="_blank">AGBs</a> gelesen und bin einverstanden
</div>
<div class="form-group">
  <a href="cart/pay.php"><input type="submit" class="btn-sm" name="bestel" value="Jetzt Bestellen"></a>
</div>
<?php 
/*
Forma payment begins
 */
$amm = $new_price_pro*$_POST['nmbr'];
$data = "ZoranMratinkovic-3001";
$string = "AMOUNT=1500Mysecretsig1875!?CURRENCY=CHFMysecretsig1875!?LANGUAGE=de_DEMysecretsig1875!?
ORDERID=1234Mysecretsig1875!?PSPID=MyPSPIDMysecretsig1875!?";
$hashed = hash('sha1',$string);
echo $hashed;
 ?> 
 <input type="hidden" name="PSPID" value="deinbernTEST">
<input type="hidden" name="ORDERID" value="1234">
<input type="hidden" name="AMOUNT" value="1500">
<input type="hidden" name="CURRENCY" value="CHF">
<input type="hidden" name="LANGUAGE" value="de_DE">

<!-- layout information -->
<input type="hidden" name="TITLE" value="title to be displayed on the postfinance site">
<input type="hidden" name="BGCOLOR" value="#ffffff">
<input type="hidden" name="TXTCOLOR" value="#000000">
<input type="hidden" name="FONTTYPE" value="Arial">

<!-- post-payment redirection -->
<input type="hidden" name="ACCEPTURL" value="on succesful payment, where to redirect the buyer?">
<input type="hidden" name="DECLINEURL" value="https://deinbern.ch">
<input type="hidden" name="EXCEPTIONURL" value="on exception/error, where to redirect the buyer?">
<input type="hidden" name="CANCELURL" value="if the buyer cancels, where to redirect the buyer?">
<input type="hidden" name="BACKURL" value="if the buyer hits the back button in the form, where to redirect the buyer?">
<!-- miscellanous -->
<input type="hidden" name="HOMEURL" value="">
<input type="hidden" name="CATALOGURL" value="">
<input type="hidden" name="CN" value="the buyers full name">
<input type="hidden" name="EMAIL" value="the buyers email">
<input type="hidden" name="PM" value="">
<input type="hidden" name="BRAND" value="">
<input type="hidden" name="OWNERZIP" value="">
<input type="hidden" name="OWNERADDRESS" value="">
<input type="hidden" name="OWNERADDRESS2" value="">
<input type="hidden" name="SHASIGN" value="<?php echo $hashed; ?>">
<input type="hidden" name="ALIAS" value="">
<input type="hidden" name="ALIASUSAGE" value="">
<input type="hidden" name="ALIASOPERATION" value="">
<input type="hidden" name="COM" value="">
<input type="hidden" name="COMPLUS" value="">
<input type="hidden" name="PARAMPLUS" value="">
<input type="hidden" name="USERID" value="">
<input type="hidden" name="CREDITCODE" value="">
<?php
    if(isset($_REQUEST['bestel']))
    {
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
        echo $produkt22."<br/>";
        echo $name1."<br/>";
        echo $vorname;
        echo $tel."<br/>";
        echo $adress."<br/>";
        echo $postleitzahl."<br/>";
        echo $kanton."<br/>";
        echo $anzahl."<br/>";
        echo $price;

         $insertbuy="INSERT into buy VALUES('','$produkt22',$anzahl,$price,'$name1','$vorname','$tel','$adress','$postleitzahl',$gutschein)";
          $result16=$conn->query($insertbuy)or die(mysqli_error());


    }
?>
</form>
</div>


</div>
