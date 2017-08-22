<?php 
      if(isset($_GET['id']))
      {
        
        include("connectionFile/connection.php");

        $id_pro = $_GET['id'];
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
                 $description_pro = $row['description'];
                 $pic_pro = $row['pictures_slider'];
                 $id_product_pro = $row['id_product'];
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


        <section id="home">
            <div id="bgimage_pro" class="header-image">
                <div class="container">
                    <div class="row centar">

                        <!--<div class="col-sm-5 col-xs-12">
                            <div class="iphone center-content wow fadeInLeft" data-wow-duration="1s">
                                <img class="sliderPic" src=" //echo $pic ?>" alt="" height="400"/>
                            </div>slika na slajderu
                        </div>-->
                        <!--<img src="">-->

                        <div class="col-sm-7 col-xs-12">
                            <div class="single_home_content wow zoomIn  productss" data-wow-duration="1s">
								<h1></h1>
                                      <table>

                                    <tr>


                                    <td class="zindex">Old price: <strike><?php echo $old_price_pro; ?>CHF</strike></td>
                                    <td class="zindex">new price: <?php echo $new_price_pro ?>CHF</td>
                                      <td class="zindex">Ammount <?php echo $ammount_pro ?></td>

                                    </tr>
                          <tr>


								<div class="button">
									<td><p class="btn toogle">Details</p></td>
									<td><a href="" class="btn btn-default white-btn youtube-media btnmy"><i class="fa fa-play"></i>Jetzt Einkaufen!!</a></td>
								</div>
							</div></tr>
                </table>
                        </div>

                    </div> <!-- end of row -->
                </div> <!-- end of container -->

                <div class="scrolldown">
                    <a href="#works_2" class="scroll_btn"></a>
                </div>

            </div>

        </section>

        <div class="row">
          <p class="col-xs-3 pull-right" id="vinoo">00:00:15</p>
          <p class="col-xs-3 pull-right" id="pivoo">00:00:15</p>
          <p class="col-xs-3 pull-right" id="phoness">00:00:15</p>
          <p class="col-xs-3 pull-right" id="laptopss">00:00:15</p>
          <?php
          
                $upitz = "SELECT 100/amount*lager as ostatak from product where id_product={$_GET['id']}";
               
                $result11 = $conn->query($upitz)or die("bat upit");
                while($rez11=mysqli_fetch_array($result11))
                {
                  
                  $ostatak=$rez11['ostatak'];
                  $ostatak=round($ostatak);
                  $stylee="width:".$ostatak."%";
                  $styleee="width:15%";

                }
          ?>
          <div class="progress-bar col-xs-9" role="progressbar" aria-valuenow="70"
          aria-valuemin="0" aria-valuemax="100" style="<?php echo $stylee; ?>">
            <p class="prozent">Noch  <?php echo $ostatak; ?>% !!!</p>

          </div>


        </div>
        <!-- Our Works Section -->

        <section id="works" class="center-content">
            <div class="container">
                <div class="row">
                    <div class="works_content text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".5s">
                                <i class="fa fa-crop"></i>

                                <?php
                                      $upit2 ="SELECT * from product_des where id_product='1'";
                                      $result2 = $conn->query($upit2);
                                      while($rez1=mysqli_fetch_array($result2))
                                      {
                                        $headingtext1=$rez1['headingtext1'];
                                        $text1 =$rez1['text1'];
                                        echo "<h3>$headingtext1</h3>";
                                        echo "<p>$text1</p>";
                                      }

                                 ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".8s">
                                <i class="fa fa-cube"></i>

                                <?php
                                      $upit2 ="SELECT * from product_des where id_product='1'";
                                      $result2 = $conn->query($upit2);
                                      while($rez1=mysqli_fetch_array($result2)){
                                        $headingtext2=$rez1['headingtext2'];
                                        $text2 =$rez1['text2'];
                                        echo "<h3>$headingtext2</h3>";
                                        echo "<p>$text2</p>";
                                      }

                                 ?>                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.2s">
                                <i class="fa fa-magic"></i>

                                <?php
                                      $upit2 ="SELECT * from product_des where id_product='1'";
                                      $result2 = $conn->query($upit2);
                                      while($rez1=mysqli_fetch_array($result2)){
                                          $headingtext3=$rez1['headingtext3'];
                                        $text3 =$rez1['text3'];
                                          echo "<h3>$headingtext3</h3>";
                                        echo "<p>$text3</p>";
                                      }

                                 ?>                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.5s">
                                <i class="fa fa-code-fork"></i>

                                <?php
                                      $upit2 ="SELECT * from product_des where id_product='1'";
                                      $result2 = $conn->query($upit2);
                                      while($rez1=mysqli_fetch_array($result2)){
                                          $headingtext4=$rez1['headingtext4'];
                                        $text4 =$rez1['text4'];
                                          echo "<h3>$headingtext4</h3>";
                                        echo "<p>$text4</p>";
                                      }

                                 ?>                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </section>





        <!--<section id="works_2">
            <div class="container">
                <div class="row">
                    <div class="works_2_content">
                        <div class="col-sm-4 col-xs-12">
                            <div class="works_2_iphone center-content">
                                <img src="images/iphone1.png" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-12 top-margin">
                            <div class="row">
                                <div class="single_works_2_content wow fadeInRight" data-wow-duration="1.5s">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-crop"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-cube"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-magic"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-code-fork"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-rocket"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-database"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->



        <!-- Video Section -->

      <!--  <section id="video_icon">
            <div class="video_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="video_text center-content">
                                <a href="http://www.youtube.com" class="youtube-media">
                                <img src="images/play.png" alt="" />
                                </a>
                                <h5>Watch the feature video</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <!-- Description Section -->

        <section id="descriotion">
            <div class="container">
                <div class="row main_description">
                    <div class="col-sm-6 col-xs-12">
                        <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                          <?php
                          $upit2 ="SELECT * from product_des where id_product='1'";
                          $result2 = $conn->query($upit2);
                          while($rez1=mysqli_fetch_array($result2)){
                            $slika=$rez1['picture_desc'];
                            echo "<img src='$slika' />";
                          }

                          ?>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                          <?php
                                $upit2 ="SELECT * from product_des where id_product='1'";
                                $result2 = $conn->query($upit2);
                                while($rez1=mysqli_fetch_array($result2)){
                                    $desc1=$rez1['headingdesc1'];
                                  $des1 =$rez1['desc1'];
                                    echo "<h3>$desc1</h3>";
                                  echo "<p>$des1</p>";
                                }

                           ?>

                            <div class="right_desc_bottom_text">
                                <div class="right_single_bottom_text">
                                    <i class="fa fa-shield"></i>
                                    <div class="right_bottom_description">
                                      <?php
                                            $upit2 ="SELECT * from product_des where id_product='1'";
                                            $result2 = $conn->query($upit2);
                                            while($rez1=mysqli_fetch_array($result2)){
                                                $desc2=$rez1['headingdesc2'];
                                              $des2 =$rez1['desc2'];
                                                echo "<h6>$desc2</h6>";
                                              echo "<p>$des2</p>";
                                            }

                                       ?>
                                    </div>
                                </div>

                                <div class="right_single_bottom_text">
                                    <i class="fa fa-css3"></i>
                                    <div class="right_bottom_description">
                                      <?php
                                            $upit2 ="SELECT * from product_des where id_product='1'";
                                            $result2 = $conn->query($upit2);
                                            while($rez1=mysqli_fetch_array($result2)){
                                                $desc3=$rez1['headingdesc3'];
                                              $des3 =$rez1['desc3'];
                                                echo "<h6>$desc3</h6>";
                                              echo "<p>$des3</p>";
                                            }

                                       ?>
                                    </div>
                                </div>

                                <div class="right_single_bottom_text">
                                    <i class="fa fa-file-text"></i>
                                    <div class="right_bottom_description">
                                      <?php
                                            $upit2 ="SELECT * from product_des where id_product='1'";
                                            $result2 = $conn->query($upit2);
                                            while($rez1=mysqli_fetch_array($result2)){
                                                $desc4=$rez1['headingdesc4'];
                                              $des4 =$rez1['desc3'];
                                                echo "<h6>$desc4</h6>";
                                              echo "<p>$des4</p>";
                                            }

                                       ?>
                                    </div>
                                </div>

                                <div class="right_single_bottom_text">
                                    <i class="fa fa-server"></i>
                                    <div class="right_bottom_description">
                                        <h6>Hundreds of Icons</h6>
                                        <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Description Second Section -->

      <!--  <section id="description_second">
            <div class="container">
                <div class="row">
                    <div class="main_description_second_contant">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="1.5s">
                            <div class="second_heading_text top-margin">
                                <h1>Description Second Layout</h1>
                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                            </div>

                            <div class="second_bottom_text">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-shield"></i>
                                            <div class="right_bottom_description">
                                                <h6>Hundreds of Icons</h6>
                                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-css3"></i>
                                            <div class="right_bottom_description">
                                                <h6>Hundreds of Icons</h6>
                                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-file-text"></i>
                                            <div class="right_bottom_description">
                                                <h6>Hundreds of Icons</h6>
                                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-server"></i>
                                            <div class="right_bottom_description">
                                                <h6>Hundreds of Icons</h6>
                                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-6 col-sm-6">
                            <div class="right_desc_img center-content wow fadeInRight" data-wow-duration="1.5s">
                                <img src="images/iphone4.png" alt="" />

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> -->


        <!-- Video Section -->

        <section id="video">
            <div class="video_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="video_text center-content">

                                <!-- 4:3 aspect ratio -->
                                <div class="embed-responsive embed-responsive-4by3">
                                  <iframe class="embed-responsive-item" style="border-radius:10px;" width="940" height="600" src="https://www.youtube.com/embed/zpOULjyy-n8" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- Description Third Section -->
        <section id="description_third">
            <div class="container">
                <div class="row">
                    <div class="main_des_third_contant">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                                <img src="images/iphone5.png" alt="" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 top-margin">
                            <div class="right_desc_text wow fadeIn" data-wow-duration="1.5s">
                              <?php
                                    $upit2 ="SELECT * from product_des where id_product='1'";
                                    $result2 = $conn->query($upit2);
                                    while($rez1=mysqli_fetch_array($result2)){
                                        $bigdescheading=$rez1['bigdescheading'];
                                      $bigdesc =$rez1['bigdesc'];
                                        echo "<h3>$bigdescheading</h3>";
                                      echo "<p>$bigdesc</p>";
                                    }

                               ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>





        <!-- Apps Gallary  -->


        <!-- Our Pricing  -->


        <!-- Our Testimonial  -->

        <section id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="main_testimonial_text center-content">
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Clients logo Section  -->

        <section id="clientsLogo">
            <div class="container">
                <div class="row">
                    <div class="client_heading_text center-content wow zoomIn" data-wow-duration="1.5s">
                        <h1>As Seen On</h1>

                        <a href=""><img src="images/c1.png" alt="" /></a>
                        <a href=""><img src="images/c2.png" alt="" /></a>
                        <a href=""><img src="images/c3.png" alt="" /></a>
                        <a href=""><img src="images/c4.png" alt="" /></a>
                        <a href=""><img src="images/c5.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Download Section  -->

        <section id="downloadApps">
            <div class="container">
                <div class="row">
                    <div class="download_heading_text center-content">
                        <h1>Download the App</h1>
                        <p>Phasellus nisl leo congue eu malesuada lobortis fringilla et nulla. Curabitur posuere sem nec bibendum finibus.</p>

                        <div class="down_text_des wow fadeInUp" data-wow-duration="1.5s">
                            <a href=""><img src="images/d1.png" alt="" /></a>
                            <a href=""><img src="images/d2.png" alt="" /></a>
                            <a href=""><img src="images/d3.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Subscribe Section  -->
<script type="text/javascript">
      document.getElementById('bgimage_pro').style.backgroundImage="url(<?php echo $pic_pro; ?>)";
           
            countdown1('<?php echo $timestamp_pro; ?>','<?php echo $name_cat_pro; ?>');

            

</script>