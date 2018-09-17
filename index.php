<?php
  session_start();
  if(isset($_SESSION['id'])){
    header("Location: templates/account.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eastern Telecom Credit Cooperative</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/mdb.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">
</head>

<body onload="slowMotion()">
<nav class="navbar navbar-expand navbar-light static-top">
    <div class="container">
        <a class="navbar-brand mr-1" href="#">Eastern Telecom Credit Cooperative   </a>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <!-- <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
                <span>Mark Fantone</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <h6 class="dropdown-header">Services</h6>
                    <a class="dropdown-item" href="loan"><i class="fas fa-hand-holding-usd"></i>  Loan</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-piggy-bank"></i>  Savings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fas fa-key"></i>  Change Password</a>
                    <a class="dropdown-item" href="../php/logout"><i class="fas fa-sign-out-alt"></i>  Logout</a>
                    </div>
                </div>
            </li> -->
        </ul>
    </div>
</nav>

<!-- Masthead -->
    <header class="masthead text-white text-center" style="background-color: #f3f3f3;">
        <video autoplay loop muted id="vid" style="width: 100%; position: absolute; top: 0; left: 0; max-height: 100%; object-fit: fill;">
            <source src="assets/video-background.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Build a landing page for your business or project and generate more leads!</h1>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                        <!-- <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                        </div> -->
                        <div class="col-6 col-md-6 pl-5 pr-5">
                            <a href="#" class="btn btn-block btn-lg btn-success" data-toggle="modal" data-target="#modalLRForm">Login</a>
                        </div>
                        <div class="col-6 col-md-6 pl-5 pr-5">
                            <a href="templates/registration" class="btn btn-block btn-lg btn-success">Join us</a>
                        </div>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                      <i class="icon-screen-desktop m-auto text-primary"></i>
                    </div>
                    <h3>Vision</h3>
                    <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                      <i class="icon-layers m-auto text-primary"></i>
                    </div>
                    <h3>Mission</h3>
                    <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                      <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3>Goals</h3>
                    <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                  </div>
                </div>
              </div>
            </div>
    </section>
    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
      
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/landing-page-img1.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Fully Responsive Design</h2>
                <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
            </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/landing-page-img2.jpg');"></div>
                <div class="col-lg-6 my-auto showcase-text">
                  <h2>Updated For Bootstrap 4</h2>
                  <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
                </div>
              </div>
            <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/landing-page-img3.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Easy to Use &amp; Customize</h2>
                <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
            </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
            <div class="container">
              <h2 class="mb-5">What people are saying...</h2>
              <div class="row">
                <div class="col-lg-4">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
                    <h5>Margaret E.</h5>
                    <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
                    <h5>Fred S.</h5>
                    <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
                    <h5>Sarah	W.</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
      
          <!-- Call to Action -->
          <section class="call-to-action text-white text-center">
            <div class="overlay"></div>
            <div class="container">
              <div class="row">
                <div class="col-xl-9 mx-auto">
                  <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                  <form>
                    <div class="form-row">
                      <div class="col-12 col-md-9 mb-2 mb-md-0">
                        <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                      </div>
                      <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>

           <!-- Footer -->
           <footer class="footer bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                  <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                      <a href="#">About</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                      <a href="#">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                      <a href="#">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                      <a href="#">Privacy Policy</a>
                    </li>
                  </ul>
                  <p class="text-muted small mb-4 mb-lg-0">&copy; Eastern Telecom Credit Cooperative 2018. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                      <a href="#">
                        <i class="fa fa-facebook fa-2x fa-fw"></i>
                      </a>
                    </li>
                    <li class="list-inline-item mr-3">
                      <a href="#">
                        <i class="fa fa-twitter fa-2x fa-fw"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-instagram fa-2x fa-fw"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>

    <!--Modal: Login-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 success-color darken-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <!--Body-->
                        <div class="modal-body mb-1">
                          <form id="form">
                            <span id="err_msg" class="text-danger"></span>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="email" class="form-control form-control-sm" name="email" required>
                                <label for="modalLRInput10">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="password" class="form-control form-control-sm" name="password" required>
                                <label for="modalLRInput11">Your password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info" id="signin">Log in <i class="fas fa-sign-in-alt ml-1"></i></button>
                            </div>
                          </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="templates/registration.php" class="blue-text">Sign Up</a></p>
                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>


</body>
</html>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        var video = document.getElementById('vid');

        function slowMotion(){
        video.playbackRate = 0.5;
        }
    </script>
    <script type="text/javascript">
        $("#signin").click(function(e){
          e.preventDefault();
          $.ajax({
            url: 'includes/signin.php',
            type: 'POST',
            dataType: 'JSON',
            data: $('#form').serialize(),
            success: function(msg){ 
              localStorage.setItem('token', msg[0]['api_key']);
              window.location = 'templates/account.php';
            },
            error: function(){
              var err_msg = "Login Failed, User not found!";
              
              document.getElementById('err_msg').innerHTML = err_msg;
            }
          });
        });
    </script>
