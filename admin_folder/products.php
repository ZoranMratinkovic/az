<?php
    include("../connectionFile/connection.php");
    $sql= "SELECT * FROM product p INNER JOIN categorie c on p.id_cat = c.id_cat";
    $stm1=$conn->query($sql);
    $i=1;
    echo "<table class='table table-bordered'>
            <thead>
              <tr>
                <th>#</th>
                <th>Product name</th>
                <th>Categorie</th>
                <th>Status</th>
                <th>Ammount</th>
                <th>Old Price</th>
                <th>New Price</th>
                <th>Description</th>
                <th>Pic</th>
                <th>Date</th>
                <th>Expired</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead><tbody>";
    while($row=mysqli_fetch_array($stm1))
    {
        echo "<tr>
                  <th scope='row'>$i</th>
                  <td>{$row['product_name']}</td>
                  <td>{$row['categorie']}</td>
                  <td>{$row['status']}</td>
                  <th>{$row['amount']}</th>
                  <th>{$row['price_old']}</th>
                  <th>{$row['price_new']}</th>
                  <th>{$row['description']}</th>
                  <th><img src='../{$row['pictures_slider']}' width='50' height='50'/></th>
                  <th>{$row['expire_date']}</th>
                  <th>{$row['expired']}</th>
                  <td><a href='admin.php?ids=".$row['id_product']."'class='brisanje'>Izmeni</a></td>
                  <td><a href='admin.php?id=".$row['id_product']."'class='brisanje'>X</a></td>
              </tr>
              ";
    }
    echo "</tbody></table>";

if(isset($_GET['ids'])){
  header('Location:index.php');
  echo "<script>alert('radi');</script>";
}
 ?>





<!--<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <th>Username</th>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <th>Username</th>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <th>Username</th>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <th>Username</th>
    </tr>
  </tbody>
</table>
-->
