<?php
    include("../connectionFile/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Produkt name</label>
      <input type="text" class="form-control" id="email" placeholder="Produkt name" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Kategorie</label><br/>
      <select class="" name="">
        <option value="">0</option>
      </select>

    </div>
    <div class="form-group">
      <label for="pwd">Stücke</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Preis </label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Aktion Preis</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Beschreibung</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Bild</label>
      <input type="file" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Ending date</label>
      <input type="date" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Beschreibung</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
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
                              while($rez1=mysqli_fetch_array($result2)){
                                $headingtext1=$rez1['headingtext1'];
                                $text1 =$rez1['text1'];
                                echo "<h3><input type='text' name='head1' value='heading1'></h3>";
                                echo "<p><textarea rows='4' cols='30' placeholder='1 texxt'></textarea></p>";
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
                                echo "<h3><input type='text' name='head1' value='heading1'></h3>";
                                echo "<p><textarea rows='4' cols='30' placeholder='1 texxt'></textarea></p>";
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
                                echo "<h3><input type='text' name='head1' value='heading1'></h3>";
                                echo "<p><textarea rows='4' cols='30' placeholder='1 texxt'></textarea></p>";
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
                                echo "<h3><input type='text' name='head1' value='heading1'></h3>";
                                echo "<p><textarea rows='4' cols='30' placeholder='1 texxt'></textarea></p>";
                              }

                         ?>                            </div>
                </div>




            </div>
        </div>
    </div>
</section>







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
                          echo "<h3><input type='text' name='head1' value='heading1'></h3>";
                          echo "<p><textarea rows='2' cols='25' placeholder='1 texxt'></textarea></p>";
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
                                      echo "<h3><input type='text' name='head1' value='heading1'></h3>";
                                      echo "<p><textarea rows='4' cols='50' placeholder='1 texxt'></textarea></p>";
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
                                      echo "<h3><input type='text' name='head1' value='heading1'></h3>";
                                      echo "<p><textarea rows='4' cols='50' placeholder='1 texxt'></textarea></p>";
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
                                      echo "<h3><input type='text' name='head1' value='heading1'></h3>";
                                      echo "<p><textarea rows='4' cols='50' placeholder='1 texxt'></textarea></p>";
                                    }

                               ?>
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
            <div class="row" style="background-color:#ccc">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="video_text center-content">

                        <!-- 4:3 aspect ratio -->
                        <div class="embed-responsive embed-responsive-4by3">
                          <h4>Video</h4>
                          <input type="file" name="" value="">
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
                              echo "<h3><input type='text' name='head1' value='heading1'></h3>";
                              echo "<p><textarea rows='10' cols='50' placeholder='1 texxt'></textarea></p>";
                            }

                       ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
</body>
</html>
