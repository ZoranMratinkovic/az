<?php

      $fNameErr = $lNameErr = $emailErr = $passErr = $passErr1 = "";
      $fName = $lName = $email = $pass_reg = $pass1 = $hash_ver = "";
      $errors = array();
      $id_role = 2; $pass_hashed = $id = "      ";
      $options =
      [

        'cost' => 12,
      ];
        function test_input($data)
        {
              $data = trim($data);
              $data = stripcslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }

      if(isset($_POST['submit_register']))
      {
          //firstNAme
          if(empty($_POST["first_name"]))
          {
              $fNameErr = "Name is required";
              $errors[] = "fName";
          }
          else
          {
              $fName = test_input($_POST["first_name"]);

              if(!preg_match("/^[A-z]{2,35}$/",$fName)){
                  $fNameErr = "3-36 characters";
                  $errors[] = "fName";
              }
          }
          //firstNAme
          //lastName
          if(empty($_POST['last_name']))
          {
                  $lNameErr = "Last Name required";
                  $errors[] = "Lname";
          }
          else
          {
                  $lName = test_input($_POST['last_name']);

                  if(!preg_match("/^[A-z]{2,35}$/",$lName))
                  {
                      $lNameErr = "Last name not well formed";
                      $errors[] = "Lname preg match";
                  }
          }
          //lastName

          //password
          if(empty($_POST['pass']))
          {
                  $passErr = "Password required!";
                  $errors[] = "Pass error";
          }
          else
          {
                  $pass_reg = test_input($_POST["pass"]);

                  if(!preg_match("/^[a-zA-Z0-9!@#$%^&*-_]{6,}$/",$pass_reg))
                  {
                      $passErr = "Password nicht gut";
                      $errors[] = "Pass error";
                  }
                  else
                  {
                      $pass_hashed = password_hash($pass_reg,PASSWORD_BCRYPT,$options);
                      //$pass_hashed = trim($pass_hashed);

                  }
          }
          //password

          //password1
          if(empty($_POST['pass1']))
          {
                  $passErr1 = "This field is required";
                  $errors[] = "Pass1 err";
          }
          else
          {

                  $pass1 = test_input($_POST['pass1']);
                  $verify = password_verify($pass1,$pass_hashed);

                  if($verify)
                  {
                      echo "<script>alert('u redu su');</script>";
                  }
                  else
                  {
                            $errors[] = "Pass1 err";
                            $passErr1 = "Passwords don't match";
                            echo "<script>alert('nisu iste sifre');</script>";
                  }

          }
          //password1

          //email
          if (empty($_POST["email"]))
          {
                    $emailErr = "Email is required";
                    $errors[] = "Email";
          }
          else
          {

                  $email = test_input($_POST["email"]);
                  // check if e-mail address is well-formed

                  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                  {
                    $emailErr = "Invalid email format";
                    $errors[] = "email err";
                  }
          }
          //info verification end

          //it errors exist
          if(count($errors) != 0)
          {
                   echo "<script>alert('Ima gresaka');</script>";
          }
          else
          {

              include("connectionFile/connection.php");
             //if user with that email already exists
              $stmt = $conn-> prepare("SELECT u.email FROM user u INNER JOIN role r ON u.id_role = r.id_role WHERE email=?");
              $stmt->bind_param("s",$email);
              $stmt->execute();
              $result = $stmt->get_result();
              if($result->num_rows > 0)
              {

                echo"
                  <script>

                      alert('Postoji takav user');
                      window.location.href='index.php?page=login';
                  </script>";
                   $stmt->close();

              }
              else
              {

                    $stmt->close();
                    $hash_ver = md5(rand(0,1000));
                    $status = "";
                    $stm = $conn->prepare("INSERT INTO user VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

                    $stm->bind_param("sssssssi",$id,$pass_hashed,$email,$fName,$lName,$hash_ver,$status,$id_role);

                    $stm->execute();
                    echo strlen($pass_hashed);
                    //send mail after inserting into database
                    if($stm)
                    {
                      echo "<script>alert('Upis izvrsen');</script>";

                        include('phpmailer/PHPMailerAutoload.php');
                        include("connectionFile/define.php");
                        $mail = new PHPMailer;

                        //Enable SMTP debugging.
                        //$mail->SMTPDebug = 3; -> client ---> server dialog
                        //Set PHPMailer to use SMTP.
                       $mail->isSMTP();
                        //Set SMTP host name
                        $mail->Host = "smtp.gmail.com";
                        //Set this to true if SMTP host requires authentication to send email
                        $mail->SMTPAuth = true;
                        //Provide username and password
                        $mail->Username = USERNAME;
                        $mail->Password = PASSWORD;
                        //If SMTP requires TLS encryption then set it
                        $mail->SMTPSecure = "tls";
                        //Set TCP port to connect to
                        $mail->Port = 587;

                        $mail->From = EMAIL;
                        $mail->FromName = NAME;

                        $mail->addAddress($email, $fName);

                        $mail->isHTML(true);

                        $mail->Subject = "Subject Text";
                        $mail->Body = "

                            <i>Your name is: $fName $lName</i><br/>
                            <i>Your password is: {$_POST['pass']}</i>
                            <b><a href='localhost/qoqa/az/verify.php?hash={$hash_ver}&email={$email}'>Click on this link to activate your account:</a></b>

                        ";
                        $mail->AltBody = "Your name is: $fName $lName";

                        if(!$mail->send())
                        {
                            echo "Mailer Error: " . $mail->ErrorInfo;
                             echo "<script>alert('mail nije poslat');</script>";
                        }
                        else
                        {
                             echo "<script>alert('mail poslat');</script>";
                        }
                    }      //query successful ends
                    else
                    {
                      echo "<script>alert('Upis nije izvrsen');</script>";
                    }

              }            //unique email ends

          }                //no errors end
      }


 ?>


<!-- message section -->

      <section id="message">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-sm-12">
                      <div class="message_content">
                          <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                              <h2>Account Informationen</h2>
                              <p id="neuspeh" >Hier können Sie Accountinformationen umändern</p>
                          </div>

                          <form action="#" id="formid" class="wow fadeIn" data-wow-duration="2s" method="POST">
                              <div class="col-sm-6">
                                <?php  if(isset($_SESSION['name'])){

                                $upitchange="SELECT * FROM user where id_user=".$_SESSION['id_user'];
                                $result111 = $conn->query($upitchange)or die("bat upit");
                                $r1=mysqli_fetch_array($result111);



                                ?>
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="first_name" placeholder="first name" required="" value="<?php echo $r1['name'];?>">
                                      <span class="error"> <?php echo $fNameErr;?></span>
                                  </div>
                              </div>

                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="last_name" placeholder="last name" value="<?php echo $r1['last_name'];?>" required="">
                                      <span class="error"> <?php echo $lNameErr;?></span>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="strasse" placeholder="Strasse Huausnummer" value="<?php echo $r1['strasse'];?>" required="">
                                      <span class="error"> <?php echo $lNameErr;?></span>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="kanton" placeholder="Kanton,postleitzahl" value="<?php echo $r1['platz'];?>" required="">
                                      <span class="error"> <?php echo $lNameErr;?></span>
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="telefon" placeholder="Telefon" value="<?php echo $r1['telefon'];?>" required="">
                                      <span class="error"> <?php echo $lNameErr;?></span>
                                  </div>
                              </div>


                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <input type="email" class="form-control" placeholder="Email" value="<?php echo $r1['email'];?>" name="email" required="">
                                      <span class="error"> <?php echo $emailErr;?></span>
                                  </div> <!-- end of form-group -->

                                  <div class="form-group">
                                      <input type="password" class="form-control" placeholder="Passwort" name="pass"  required="">
                                      <span class="error"> <?php echo $passErr;?></span>
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control" placeholder="Passwort Wiederholen" name="pass1" required="">
                                      <span class="error"> <?php echo $passErr1;?></span>
                                  </div>


                                  <div class="center-content">
                                      <input type="submit" value="Informationen Aktualisieren" class="btn larg-btn" name="submit_register1">
                                  </div>
                              </div>
                            <?php   } if(isset($_REQUEST['submit_register1'])){
                                        $name=$_REQUEST['first_name'];
                                        $lastname=$_REQUEST['last_name'];
                                        $email=$_REQUEST['email'];
                                        $password=$_REQUEST['pass'];
                                        $strasse=$_REQUEST['strasse'];
                                        $kanton=$_REQUEST['kanton'];
                                        $telefon=$_REQUEST['telefon'];
                                        $password = password_hash($password,PASSWORD_BCRYPT,$options);
                                            $updateuser="UPDATE user SET name='$name',last_name='$lastname',strasse='$strasse',platz='$kanton',telefon='$telefon',email='$email',password='$password' where id_user=".$_SESSION['id_user'];
                                    $result4 = $conn->query($updateuser)or die("bat upit");
                            } ?>
                          </form>
                      </div>
                  </div>
              </div>


          </div> <!-- end of container -->
      </section>
