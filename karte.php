
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
  <form class="" action="index.php?page=karte" method="post">
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
									<div class="col-sm-2 hidden-xs"><img src="$pic_pro" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo  $name_pro; ?></h4>
										<p><?php echo  $description_pro; ?></p>
									</div>
								</div>
							</td>
							<td data-th="Price" id='tab'><?php echo $new_price_pro ?> CHF</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" name="anzahl" id="anzahl" class="text-center"><?php echo $new_price_pro ?></td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm" onclick="change();" name="refresh"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>

					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>50</strong></td>
						</tr>
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
  <div class="container">
    <div class="col-sm-2 col-xs-2 col-lg-2">
    </div>
<div class="col-sm-8 col-xs-8 col-lg-8">

<br/>



<div class="form-group">
  <label for="pwd">Name</label>
  <input type="text" class="form-control" id="pwd" placeholder="stücke" name="name1">
</div>
<div class="form-group">
  <label for="pwd">Vorname </label>
  <input type="text" class="form-control" id="pwd" placeholder="Preis" name="vorname">
</div>
<div class="form-group">
  <label for="pwd">Telefon</label>
  <input type="text" class="form-control" id="pwd" placeholder="tel" name="tel">
</div>
<div class="form-group">
  <label for="pwd">Adresse</label>
  <input type="text" class="form-control" id="pwd" placeholder="adresse" name="adresse">
</div>
<div class="form-group">
  <label for="pwd">Postleitzahl</label>
  <input type="text" class="form-control" id="pwd" placeholder="postleitzahl" name="postleitzahl">
</div>
<div class="form-group">
  <label for="pwd">Kanton</label>
  <input type="text" class="form-control" id="pwd" placeholder="Beschreibung" name="kanton">
</div>
<div class="form-group">
  <input type="checkbox" name="" value="" required>  Ich habe die AGBS gelesen und bin einverstanden
</div>
<div class="form-group">
  <a href="cart/pay.php"><input type="submit" class="btn-sm" name="bestel" value="Jetzt Bestellen"></a>
</div>
<?php
    if(isset($_REQUEST['bestel'])){
  $name1=$_REQUEST['name1'];
  $vorname=$_REQUEST['vorname'];
  $tel=$_REQUEST['tel'];
  $adress=$_REQUEST['adresse'];
  $postleitzahl=$_REQUEST['postleitzahl'];
  $kanton=$_REQUEST['kanton'];
  $insertbuy="INSERT into buy('','$name1','$vorname','$tel','$adress','$postleitzahl','$kanton')";
  $result16=$conn->query($insertbuy)or die("errrorrr");
}
?>
</form>
</div>


</div>
