<?php
   include("connectionFile/connection.php");
   $sql = "SELECT p.bild2,p.bild3,p.lieferkosten,p.id_cat,p.big_desc,p.heading_descs,p.descs,p.text,p.headings,p.id_product,p.product_name,p.amount,p.price_old,p.price_new,p.description,p.pictures_slider,p.expire_date,c.categorie FROM product p INNER JOIN categorie c on p.id_cat = c.id_cat WHERE p.expired = ? AND p.id_cat=?";
   $expired = 0;
   $id_cat = 1;
   $st = $conn->prepare($sql);
   $st->bind_param("ii",$expired,$id_cat);
   $st->execute();
   if($st)
   {
       if($rez = $st->get_result())
       {
           while($row = $rez->fetch_assoc())
           {

             $id_product = $row['id_product'];
             $date = $row['expire_date'];
             $timestamp = strtotime($date);
             $name_cat = $row['categorie'];
             $name = $row['product_name'];
             $ammount = $row['amount'];
             $old_price = $row['price_old'];
             $new_price = $row['price_new'];
             $lieferkosten=$row['lieferkosten'];
             $description = $row['description'];
             $pic = $row['pictures_slider'];
             $pic1 =$row['bild2'];
             $pic2 =$row['bild3'];
             $id_catI = $row['id_cat'];
             $headingsAr = explode(';',$row['headings']);
             $textAr = explode(';',$row['text']);
             $headingDescAr = explode(';',$row['heading_descs']);
             $descsAr = explode(';',$row['descs']);
             $bigd = $row['big_desc'];
             echo
              "
               <script>
               var id_cat = ".$id_catI.";
               var timestamp = ".$timestamp.";

                 countdown(timestamp,id_cat);

               </script>
              ";
            }
        }
   }
   $expired1 = 0;
   $id_cat1 = 2;
   $st1 = $conn->prepare($sql);
   $st1->bind_param("ii",$expired1,$id_cat1);
   $st1->execute();
   if($st)
   {
       if($rez = $st1->get_result())
       {
           while($row = $rez->fetch_assoc())
           {

             $id_product1 = $row['id_product'];
             $date1 = $row['expire_date'];
             $timestamp1 = strtotime($date1);
             $name_cat1 = $row['categorie'];
             $name1 = $row['product_name'];
             $ammount1 = $row['amount'];
             $old_price1 = $row['price_old'];
             $new_price1 = $row['price_new'];
             $description1 = $row['description'];
             $pic1 = $row['pictures_slider'];
             $id_cat1II = $row['id_cat'];
             echo
              "
               <script>
               var id_cat1 = ". $id_cat1II . ";
               var timestamp1 = ".$timestamp1.";
              countdown(timestamp1,id_cat1);
               </script>
              ";
            }
        }
   }
   $expired2 = 0;
   $id_cat2 = 3;
   $st2 = $conn->prepare($sql);
   $st2->bind_param("ii",$expired2,$id_cat2);
   $st2->execute();
   if($st)
   {
       if($rez = $st2->get_result())
       {
           while($row = $rez->fetch_assoc())
           {

             $id_product2 = $row['id_product'];
             $date2 = $row['expire_date'];
             $timestamp2 = strtotime($date2);
             $name_cat2 = $row['categorie'];
             $name2 = $row['product_name'];
             $ammount2 = $row['amount'];
             $old_price2 = $row['price_old'];
             $new_price2 = $row['price_new'];
             $description2 = $row['description'];
             $pic2 = $row['pictures_slider'];
             $id_cat2II = $row['id_cat'];
             echo
              "
               <script>
               var id_cat2 = ". $id_cat2II . ";
               var timestamp2 = ".$timestamp2.";
               countdown(timestamp2,id_cat2);
               </script>
              ";
            }
        }
   }
   $expired3 = 0;
   $id_cat3 = 4;
   $st3 = $conn->prepare($sql);
   $st3->bind_param("ii",$expired3,$id_cat3);
   $st3->execute();
   if($st)
   {
       if($rez = $st3->get_result())
       {
           while($row = $rez->fetch_assoc())
           {

             $id_product3 = $row['id_product'];
             $date3 = $row['expire_date'];
             $timestamp3 = strtotime($date3);
             $name_cat3 = $row['categorie'];
             $name3 = $row['product_name'];
             $ammount3 = $row['amount'];
             $old_price3 = $row['price_old'];
             $new_price3 = $row['price_new'];
             $description3 = $row['description'];
             $pic3 = $row['pictures_slider'];
             $id_cat3II = $row['id_cat'];
             echo
              "
               <script>
               var id_cat3 = ". $id_cat3II . ";
               var timestamp3 = ".$timestamp3.";
               countdown(timestamp3,id_cat3);
               </script>
              ";
            }
        }
   }
?>
<header id="home" class="header navbar-fixed-top">
            <div class="navbar navbar-default main-menu">

                <div class="container pdNula">
                    <div class="navbar-header">

                        <a  href="#home" class="navbar-brand"><img class='picMenu' src="images/logo2.png" alt="Logo" /></a>
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="index.html"></a> -->
                    </div>
                    <div id="navbar" aria-expended='false' class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left drop">
                             <li><a href="index.php" class="" >Brands</a></li>
                             <!--
                                  $upit1 ="SELECT * from categorie";
                                  $result1 = $conn->query($upit1);
                                   while($rezz=mysqli_fetch_array($result1)){
                                     $categorie=$rezz['categorie'];
                                    echo "<li><a href='#'>";
                                    echo $categorie;
                                    echo "</li></a>";
                                  }
*/
                             ?>-->
                            <li><a href="<?php echo "index.php?page=product&id={$id_product}"; ?>" class=""><?php echo $name_cat ?></a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">

                                        <a href='<?php echo "index.php?page=product&id={$id_product}"; ?>'><img src="<?php echo $pic ?>" height="240" width="380" class="MenuPic"/></a>

                                        <?php
                                             $upitz = "SELECT 100/amount*lager as ostatak from product where id_cat=1 and status=1";
                                              $result11 = $conn->query($upitz)or die("bat upit");

                                              while($rez11=mysqli_fetch_array($result11))
                                              {


                                                $ostatak=$rez11['ostatak'];
                                                $ostatak=round($ostatak);
                                                $stylee="width:".$ostatak."%";
                                                $styleee="width:15%";


                                                }
                                        ?>

                                      <div class="captionFig progress">

                                          <div class="progress-bar abs" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100" style="<?php echo $stylee; ?>">

                                              <span><?php echo $name_cat; ?></span>

                                          </div>

                                          <div id="vino" class='vinoo padding-bar zind'></div>

                                      </div>

                                      <div class="picDescr opisMenu">

                                        <div class="col-xs-9 pt">
                                            <p class=""><?php echo $name; ?></p>
                                            <p class=""><?php echo $description; ?></p>
                                        </div>

                                        <div class="col-xs-3 pt">
                                            <strike><p class=""><?php echo $old_price ?>CHF</p></strike>
                                            <p class=""><?php echo $new_price ?>CHF</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>


                            </ul>
                            </li>

                            <li><a href="<?php echo "index.php?page=product&id={$id_product1}"; ?>" class=""><?php echo $name_cat1 ?></a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">
                                    <?php
                                    $upitz = "SELECT 100/amount*lager as ostatak from product where id_cat=2  and status=1";
                                        $result11 = $conn->query($upitz)or die("bat upit");
                                          while($rez11=mysqli_fetch_array($result11)){
                                            $ostatak=$rez11['ostatak'];
                                            $ostatak=round($ostatak);
                                            $stylee="width:".$ostatak."%";
                                            $styleee="width:15%";


                                    }
                                    ?>
                                      <a href='<?php echo "index.php?page=product&id={$id_product1}"; ?>'>  <img src="<?php echo $pic1 ?>" height="240" width="380" class="MenuPic"/></a>
                                        <div class="captionFig progress transbg">
                                          <div class="progress-bar abs" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="<?php echo $stylee; ?>">
                                            <span><?php echo $name_cat1; ?></span>

                                          </div>
                                          <div id="pivo" class='padding-bar zind'></div>
                                        </div>

                                      <div class="picDescr opisMenu">
                                        <div class="col-xs-9 pt">
                                            <p class=""><?php echo $name1; ?></p>
                                            <p class=""><?php echo $description1; ?></p>
                                        </div>
                                        <div class="col-xs-3 pt">
                                            <strike><p class=""><?php echo $old_price1 ?>CHF</p></strike>
                                            <p class=""><?php echo $new_price1 ?>CHF</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>


                            </ul>
                            </li>
                            <li><a href="<?php echo "index.php?page=product&id={$id_product2}"; ?>" class=""><?php echo $name_cat2 ?></a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">

                                       <a href='<?php echo "index.php?page=product&id={$id_product2}"; ?>'> <img src="<?php echo $pic2 ?>" height="240" width="380" class="MenuPic"/></a>
                                        <div class="captionFig progress">
                                          <div class="progress-bar abs" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="<?php echo $stylee; ?>">
                                            <span><?php echo $name_cat2; ?></span>

                                          </div>
                                             <div id="phone" class='padding-bar zind'></div>
                                        </div>

                                        <div class="picDescr opisMenu">
                                        <div class="col-xs-9 pt">
                                            <p class=""><?php echo $name2; ?></p>
                                            <p class=""><?php echo $description2; ?></p>
                                        </div>
                                        <div class="col-xs-3 pt">
                                            <strike><p class=""><?php echo $old_price2 ?>CHF</p></strike>
                                            <p class=""><?php echo $new_price2 ?>CHF</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>


                            </ul>
                            </li>
                            <li><a href="<?php echo "index.php?page=product&id={$id_product3}"; ?>" class=""><?php echo $name_cat3 ?></a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">
                                    <?php
                                    $upitz = "SELECT 100/amount*lager as ostatak from product where id_cat=3 and status=1";
                                        $result11 = $conn->query($upitz)or die("bat upit");
                                          while($rez11=mysqli_fetch_array($result11)){
                                            $ostatak=$rez11['ostatak'];
                                            $ostatak=round($ostatak);
                                            $stylee="width:".$ostatak."%";
                                            $styleee="width:15%";


                          }
                                    ?>
                                        <a href='<?php echo "index.php?page=product&id={$id_product3}"; ?>'><img src="<?php echo $pic3 ?>" height="240" width="380" class="MenuPic"/></a>
                                        <div class="captionFig progress">
                                          <div class="progress-bar abs" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="<?php echo $stylee; ?>">
                                            <span><?php echo $name_cat3; ?></span>

                                          </div>
                                          <div id="laptop" class='padding-bar zind'></div>

                                        </div>

                                      <div class="picDescr opisMenu">
                                        <div class="col-xs-9 pt">
                                            <p class=""><?php echo $name3; ?></p>
                                            <p class=""><?php echo $description3; ?></p>
                                        </div>
                                        <div class="col-xs-3 pt">
                                            <strike><p class=""><?php echo $old_price3 ?>CHF</p></strike>
                                            <p class=""><?php echo $new_price3 ?>CHF</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>


                            </ul>
                            </li>
                             <?php
                                if(isset($_SESSION['name']))
                                {
                                    echo
                                    "
                                        <li><a href='logout.php' class=''>Logout</a></li>
                                        <li><a href='index.php?page=change' class=''>change</a></li>
                                        <li  class='right_li'><a href=''>{$_SESSION['name']} {$_SESSION['last_name']}</a></li>

                                    ";
                                }
                                else
                                {
                                    echo
                                    "
                                        <li><a href='index.php?page=login' class=''>Login</a></li>
                                        <li><a href='index.php?page=register' class=''>Register</a></li>
                                    ";
                                }
                             ?>

                        </ul>
                        <ul class="nav navbar-nav navbar-right drop">
                          <?php if(isset($_SESSION['email'])&& $_SESSION['id_role']==1){ ?>
                            <li><a href="admin_folder/admin.php">adminpanel</a></li>
                          <?php }else { ?>
                          <li ><a href="index.php?page=fragen">Hilfe</a></li>
                          <li><a href="index.php?page=contact">Kontakt</a></li>

                          <?php } ?>
                        </ul>

                    </div>
                </div>
            </div> <!-- end of navbar -->
        </header>
