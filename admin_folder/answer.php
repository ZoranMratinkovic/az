<?php
    include("../connectionFile/connection.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $upitcomment="SELECT * FROM commentar com INNER JOIN product p on com.id_product=p.id_product INNER JOIN user u on com.id_user=u.id_user";
          $resultcomment=$conn->query($upitcomment)or die("errrorrr");
     ?>
       <form class="" action="#" method="post" enctype = "multipart/form-data">
     <table class='table table-bordered'>
       <tr>
         <th>id Comment</th>
         <th>Comment</th>
         <th>date</th>
         <th>user</th>
         <th>product</th>
         <th>Answer</th>
         <th>Reply</th>
       </tr>
       <?php while($r=mysqli_fetch_array($resultcomment)){
         echo "<tr><td>".$r['id_com']."</td>
                <td>".$r['comment']."</td>
                <td>".date('M d Y, H:i',$r['date'])."</td>
                <td>".$r['name']." {$r['last_name']}</td>
                <td>".$r['product_name']."</td>
                <td>".$r['odgovor']."</td>
                  <td><a href='admin.php?word=answer&idc=".$r['id_com']."'class='brisanje'>Reply</a></td>

         </tr>";
       } if(isset($_GET['idc'])){

         echo "<textarea name='comment' id='' cols='40' rows='5' placeholder='answer here'></textarea>";
         echo  "<input type='submit' value='answer' name='odgovor' class='btn btn-default' />";
         if(isset($_REQUEST['odgovor'])){
           echo "<h1>Sie haben erfolgreich geantwortet</h1>";
         $commentar1=$_REQUEST['comment'];
         $upitubaccomment="UPDATE commentar SET odgovor='$commentar1'where id_com=".$_GET['idc'];
           $resultcommen1t=$conn->query($upitubaccomment)or die("errrorrr");
          echo "<script>'window.location.href='admin.php?word=answer'</script>";
         }
       }?>
     </table>
   </form>
  </body>
</html>
