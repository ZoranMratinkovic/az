<?php
    include("../connectionFile/connection.php");
    $sql= "SELECT * FROM buy";
    $stm1=$conn->query($sql);
    $i=1;
    echo "<table class='table table-bordered'>
            <thead>
              <tr>
                <th>#</th>
                <th>Product name</th>
                <th>Anzahl</th>
                <th>Preis Total</th>
                <th>Name</th>
                <th>vorname</th>
                <th>tel</th>
                <th>adresse</th>
                <th>Postleitzahl</th>
                <th>Kanton</th>

              </tr>
            </thead><tbody>";
    while($row=mysqli_fetch_array($stm1))
    {
        echo "<tr>
                    <td>{$row['id']}</td>
                  <td>{$row['product_name']}</td>
                  <td>{$row['Anzahl']}</td>
                  <td>{$row['Preis Total']}</td>
                  <th>{$row['name']}</th>
                  <th>{$row['vorname']}</th>
                  <th>{$row['tel']}</th>
                  <th>{$row['adresse']}</th>

                  <th>{$row['postleitzahl']}</th>
                  <th>{$row['kanton']}</th>

              </tr>
              ";
    }
    echo "</tbody></table>";



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
