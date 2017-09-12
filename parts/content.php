
        <section id="home">
            <div id="bgimage" class="header-image slider1">
                <div class="container pedingnula">
                    <div class="row centar">

                        <!--<div class="col-sm-5 col-xs-12">
                            <div class="iphone center-content wow fadeInLeft" data-wow-duration="1s">
                                <img class="sliderPic" src="<?php //echo $pic ?>" alt="" height="400"/>
                            </div>slika na slajderu
                        </div>-->

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
                                              <td class="zindex"><?php echo $old_price ?> CHF</td>
                                              <td class="zindex">  <?php echo $new_price ?> CHF</td>
                                              <td class="zindex"><?php echo $new_price ?> CHF</td>
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
                                              <input type="number" min="0" max="<?php echo $ammount; ?>" step="1" value="1" name="" class='form-control'>
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
                    <a href="#works" class="scroll_btn"></a>
                </div>

            </div>

        </section>
        <div class="container-fluid mrg">
            <div class="row transpBg">
              <p class="col-lg-3 col-md-3 col-xs-12 col-sm-12 pull-right" id="demo">00:00:15</p>
              <?php


                   $upitz = "SELECT 100/amount*lager as ostatak from product where id_cat=1";
                   $result11 = $conn->query($upitz)or die("bat upit");

                    while($rez11=mysqli_fetch_array($result11))
                    {

                          $ostatak=$rez11['ostatak'];
                          $ostatak=round($ostatak);
                          $stylee="width:".$ostatak."%";
                          $styleee="width:15%";

                    }
              ?>
              <div class="progress-bar col-lg-9 col-md-9 col-xs-12 col-sm-12" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="<?php echo $stylee; ?>">
                <p class="prozent">Nur noch  <?php echo $ostatak; ?>%</p>

              </div>


            </div>
              <h4 id='comm'>Comments</h4>
        </div>
        <!-- Our Works Section -->

        <section id="works" class="">
            <div class="container" >
                <div class="row" id='CommentSection'>
                    <div class="col-xs-12">
                        <?php
                            include('functions.php');

                            if(isset($_POST['commentSubmit']))
                            {
                                commentsInsert($id_product);
                            }
                            commentsShow($id_product);
                         ?>

                    </div>
                </div>
                <div class="row">
                    <div class="works_content text-center col-xs-12" >

                      <div class="col-xs-12 paddingUnderSlider">
                        <h1><?php echo $description; ?></h1>
                    </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".5s">
                                <i class="fa fa-check"></i>
                                <h3><?php echo $headingsAr[0]; ?></h3>
                                <p><?php echo $textAr[0]; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".8s">
                                <i class="fa fa-check"></i>

                                <h3><?php echo $headingsAr[1]; ?></h3>
                                <p><?php echo $textAr[1]; ?></p>                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.2s">
                                <i class="fa fa-check"></i>

                                <h3><?php echo $headingsAr[2]; ?></h3>
                                <p><?php echo $textAr[2]; ?></p>

                             </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.5s">
                                <i class="fa fa-check"></i>

                              <h3><?php echo $headingsAr[3]; ?></h3>
                                <p><?php echo $textAr[3]; ?></p>                          </div>
                        </div>




                    </div>
                </div>
            </div>
        </section>


        <!-- Description Section -->

        <section id="descriotion">
            <div class="container">
                <div class="row main_description">
                    <div class="col-sm-12 col-xs-12">
                        <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                         <img src="<?php echo $pic; ?>" alt="" height='530' width='100%' class='picture21'>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                        <div class="col-xs-12 tac naslov">
                          <h3 class='font'><?php echo $headingDescAr[0]; ?></h3>
                            <p><?php echo $descsAr[0]; ?></p>
                        </div>


                            <div class="right_desc_bottom_text row">

                     
                                   <div class="sredina">

                                <div class="right_single_bottom_text col-xs-12 col-sm-6">
                                    <i class="fa fa-tag"></i>
                               
                                    <div class="right_bottom_description">
                                        <h3><?php echo $headingDescAr[1]; ?></h3>
                                        <p><?php echo $descsAr[1]; ?></p>
                                    </div>
                                 </div>

                                <div class="right_single_bottom_text col-xs-12 col-sm-6">
                                    <i class="fa fa-tag"></i>
                              

                                    <div class="right_bottom_description">
                                        <h3><?php echo $headingDescAr[2]; ?></h3>
                                        <p><?php echo $descsAr[2];?></p>
                                    </div>
                                  </div>

                                <div class="right_single_bottom_text col-xs-12 col-sm-6">
                                    <i class="fa fa-tag"></i>

                                    <div class="right_bottom_description">
                                       <h3><?php echo $headingDescAr[3]; ?></h3>
                                        <p><?php echo $descsAr[3]; ?></p>
                                    </div>
                                </div>

                                <div class="right_single_bottom_text col-xs-12 col-sm-6">
                                    <i class="fa fa-tag"></i>

                                    <div class="right_bottom_description">
                                        <h3><?php echo $headingDescAr[4]; ?></h3>
                                        <p><?php echo $descsAr[4]; ?></p>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Description Second Section -->

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
