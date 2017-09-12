<?php
  include("../connectionFile/connection.php");
  $upitbrisanje111="DELETE FROM product where id_product=".$_GET['ids'];
  $resultdelete = $conn->query($upitbrisanje111)or die("losee");
?>
