  <?php 
       // unset($_SESSION['name']);
        //unset($_SESSION['last_name']);
        $emailErr = $passErr = "";
        $email =$pass_login="";
        $array = array();
        
        function test_input($data)
        {
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }
       
        if(isset($_POST['submit_login']))
        {
            if(empty($_POST['email_login']))
            {
                $emailErr = "You must enter email address";
                $array[] = "Email";
            }
            else
            {
                $email = test_input($_POST['email_login']);

                if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                    $emailErr = "Invalid email format";
                    $errors[] = "Invalid email";
                }
            }

            if(empty($_POST['password_login']))
            {
                $emailErr = "You must enter password";
                $array[] = "password";
            }
            else
            {
                $pass_login = test_input($_POST['password_login']);

                if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$pass_login))
                {
                    $passErr = "Invalid password format";
                    $errors[] = "Invalid password";
                }
            }
            if(count($array) != 0)
            {
                echo "<script>alert('Ima gresaka')</script>";
            }
            else
            {
                include('connectionFile/connection.php');

                $stmt = $conn->prepare("SELECT `name`,`last_name`,`status_verif`,`email`,`password` FROM user WHERE `email`=?");
                $stmt->bind_param("s",$email);
                $stmt->execute();
             
                if($res = $stmt->get_result())
                {
                     $count = $res->num_rows;
                     
                     if($count==1)
                     {
                        
                        $row = $res->fetch_assoc();
                        $passwordb = $row['password'];
                       
                        $verify = password_verify($pass_login,$passwordb);
                       
                        if($verify)
                        {
                            echo "<script>alert('Password match');</script>";
                           
                            if($row['status_verif']==1)
                            {
                                $_SESSION['name'] = $row['name'];
                                $_SESSION['last_name'] = $row['last_name'];
                                echo "<script>window.location.href='index.php'; </script>";
                            }
                            else
                            {
                                echo 
                                "<script>
                                    alert('you must verify your account');
                                    window.location.href='index.php?page=login'; 
                                </script>";
                               
                            }
                        }
                        else
                        {
                           
                            //var_dump($passwordb);
                            echo "<script>alert('Password doesnt match');</script>";
                        }

                     }
                     else
                     {
                        echo "<script>alert('0 rows');</script>";
                     }
                     
                }
                else
                {
                     echo "<script>alert('No rows at all');</script>";
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
                                <h2>Login for better experience</h2>
                                <p>Have feedback, suggestion, or any thought about our app? Feel free to contact us anytime, we will get back to you in 24 hours.</p>
                            </div>

                            <form action="#" id="formid" class="wow fadeIn" data-wow-duration="2s" method="POST">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email_login" placeholder="Email address" required="">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_login" placeholder="Password" required="">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="center-content">
                                        <a href="index.php?page=register">Don't have an account?</a>
                                        <a href="index.php?page=login">Forgot your password?</a>
                                        <input type="submit" value="Login" class="btn larg-btn" name="submit_login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div> <!-- end of container -->
        </section>