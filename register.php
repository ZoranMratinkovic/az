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
                    $lNameErr = "Nachname eingeben!";
                    $errors[] = "Lname";
            }
            else
            {
                    $lName = test_input($_POST['last_name']);

                    if(!preg_match("/^[A-z]{2,35}$/",$lName))
                    {
                        $lNameErr = "Ihr nachname wurde nicht richtig geschrieben!";
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

                    if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$pass_reg))
                    {
                        $passErr = "Password mindestens 8 buchstaben und 1 ziffer";
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
                        echo "<script>alert('Ihr Password ist genügend sicher!');</script>";
                    }
                    else
                    {
                              $errors[] = "Pass1 err";
                              $passErr1 = "Passwörter stimmen nicht überrein";
                              echo "<script>alert('Passwörter nicht gleich!');</script>";
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
                      $emailErr = "Email form nicht richtig";
                      $errors[] = "email err";
                    }
            }
            //info verification end

            //it errors exist
            if(count($errors) != 0)
            {
                     echo "<script>alert('Es sind fehler aufgetreten bitte versuchen sie es erneut');</script>";
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

                        alert('es besteht bereits ein user mit dieser email adresse');
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
                        // $mail->isSMTP();
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
                              <b><a href='www.qoqa.alpikom.rs/verify.php?hash={$hash_ver}&email={$email}'>Click on this link to activate your account:</a></b>

                          ";
                          $mail->AltBody = "Your name is: $fName $lName";

                          if(!$mail->send())
                          {
                              echo "Mailer Error: " . $mail->ErrorInfo;
                               echo "<script>alert('verifikations email nicht gesendet!');</script>";
                          }
                          else
                          {
                               echo "<script>alert('Bitte verifizieren sie ihre email adresse');</script>";
                          }
                      }      //query successful ends
                      else
                      {
                        echo "<script>alert('Sie haben sich erfolgreich registriert');</script>";
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
                                <h2>Registration</h2>
                                <p id="neuspeh" >Hier können sie sich registrieren.</p>
                            </div>

                            <form action="#" id="formid" class="wow fadeIn" data-wow-duration="2s" method="POST">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="first name" required="">
                                        <span class="error"> <?php echo $fNameErr;?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="last name" required="">
                                        <span class="error"> <?php echo $lNameErr;?></span>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                        <span class="error"> <?php echo $emailErr;?></span>
                                    </div> <!-- end of form-group -->

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="pass" required="">
                                        <span class="error"> <?php echo $passErr;?></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Repeat password" name="pass1" required="">
                                        <span class="error"> <?php echo $passErr1;?></span>
                                    </div>


                                    <div class="center-content">
                                        <input type="submit" value="Submit" class="btn larg-btn" name="submit_register">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div> <!-- end of container -->
        </section>
