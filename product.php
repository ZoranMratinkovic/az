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
                 $text = explode(';',$row['text']);
                 $heading = explode(';',$row['headings']);
                 $descs = explode(';',$row['descs']);
                 $headings_descs = explode(';',$row['heading_descs']);
                 $big_desc = $row['big_desc'];
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
            <div id="bgimage_pro" class="header-image slider1">
                <div class="container pedingnula">
                    <div class="row centar">

                        <!--<div class="col-sm-5 col-xs-12">
                            <div class="iphone center-content wow fadeInLeft" data-wow-duration="1s">
                                <img class="sliderPic" src=" //echo $pic ?>" alt="" height="400"/>
                            </div>slika na slajderu
                        </div>-->
                        <!--<img src="">-->

                   
                        <div class="col-sm-12 col-md-5 col-xs-12 rightt">
                            <div class="single_home_content wow zoomIn  productss" data-wow-duration="1s">
                <h1 class=""><?php echo $name ?></h1>
                                    <table class="tabela">

                                        <tr>


                                            <td class="zindex" id='price'>Katalog Preis: </td>
                                            <td class="zindex">Neuer Preis: </td>
                                            <td class="zindex">Neuer Preis: </td>

                                        </tr>
                                        <tr>
                                              <td class="zindex"><?php echo $old_price_pro ?> CHF</td>
                                              <td class="zindex">  <?php echo $new_price_pro ?> CHF</td>
                                              <td class="zindex"><?php echo $new_price_pro ?> CHF</td>
                                        </tr>
                                        <tr>
                            <div class="button">
                              <td colspan="3"><p class="btn toogle btnmy" id='dt'>Details</p></td>
                                              
                            </div>
                                        </tr>

                                </table>
               </div>
                            <div id='details' class="single_home_content wow zoomIn  productss1" data-wow-duration="1s">
                               <table class="tabela width">

                                        <tr>


                                            <td class="zindex" id='price'>Stucke:</td>
                                            <td class="zindex">Liefer costen: </td>
                                            <td class="zindex">Farbe: </td>

                                        </tr>
                                        <tr>
                                              <td class="zindex">
                                              <input type="number" min="0" max="<?php echo $ammount_pro; ?>" step="1" value="1" name="" class='form-control'>
                                              </td>
                                              <td class="zindex">9 CHF</td>
                                              <td class="zindex">
                                                  <select name='ddlFarbe' class='form-control'>
                                                      <option  value="1">Red</option>
                                                      <option  value="2">Green</option>
                                                      <option  value="3">Blue</option>
                                                  </select>
                                              </td>
                                        </tr>
                                        <tr>
                                            <div class="button">
                                                <td colspan="3">
                                                <a href="" class="btn btn-default white-btn youtube-media btnmy"><i class="fa fa-shopping-cart" id='kaufen'></i>  Jetzt Einkaufen!!</a></td>
                                            </div>
                                        </tr>
                                       

                                </table>
                            </div>
                
                        </div>

                    </div> <!-- end of row -->
                </div> <!-- end of container -->

                <div class="scrolldown">
                    <a href="#works_2" class="scroll_btn"></a>
                </div>

            </div>

        </section>
 <div class="container-fluid mrg">
        <div class="row transpBg">
          <p class="col-xs-12 col-lg-3 pull-right" id="vinoo">00:00:15</p>
          <p class="col-xs-12 col-lg-3 pull-right" id="pivoo">00:00:15</p>
          <p class="col-xs-12 col-lg-3 pull-right" id="phoness">00:00:15</p>
          <p class="col-xs-12 col-lg-3 pull-right" id="laptopss">00:00:15</p>
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
          <div class="progress-bar col-xs-12 col-lg-9" role="progressbar" aria-valuenow="70"
          aria-valuemin="0" aria-valuemax="100" style="<?php echo $stylee; ?>">
            <p class="prozent">Noch  <?php echo $ostatak; ?>% !!!</p>

          </div>


        </div>
        <h4 id='comm'>Comments</h4>
  </div>
        <!-- Our Works Section -->

        <section id="works" class="">
            <div class="container">
             <div class="row" id='CommentSection'>
                    <div class="col-xs-12">
                        <?php
                            include('functions.php');

                            if(isset($_POST['commentSubmit']))
                            {
                                commentsInsert($id_pro);
                            }
                            commentsShow($id_pro);
                         ?>

                    </div>
                </div>
                <div class="row">
                    <div class="works_content text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">

                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".5s">
                                <i class="fa fa-check"></i>

                                 <h3><?php echo $heading[0]; ?></h3>
                                 <p><?php echo $text[0]; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">

                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".8s">
                                <i class="fa fa-check"></i>

                                <h3><?php echo $heading[1]; ?></h3>
                                 <p><?php echo $text[1]; ?></p>
                                                   </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">

                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.2s">
                                <i class="fa fa-check"></i>

                                <h3><?php echo $heading[2]; ?></h3>
                                 <p><?php echo $text[2]; ?></p>
                        </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">

                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.5s">
                                <i class="fa fa-check"></i>

                                <h3><?php echo $heading[3]; ?></h3>
                                 <p><?php echo $text[3]; ?></p>
   </div>
                        </div>




                    </div>
                </div>
            </div>
        </section>

        <section id="descriotion">
            <div class="container">
                <div class="row main_description">
                    <div class="col-sm-12 col-md-6 col-xs-12">
                        <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                         <img class='picture21' src="<?php echo $pic_pro; ?>">

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xs-12 martop">
                        <div class="right_desc_text wow fadeIn" data-wow-duration="1.5s">
                          <h3 class='martopIpad'><?php echo $headings_descs[0]; ?></h3>
                          <p class='centar1'><?php echo $descs[0]; ?></p>


                            <div class="right_desc_bottom_text">
                                <div class="right_single_bottom_text">
                                    <i class="fa fa-tag"></i>

                                    <div class="right_bottom_description">
                                    <h6><?php echo $headings_descs[1];?></h6>
                                    <p><?php echo $descs[1]; ?></p>
                                    </div>
                                </div>


                                <div class="right_single_bottom_text">
                                    <i class="fa fa-tag"></i>

                                    <div class="right_bottom_description">
                                     <h6><?php echo $headings_descs[2];?></h6>
                                    <p><?php echo $descs[2]; ?></p>
                                    </div>
                                </div>


                                <div class="right_single_bottom_text">
                                    <i class="fa fa-tag"></i>

                                    <div class="right_bottom_description">
                                     <h6><?php echo $headings_descs[3];?></h6>
                                    <p><?php echo $descs[3]; ?></p>
                                    </div>
                                </div>


                                <div class="right_single_bottom_text">
                                    <i class="fa fa-tag"></i>

                                    <div class="right_bottom_description">
                                        <h6><?php echo $headings_descs[4];?></h6>
                                    <p><?php echo $descs[4]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->

    <!--    <section id="video">
            <div class="video_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="video_text center-content">


                                <div class="embed-responsive embed-responsive-4by3">
                                  <iframe class="embed-responsive-item" style="border-radius:10px;" width="940" height="600" src="https://www.youtube.com/embed/zpOULjyy-n8" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->





        <!-- Description Third Section -->
        <section id="description_third">
            <div class="container">
                <div class="row">
                    <div class="main_des_third_contant">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                                <img src="<?php echo $pic_pro; ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 top-margin">
                            <div class="right_desc_text wow fadeIn marg marbot martop" data-wow-duration="1.5s">
                              <h3><?php echo $heading[0]; ?></h3>
                              <p><?php echo $big_desc; ?></p>
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
