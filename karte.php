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
							<th style="width:10%">Peis</th>
							<th style="width:8%">Anzahl</th>
							<th style="width:22%" class="text-center">Total</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>

							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="<?php echo $pic1; ?>" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $name; ?></h4>
										<p><?php echo $description1; ?></p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $new_price; ?> CHF</td>
							<td data-th="Quantity">
								<input type="number" name="calc" class="form-control text-center" value="1">
							</td>
              <?php  ?>
							<td data-th="Subtotal" class="text-center"><?php echo $new_price; ?> CHF</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
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
<br/>
<br/>
<br/>
<div class="form-group">
  <label for="pwd">Name</label>
  <input type="text" class="form-control" id="pwd" placeholder="stücke" name="stucke">
</div>
<div class="form-group">
  <label for="pwd">Vorname </label>
  <input type="text" class="form-control" id="pwd" placeholder="Preis" name="price">
</div>
<div class="form-group">
  <label for="pwd">Telefon</label>
  <input type="text" class="form-control" id="pwd" placeholder="Beschreibung" name="description">
</div>
<div class="form-group">
  <label for="pwd">Adresse</label>
  <input type="text" class="form-control" id="pwd" placeholder="Neuer Preis" name="price2">
</div>
<div class="form-group">
  <label for="pwd">Postleitzahl</label>
  <input type="text" class="form-control" id="pwd" placeholder="Neuer Preis" name="lieferkosten">
</div>
<div class="form-group">
  <label for="pwd">Kanton</label>
  <input type="text" class="form-control" id="pwd" placeholder="Beschreibung" name="description">
</div>
<div class="form-group">
  <input type="checkbox" name="" value="">  Ich habe die AGBS gelesen und bin einverstanden
</div>
<div class="form-group">
  <a href="cart/pay.php"><input type="button" class="btn-sm" name="" value="Jetzt Bestellen"></a>
</div>
</div>


</div>
