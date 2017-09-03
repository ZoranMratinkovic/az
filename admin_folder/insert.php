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
<form class="" action="admin.php?word=insert" method="post">

    <div class="form-group">
      <label for="email">Produkt name</label>
      <input type="text" class="form-control" id="email" placeholder="Produkt name" name="product_name">
    </div>
    <div class="form-group">
      <label for="pwd">Kategorie</label><br/>
      <select class="" name="categorie">
        <?php
      $upitcat="SELECT * FROM categorie";
      $result11 = $conn->query($upitcat);
      while($rezcat=mysqli_fetch_array($result11)){
        echo "<option value=".$rezcat['id_cat'].">".$rezcat['categorie']."</option>";
      }
        ?>
      </select>

    </div>
    <div class="form-group">
      <label for="pwd">Stücke</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="stucke">
    </div>
    <div class="form-group">
      <label for="pwd">Preis </label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="price">
    </div>
    <div class="form-group">
      <label for="pwd">Aktion Preis</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="price2">
    </div>
    <div class="form-group">
      <label for="pwd">Beschreibung</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="description">
    </div>
    <div class="form-group">
      <label for="pwd">Bild</label>
      <input type="file" class="form-control" id="pwd" placeholder="Enter password" name="picture">
    </div>
    <div class="form-group">
      <label for="pwd">Ending date</label>
      <input type="datetime-local" class="form-control" id="pwd" placeholder="Enter password" name="date">
    </div>
    <div class="form-group">
      <label for="pwd">Beschreibung</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="description1">
    </div>


</div>
<section id="works" class="center-content">
    <div class="container">
        <div class="row">
            <div class="works_content text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_works_text wow fadeInLeft" data-wow-duration=".5s">
                        <i class="fa fa-crop"></i>

                        <?php

                                echo "<h3><input type='text' name='heading1' value='heading1'></h3>";
                                echo "<p><textarea rows='4' cols='30' name='head1' placeholder='1 texxt'></textarea></p>";


                         ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_works_text wow fadeInLeft" data-wow-duration=".8s">
                        <i class="fa fa-cube"></i>

                        <?php

                                echo "<h3><input type='text' name='heading2' value='heading2'></h3>";
                                echo "<p><textarea rows='4' cols='30' name='head2' placeholder='2 texxt'></textarea></p>";


                         ?>                            </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_works_text wow fadeInLeft" data-wow-duration="1.2s">
                        <i class="fa fa-magic"></i>

                        <?php

                                echo "<h3><input type='text' name='heading3' value='heading3'></h3>";
                                echo "<p><textarea rows='4' name='head3' cols='30' placeholder='1 texxt'></textarea></p>";


                         ?>                            </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_works_text wow fadeInLeft" data-wow-duration="1.5s">
                        <i class="fa fa-code-fork"></i>

                        <?php


                                echo "<h3><input type='text' name='heading4' value='heading4'></h3>";
                                echo "<p><textarea rows='4' name='head4' cols='30' placeholder='1 texxt'></textarea></p>";


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



                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                  <?php

                          echo "<h3><input type='text' name='heading5' value='heading5'></h3>";
                          echo "<p><textarea rows='2' name='head5' cols='25' placeholder='1 texxt'></textarea></p>";


                   ?>

                    <div class="right_desc_bottom_text">
                        <div class="right_single_bottom_text">
                            <i class="fa fa-shield"></i>
                            <div class="right_bottom_description">
                              <?php

                                      echo "<h3><input type='text' name='heading6' value='heading 6'></h3>";
                                      echo "<p><textarea rows='4' cols='50' name='head6' placeholder='1 texxt'></textarea></p>";


                               ?>
                            </div>
                        </div>

                        <div class="right_single_bottom_text">
                            <i class="fa fa-css3"></i>
                            <div class="right_bottom_description">
                              <?php

                                      echo "<h3><input type='text' name='heading7' value='heading7'></h3>";
                                      echo "<p><textarea rows='4' name='head7' cols='50' placeholder='7 texxt'></textarea></p>";


                               ?>
                            </div>
                        </div>

                        <div class="right_single_bottom_text">
                            <i class="fa fa-file-text"></i>
                            <div class="right_bottom_description">
                              <?php

                                      echo "<h3><input type='text' name='heading8' value='heading8'></h3>";
                                      echo "<p><textarea rows='4' name='head8' cols='50' placeholder='1 texxt'></textarea></p>";


                               ?>
                            </div>
                        </div>
                         <div class="right_single_bottom_text">
                            <i class="fa fa-file-text"></i>
                            <div class="right_bottom_description">
                              <?php

                                      echo "<h3><input type='text' name='heading9' value='heading9'></h3>";
                                      echo "<p><textarea rows='4' name='head9' cols='50' placeholder='1 texxt'></textarea></p>";


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
                <?php

                        echo "<h3><input type='text' name='heading10' value='heading10'></h3>";
                        echo "<p><textarea rows='10' name='head10' cols='50' placeholder='1 texxt'></textarea></p>";


                 ?>
                <div class="col-md-6 col-sm-6 col-xs-12 top-margin">
                    <div class="right_desc_text wow fadeIn" data-wow-duration="1.5s">

                    </div>
                </div>


                  <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                  </div>
                  <button type="submit" name="insert" class="btn btn-default">Submit</button>
                  <?php

                      if(isset($_REQUEST['insert'])){

                        $produkt=$_REQUEST['product_name'];
                        $categorie=$_REQUEST['categorie'];
                        $stucke=$_REQUEST['stucke'];
                        $price=$_REQUEST['price'];
                        $price1=$_REQUEST['price2'];
                        $description=$_REQUEST['description'];
                        $bild=$_REQUEST['picture'];
                        $date=$_REQUEST['date'];
                        $description1=$_REQUEST['description1'];
                        $heading1=$_REQUEST['heading1'];
                        $head1=$_REQUEST['head1'];
                        $heading2=$_REQUEST['heading2'];
                        $head2=$_REQUEST['head2'];
                        $heading3=$_REQUEST['heading3'];
                        $head3=$_REQUEST['head3'];
                        $heading4=$_REQUEST['heading4'];
                        $head4=$_REQUEST['head4'];
                        $heading5=$_REQUEST['heading5'];
                        $head5=$_REQUEST['head5'];
                        $heading6=$_REQUEST['heading6'];
                        $head6=$_REQUEST['head6'];
                        $heading7=$_REQUEST['heading7'];
                        $head7=$_REQUEST['head7'];
                        $heading8=$_REQUEST['heading8'];
                        $head8=$_REQUEST['head8'];
                        $heading9=$_REQUEST['heading9'];
                        $head9=$_REQUEST['head9'];
                        $head10 = $_REQUEST['head10'];
                        $heading10 = $_REQUEST['heading10'];
                      /*  echo $head1.$heading1."<br/>";
                        echo $head2.$heading2."<br/>";
                        echo $head3.$heading3."<br/>";
                        echo $head4.$heading4."<br/>";
                        echo $head5.$heading5."<br/>";
                        echo $head6.$heading6."<br/>";
                        echo $head7.$heading7."<br/>";
                        echo $head8.$heading8."<br/>";*/
                  $headingArray = array($heading1,$heading2,$heading3,$heading4);
                  $headingDb = implode(';',$headingArray);

                  $textArray = array($head1,$head2,$head3,$head4);
                  $textDb = implode(';',$textArray);

                  $descsArray = array($head5,$head6,$head7,$head8,$head9);
                  $descsDb = implode(';',$descsArray);


                  $headingDescArray = array($heading5,$heading6,$heading7,$heading8,$heading9);
                  $headingDescDb = implode(';',$headingDescArray);

                  $upitubacp1="INSERT INTO product VALUES('','$produkt',$categorie,1,$stucke,$stucke,$price,$price1,'$description','$textDb','$headingDb','$descsDb','$heading10','$headingDescDb',$bild',$date,0)";
                  $resultubacp = $conn->query($upitubacp1)or die("losee".mysqli_error($conn));
                      }
                  ?>
                </form>

            </div>
        </div>
    </div>
</section>

</body>
</html>
