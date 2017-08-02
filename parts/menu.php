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
                             <li><a href="index.php" class="">HOME</a></li>
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
                                            <p>Ovde ide opis l</p>
                                            <p>Ovde ide opis l</p>
                                        </div>
                                        <div class="rightt">
                                            <p>100 CHFR</p>
                                            <p>80 CHFR</p>
                                        </div>


                                      </div>
                                  </div>
                                </li>
                            </a>

                                <a href="#"><li>Link 2</li></a>
                            </ul>
                            </li>
                            <li><a href="#" class="">Discribe</a></li>
                            <li><a href="#pricing" class="">Pricing</a></li>
                            <li><a href="#downloadApps" class="">Download</a></li>
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