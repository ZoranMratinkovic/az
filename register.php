  <?php 

        $fNameErr = $ lNameErr = $emailErr = $passErr = $passErr1 = "";
        $fName = $ lName = $email = $pass = $pass1 = "";
        $errors = array();        
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
                
                if(!preg_match("/^[A-Z][a-z]{2,35}$/"),$fName){
                    $fNameErr = "3-36 characters";
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
                   
                    if(!preg_match("/^[A-Z][a-z]{2,35}$/",$lName))
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
                    $pass = test_input($_POST["pass"]);

                    if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$pass)
                    {
                        $passErr = "Password not well formed";
                        $errors[] = "Pass error";
                    }
                    else
                    {
                        $pass_hashed = password_hash($pass,PASSWORD_DEFAULT);
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
                              echo "<script>alert('nisu iste sifre');</script>";
                    }

            }

        }             
           

   ?>


  <!-- message section -->

        <section id="message">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="message_content">
                            <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                                <h2>Get in Touch</h2>
                                <p>Have feedback, suggestion, or any thought about our app? Feel free to contact us anytime, we will get back to you in 24 hours.</p>
                            </div>

                            <form action="#" id="formid" class="wow fadeIn" data-wow-duration="2s" method="POST" onSubmit="register_check();">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="first name" required="">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="last name" required="">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div> <!-- end of form-group -->

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="pass">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Repeat password" name="pass1">
                                    </div>

                                    <div class="center-content">
                                        <input type="submit_register" value="Submit" class="btn larg-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div> <!-- end of container -->
        </section>