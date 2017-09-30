<?php
  include("../connectionFile/connection.php");
  echo "<h1>Alle mails</h1>";
  $upitnews= "SELECT * FROM user";
    $stm4=$conn->query($upitnews);
    while($rnews=mysqli_fetch_array($stm4)){
      echo $rnews['email'].",<br>";
    }
?>
