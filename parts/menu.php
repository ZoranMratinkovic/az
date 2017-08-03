<?php
   include("connectionFile/connection.php");
   $sql = "SELECT p.product_name,p.amount,p.price_old,p.price_new,p.pictures_slider,p.id_product,p.expire_date,c.categorie FROM product p INNER JOIN categorie c on p.id_cat = c.id_cat WHERE p.expired = ?";
   $expired = 0;
   $st = $conn->prepare($sql);
   $st->bind_param("i",$expired);
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
             $pic = $row['pictures_slider'];
             $id_product = $row['id_product'];
             echo
              "
               <script>
               var id_product = ". $id_product . ";
               var timestamp = ".$timestamp.";
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

                                        <img src="images/menu1.jpg" height="270" width="380" class="MenuPic"/>

                                        <div class="captionFig progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70% Complete</span>
                                          </div>
                                        </div>

                                      <div class="picDescr">
                                        <div class="leftt">
                                            <p class="des1">Ovde ide opis l</p>
                                            <p class="des1">Ovde ide opis l</p>
                                        </div>
                                        <div class="rightt">
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

                            <li><a href="#works" class="">Fearures</a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">

                                        <img src="images/menu1.jpg" height="270" width="380" class="MenuPic"/>
                                        <div class="captionFig progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70% Complete</span>
                                          </div>
                                        </div>

                                      <div class="picDescr">
                                        <div class="leftt">
                                            <p class="des1">Ovde ide opis l</p>
                                            <p class="des1">Ovde ide opis l</p>
                                        </div>
                                        <div class="rightt">
                                            <p class="des1">100 CHFR</p>
                                            <p class="des1">80 CHFR</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>

                                <a href="#"><li>Link 2</li></a>
                            </ul>
                            </li>
                            <li><a href="#works" class="">Fearures</a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">

                                        <img src="images/menu1.jpg" height="270" width="380" class="MenuPic"/>
                                        <div class="captionFig progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70% Complete</span>
                                          </div>
                                        </div>

                                      <div class="picDescr">
                                        <div class="leftt">
                                            <p class="des1">Ovde ide opis l</p>
                                            <p class="des1">Ovde ide opis l</p>
                                        </div>
                                        <div class="rightt">
                                            <p class="des1">100 CHFR</p>
                                            <p class="des1">80 CHFR</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>

                                <a href="#"><li>Link 2</li></a>
                            </ul>
                            </li>
                            <li><a href="#works" class="">Fearures</a>
                            <ul>
                              <a href="#">
                                <li>
                                  <div class="DropDownPic">

                                        <img src="images/menu1.jpg" height="270" width="380" class="MenuPic"/>
                                        <div class="captionFig progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70% Complete</span>
                                          </div>
                                        </div>

                                      <div class="picDescr">
                                        <div class="leftt">
                                            <p class="des1" >Ovde ide opis l</p>
                                            <p class="des1">Ovde ide opis l</p>
                                        </div>
                                        <div class="rightt">
                                            <p class="des1">100 CHFR</p>
                                            <p class="des1">80 CHFR</p>
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
