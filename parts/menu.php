<?php
   include("connectionFile/connection.php");
   $sql = "SELECT p.product_name,p.amount,p.price_old,p.price_new,p.description,p.pictures_slider,p.id_product,p.expire_date,c.categorie FROM product p INNER JOIN categorie c on p.id_cat = c.id_cat WHERE p.expired = ? AND p.id_cat=?";
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

             $date = $row['expire_date'];
             $timestamp = strtotime($date);
             $name_cat = $row['categorie'];
             $name = $row['product_name'];
             $ammount = $row['amount'];
             $old_price = $row['price_old'];
             $new_price = $row['price_new'];
             $description = $row['description'];
             $pic = $row['pictures_slider'];
             $id_product = $row['id_product'];
             echo
              "
               <script>
               var id_product = ". $id_product . ";
               var timestamp = ".$timestamp.";
               countdown(timestamp,id_product);

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

             $date1 = $row['expire_date'];
             $timestamp1 = strtotime($date1);
             $name_cat1 = $row['categorie'];
             $name1 = $row['product_name'];
             $ammount1 = $row['amount'];
             $old_price1 = $row['price_old'];
             $new_price1 = $row['price_new'];
             $description1 = $row['description'];
             $pic1 = $row['pictures_slider'];
             $id_product1 = $row['id_product'];
             echo
              "
               <script>
               var id_product1 = ". $id_product1 . ";
               var timestamp1 = ".$timestamp1.";
               countdown(timestamp1,id_product1);
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

             $date2 = $row['expire_date'];
             $timestamp2 = strtotime($date2);
             $name_cat2 = $row['categorie'];
             $name2 = $row['product_name'];
             $ammount2 = $row['amount'];
             $old_price2 = $row['price_old'];
             $new_price2 = $row['price_new'];
             $description2 = $row['description'];
             $pic2 = $row['pictures_slider'];
             $id_product2 = $row['id_product'];
             echo
              "
               <script>
               var id_product2 = ". $id_product2 . ";
               var timestamp2 = ".$timestamp2.";
               countdown(timestamp2,id_product2);
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

             $date3 = $row['expire_date'];
             $timestamp3 = strtotime($date3);
             $name_cat3 = $row['categorie'];
             $name3 = $row['product_name'];
             $ammount3 = $row['amount'];
             $old_price3 = $row['price_old'];
             $new_price3 = $row['price_new'];
             $description3 = $row['description'];
             $pic3 = $row['pictures_slider'];
             $id_product3 = $row['id_product'];
             echo
              "
               <script>
               var id_product3 = ". $id_product3 . ";
               var timestamp3 = ".$timestamp3.";
               countdown(timestamp3,id_product3);
               </script>
              ";
            }
        }
   }
?>
<header id="home" class="header navbar-fixed-top">
            <div class="navbar navbar-default main-menu">

                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a  href="#home" class="navbar-brand"><img src="images/logo.png" alt="Logo" /></a>
                        <!-- <a class="navbar-brand" href="index.html"></a> -->
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left drop">
                             <li><a href="index.php" class="" >HOME</a></li>
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
                            <li><a href="#works" class=""><?php echo $name_cat ?></a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">

                                        <img src="<?php echo $pic ?>" height="270" width="380" class="MenuPic"/>

                                        <div class="captionFig progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70% Complete</span>
                                          </div>
                                          <div id="vino"></div>
                                        </div>

                                      <div class="picDescr">
                                        <div class="col-xs-9">
                                            <p class="des1 centered"><?php echo $description; ?></p>
                                        </div>
                                        <div class="col-xs-3">
                                            <strike><p class="des1"><?php echo $old_price ?>CHF</p></strike>
                                            <p class="des1"><?php echo $new_price ?>CHF</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>

                                <a href="#"><li>Link 2</li></a>
                            </ul>
                            </li>

                            <li><a href="#works" class=""><?php echo $name_cat1 ?></a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">

                                        <img src="<?php echo $pic1 ?>" height="270" width="380" class="MenuPic"/>
                                        <div class="captionFig progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70% Complete</span>

                                          </div>
                                          <div id="pivo"></div>
                                        </div>

                                      <div class="picDescr">
                                        <div class="col-xs-9">
                                            <p class="des1 centered"><?php echo $description1; ?></p>
                                        </div>
                                        <div class="col-xs-3">
                                            <strike><p class="des1"><?php echo $old_price1 ?>CHF</p></strike>
                                            <p class="des1"><?php echo $new_price1 ?>CHF</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>

                                <a href="#"><li>Link 2</li></a>
                            </ul>
                            </li>
                            <li><a href="#works" class=""><?php echo $name_cat2 ?></a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">

                                        <img src="<?php echo $pic2 ?>" height="270" width="380" class="MenuPic"/>
                                        <div class="captionFig progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70% Complete</span>

                                          </div>
                                             <div id="phone"></div>
                                        </div>

                                        <div class="picDescr">
                                        <div class="col-xs-9">
                                            <p class="des1 centered"><?php echo $description2; ?></p>
                                        </div>
                                        <div class="col-xs-3">
                                            <strike><p class="des1"><?php echo $old_price2 ?>CHF</p></strike>
                                            <p class="des1"><?php echo $new_price2 ?>CHF</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>

                                <a href="#"><li>Link 2</li></a>
                            </ul>
                            </li>
                            <li><a href="#works" class=""><?php echo $name_cat3 ?></a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">

                                        <img src="<?php echo $pic3 ?>" height="270" width="380" class="MenuPic"/>
                                        <div class="captionFig progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70% Complete</span>

                                          </div>
                                          <div id="laptop"></div>

                                        </div>

                                      <div class="picDescr">
                                        <div class="col-xs-9">
                                            <p class="des1 centered"><?php echo $description3; ?></p>
                                        </div>
                                        <div class="col-xs-3">
                                            <strike><p class="des1"><?php echo $old_price3 ?>CHF</p></strike>
                                            <p class="des1"><?php echo $new_price3 ?>CHF</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>

                                <a href="#"><li>Link 2</li></a>
                            </ul>
                            </li>
                             <?php
                                if(isset($_SESSION['name']))
                                {
                                    echo
                                    "
                                        <li><a href='logout.php' class=''>Logout</a></li>
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
                    </div>
                </div>
            </div> <!-- end of navbar -->
        </header>
