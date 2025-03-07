
<?php
require_once 'config\config.php';
require_once 'lib\conexion\loginpdo.class.php';
require_once 'lib\errorreporting\errorreporting.class.php';
$er = new errorreporting(TRUE,TRUE,TRUE,TRUE);
$er->errorreporting();

$db = new loginpdo();

$db->comprobar("usuario");


?>
<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html lang="en">

  <head>
    


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Bootstrap Responsive Template</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body id="page-top">

<!--====================================================
                         HEADER
======================================================--> 

    <header>

      <!-- Top Navbar  -->
      <div class="top-menubar">
        <div class="topmenu">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <ul class="list-inline top-contacts">
                  <li>
                    <i class="fa fa-envelope"></i> Email: <a href="mailto:info@themeborn.com">info@themeborn.com</a>
                  </li>
                  <li>
                    <i class="fa fa-phone"></i> Hotline: (1) 111 222 33
                  </li>
                </ul>
              </div> 
              <div class="col-md-5">
                <ul class="list-inline top-data">
                  <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                  <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                  <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                  <!--<li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>  -->
                  <li><a href="../loginbootstrap.php" class="log-top" >Logearse</a></li>
                  <li><a href="../registerbootstrap.php" class="log-top" >Registro</a></li>
                  <li><a href="../logout.php" class="log-top" >Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </div> 
      
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
        <div class="container">
          <a class="navbar-brand smooth-scroll" href="indexbootstrap.php">
            <img src="img/logo-s.png" alt="logo">
          </a> 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
          </button>  
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" ><a class="nav-link smooth-scroll" href="indexbootstrap.php">Home</a></li>
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="about.php">About Us</a>
                    <a class="dropdown-item" href="careers.php">Career Oprtunity</a>
                    <a class="dropdown-item" href="team.php">Meet Our Team</a>
                    <a class="dropdown-item" href="faq.php">FAQ</a>
                    <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                  </div>
                </li>
                <li class="nav-item" ><a class="nav-link smooth-scroll" href="services.php">Services</a></li> 
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ejercicios</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink"> 
                    <a class="dropdown-item"  target="_self" href="crud.php">CRUD 1</a> 
                    <a class="dropdown-item"  target="_self" href="plantillanormalcrud.php">CRUD 2</a>
                    <a class="dropdown-item"  target="_self" href="crudpdo.php">CRUD 2</a>
                    <a class="dropdown-item"  target="_self" href="emailme.php">Email</a> 
                    <a class="dropdown-item"  target="_self" href="plantillanormal.php">Plantilla normal</a> 
                    <a class="dropdown-item"  target="_self" href="ejercicio1.php">Ejercicio 1</a> 
                    <a class="dropdown-item"  target="_self" href="ejercicio2.php">Ejercicio 2</a> 
                    <a class="dropdown-item"  target="_self" href="ejercicio3.php">Ejercicio 3</a> 
                    <a class="dropdown-item"  target="_self" href="ejercicio4.php">Ejercicio 4</a> 
                    <a class="dropdown-item"  target="_self" href="ejercicio5.php">Ejercicio 5</a> 
                    <a class="dropdown-item"  target="_self" href="ejercicio6.php">Ejercicio 6</a> 
                    <a class="dropdown-item"  target="_self" href="ejercicio7.php">Ejercicio 7</a> 
                     
          
                  </div>
                </li>
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="news-list.php">News list layouts</a>
                    <a class="dropdown-item" href="news-grid.php">News grid layouts</a>
                    <a class="dropdown-item" href="news-details.php">News Details</a> 
                    <a class="dropdown-item" href="project.php">Project</a>
                    <a class="dropdown-item" href="contact.php">Contact Us</a>
                    <a class="dropdown-item" href="comming-soon.php">Comming Soon</a>
                    <a class="dropdown-item" href="pricing.php">Pricing Tables</a>
                    <a class="dropdown-item" href="admin/404.php">404</a>
                  </div>
                </li>
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a> 
                  <div class="dropdown-menu dropdown-cust mega-menu" aria-labelledby="navbarDropdownMenuLink">
                    <div class="row">
                      <div class="col-md-5">
                        <a class="dropdown-item" href="shop.php">Shop Detail</a>
                        <a class="dropdown-item" href="single-product.php">Single Product</a>
                        <a class="dropdown-item" href="cart.php">Cart</a>
                        <a class="dropdown-item" href="checkout.php">Checkout</a>
                        <a class="dropdown-item" href="myaccount.php">Myaccount</a>
                      </div>
                      <div class="col-md-7 mega-menu-img m-auto text-center pl-0">
                        <a href="#"><img src="img/offer_icon.png" alt="" class="img-fluid"></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <i class="search fa fa-search search-btn"></i>
                  <div class="search-open">
                    <div class="input-group animated fadeInUp">
                      <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2">Go</span>
                    </div>
                  </div>
                </li> 
                <li>
                  <div class="top-menubar-nav">
                    <div class="topmenu ">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-9">
                            <ul class="list-inline top-contacts">
                              <li>
                                <i class="fa fa-envelope"></i> Email: <a href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                              </li>
                              <li>
                                <i class="fa fa-phone"></i> Hotline: (1) 396 4587 99
                              </li>
                            </ul>
                          </div> 
                          <div class="col-md-3">
                            <ul class="list-inline top-data">
                              <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                              <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                              <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                                  <!--<li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>  -->
                  <li><a href="../loginbootstrap.php" class="log-top" >Logearse</a></li>
                  <li><a href="../registerbootstrap.php" class="log-top" >Registro</a></li>
                  <li><a href="../logout.php" class="log-top" >Logout</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </li>
            </ul>  
          </div>
        </div>
      </nav>
    </header> 

<!--====================================================
                    LOGIN OR REGISTER
======================================================-->
    <!--<section id="login">
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header" align="center">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span class="fa fa-times" aria-hidden="true"></span>
                      </button>
                  </div>
                  <div id="div-forms">
                      <form id="login-form">
                          <h3 class="text-center">Login</h3>
                          <div class="modal-body">
                              <label for="username">Username</label> 
                              <input id="login_username" class="form-control" type="text" placeholder="Enter username " required>
                              <label for="username">Password</label> 
                              <input id="login_password" class="form-control" type="password" placeholder="Enter password" required>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox"> Remember me
                                  </label>
                              </div>
                          </div>
                          <div class="modal-footer text-center">
                              <div>
                                  <button type="submit" class="btn btn-general btn-white">Login</button>
                              </div>
                              <div>
                                  <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                              </div>
                          </div>
                      </form>
                      <form id="register-form" style="display:none;">
                          <h3 class="text-center">Register</h3>
                          <div class="modal-body"> 
                              <label for="username">Username</label> 
                              <input id="register_username" class="form-control" type="text" placeholder="Enter username" required>
                              <label for="register_email">E-mailId</label> 
                              <input id="register_email" class="form-control" type="text" placeholder="Enter eMail" required>
                              <label for="register_password">Password</label> 
                              <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                          </div>
                          <div class="modal-footer">
                              <div>
                                  <button type="submit" class="btn btn-general btn-white">Register</button>
                              </div>
                              <div>
                                  <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </section>      
-->
<!--====================================================
                         HOME
======================================================-->
    <section id="home">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"> 
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active slides">
              <div class="overlay"></div>
              <div class="slide-1"></div>
                <div class="hero ">
                  <hgroup class="wow fadeInUp">
                      <h1>We Help <span ><a href="" class="typewrite" data-period="2000" data-type='[ " Business", " Startup"]'>
                        <span class="wrap"></span></a></span> </h1>        
                      <h3>The next big idea is waiting for its next big changer</h3>
                  </hgroup>
                  <button class="btn btn-general btn-green wow fadeInUp" role="button">Contact Now</button>
                </div>           
            </div> 
        </div> 
      </div> 
    </section> 

<!--====================================================
                        ABOUT
======================================================-->

    <section id="about" class="about">
      <div class="container">
        <div class="row title-bar">
          <div class="col-md-12">
            <h1 class="wow fadeInUp">Usuario</h1>
            <div class="heading-border"></div>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Businessbox will deliver value to all the stakeholders and will attain excellence and leadership through such delivery of value. We will strive to support the stakeholders in all activities related to us. Businessbox provide great things.</p>
            <div class="title-but"><button class="btn btn-general btn-green" role="button">Read More</button></div>
          </div>
        </div>
      </div>  
      <!-- About right side withBG parallax -->
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-md-4 bg-starship">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.3s">
              <i class="fa fa-snowflake-o"></i>
              <h5>Thoughts Leadership Platform</h5>
              <p class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
          </div> 
          <div class="col-md-4 bg-chathams">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.5s">
              <i class="fa fa-circle-o-notch"></i>
              <h5>Corporate world Platform</h5>
              <p class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
          </div> 
          <div class="col-md-4 bg-matisse">
            <div class="about-content-box wow fadeInUp" data-wow-delay="0.7s">
              <i class="fa fa-hourglass-o"></i>
              <h5>End to End Testing Platform</h5>
              <p class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
          </div> 
        </div> 
      </div>       
    </section> 

<!--====================================================
                        OFFER
======================================================-->
    <section id="comp-offer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.2s">
            <h2>What We Offer</h2>
            <div class="heading-border-light"></div> 
            <button class="btn btn-general btn-green" role="button">See Curren Offers</button>
            <button class="btn btn-general btn-white" role="button">Contact Us Today</button>
          </div>
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-11.jpg" class="img-fluid" alt="...">
              </div>
              <h3>Business Management</h3>
              <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
          </div>          
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.6s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-13.jpg" class="img-fluid" alt="...">
              </div>              
              <h3>Leadership Development</h3>
              <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.8s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-14.jpg" class="img-fluid" alt="...">
              </div>
              <h3>Social benefits and services</h3>
              <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--====================================================
                     WHAT WE DO
======================================================-->
    <section class="what-we-do bg-gradiant">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <h3>What we Do</h3>
            <div class="heading-border-light"></div> 
            <p class="desc">We partner with clients to put recommendations into practice. </p>
          </div>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-4  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-briefcase"></i>
                  <h6>Workspace</h6>
                  <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
              </div>
              <div class="col-md-4  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-shopping-bag"></i>
                  <h6>Storefront</h6>
                  <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
              </div>
              <div class="col-md-4  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-building-o"></i>
                  <h6>Apartments</h6>
                  <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
              </div>
              <div class="col-md-4  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-bed"></i>
                  <h6>Hotels</h6>
                  <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
              </div>
              <div class="col-md-4  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-hourglass-2"></i>
                  <h6>Concept</h6>
                  <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
              </div>
              <div class="col-md-4  col-sm-6">
                <div class="what-we-desc">
                  <i class="fa fa-cutlery"></i>
                  <h6>Restaurant</h6>
                  <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section> 

<!--====================================================
                      STORY
======================================================--> 
    <section id="story">
        <div class="container">
          <div class="row title-bar">
            <div class="col-md-12">
              <h1 class="wow fadeInUp">Our Success Tranformation Story</h1>
              <div class="heading-border"></div> 
            </div>
          </div>
        </div>  
        <div class="container-fluid">
          <div class="row" >
            <div class="col-md-6" >
              <div class="story-himg" >
                <img src="img/image-4.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="story-desc">
                <h3>How to grow world with Us</h3>
                <div class="heading-border-light"></div> 
                <p>Everyone defines success differently – as much as there are people, there are different opinions. Number one in our priority list is the success of our students, alumni and their employers. We work hard in the name of the success of our alumni – being among the best and holding the high employment rate. Many desktop publishing packages and web page editors now use Lorem Ipsum.. </p>
                <p>You can find some thoughts on success from our students and alumni here – every story is unique, but this is what success is. Everybody sees it differently. Many desktop publishing packages and web page editors now use Lorem Ipsum.</p>
                <p class="text-right" style="font-style: italic; font-weight: 700;"><a href="#">Businessbox</a></p>
                <div class="title-but"><button class="btn btn-general btn-green" role="button">Read More</button></div>
              </div>
            </div>
          </div>
        </div>  
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"> 
              <div class="story-descb">
                  <img src="img/news/news-10.jpg" class="img-fluid" alt="...">
                  <h6>Virtual training systems</h6>
                  <p>Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Read More</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"> 
              <div class="story-descb">
                  <img src="img/news/news-2.jpg" class="img-fluid" alt="...">
                  <h6>Design planning</h6>
                  <p>Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  <a href=""><i class="fa fa-arrow-circle-o-right"></i> Read More</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"> 
              <div class="story-descb">
                  <img src="img/news/news-8.jpg" class="img-fluid" alt="...">
                  <h6>Remote condition monitoring</h6>
                  <p>Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  <a href=""><i class="fa fa-arrow-circle-o-right"></i> Read More</a>
              </div>
            </div>                        
          </div>
        </div>  
    </section>

<!--====================================================
                  COMPANY THOUGHT
======================================================-->
    <div class="overlay-thought"></div>
    <section id="thought" class="bg-parallax thought-bg">
      <div class="container">
        <div id="thought-desc" class="row title-bar title-bar-thought owl-carousel owl-theme">
          <div class="col-md-12 ">
            <div class="heading-border bg-white"></div>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Businessbox will deliver value to all the stakeholders and will attain excellence and leadership through such delivery of value. We will strive to support the stakeholders in all activities related to us. Businessbox provide great things.</p>
            <h6>John doe</h6>
          </div>
          <div class="col-md-12 thought-desc">
            <div class="heading-border bg-white"></div>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Ensuring quality in Businessbox is an obsession and the high quality standards set by us are achieved through a rigorous quality assurance process. Quality assurance is performed by an independent team of trained experts for each project. </p>
            <h6>Tom John</h6>
          </div>
        </div>
      </div>         
    </section> 
    
<!--====================================================
                   SERVICE-HOME
======================================================--> 
    <section id="service-h">
        <div class="container-fluid">
          <div class="row" >
            <div class="col-md-6" >
              <div class="service-himg" > 
                <iframe src="https://www.youtube.com/embed/754f1w90gQU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-h-desc">
                <h3>We are Providing great Services</h3>
                <div class="heading-border-light"></div> 
                <p>Businessbox offer the full spectrum of services to help organizations work better. Everything from creating standards of excellence to training your people to work in more effective ways.</p>  
              <div class="service-h-tab"> 
                <nav class="nav nav-tabs" id="myTab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Developing</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Training</a> 
                  <a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">Medical</a> 
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute. exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute. </p></div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute</p>
                  </div> 
                  <div class="tab-pane fade" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                    <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute</p>
                  </div> 
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>  
    </section>

<!--====================================================
                      CLIENT
======================================================-->
    <section id="client" class="client">
      <div class="container">
        <div class="row title-bar">
          <div class="col-md-12">
            <h1 class="wow fadeInUp">Our Client Say</h1>
            <div class="heading-border"></div>
            <p class="wow fadeInUp" data-wow-delay="0.4s">We committed to helping you maintain your Brand Value.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="client-cont wow fadeInUp" data-wow-delay="0.1s">
              <img src="img/client/avatar-6.jpg" class="img-fluid" alt="">
              <h5>Leesa len</h5>
              <h6>DSS CEO & Cofounder</h6>
              <i class="fa fa-quote-left"></i>
              <p>The Businessbox service - it helps fill our Business, and increase our show up rate every single time.</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="client-cont wow fadeInUp" data-wow-delay="0.3s">
              <img src="img/client/avatar-2.jpg" class="img-fluid" alt="">
              <h5>Dec Bol</h5>
              <h6>TEMS founder</h6>
              <i class="fa fa-quote-left"></i>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
            </div>
          </div>
        </div>
      </div>        
    </section>  

<!--====================================================
                    CONTACT HOME
======================================================-->
    <div class="overlay-contact-h"></div>
    <section id="contact-h" class="bg-parallax contact-h-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-h-cont">
              <h3 class="cl-white">Continue The Conversation</h3><br>
              <form>
                <div class="form-group cl-white">
                  <label for="name">Your Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name"> 
                </div>  
                <div class="form-group cl-white">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
                </div>  
                <div class="form-group cl-white">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" aria-describedby="subjectHelp" placeholder="Enter subject"> 
                </div>  
                <div class="form-group cl-white">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" rows="3"></textarea>
                </div>  
                <button class="btn btn-general btn-white" role="button"><i fa fa-right-arrow></i>GET CONVERSATION</button>
              </form>
            </div>
          </div>
        </div>
      </div>         
    </section> 

<!--====================================================
                       NEWS
======================================================-->
    <section id="comp-offer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6  desc-comp-offer wow fadeInUp" data-wow-delay="0.2s">
            <h2>Latest News</h2>
            <div class="heading-border-light"></div> 
            <button class="btn btn-general btn-green" role="button">See More</button>
          </div>
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-1.jpg" class="img-fluid" alt="...">
              </div>
              <h3>Pricing Strategies for Product</h3>
              <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from Business box. </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.6s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-9.jpg" class="img-fluid" alt="...">
              </div>
              <h3>Design Exhibitions of 2017</h3>
              <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from Business box. </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.8s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-12.jpeg" class="img-fluid" alt="...">
              </div>
              <h3>Exciting New Technologies</h3>
              <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from Business box. </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--====================================================
                      FOOTER
======================================================--> 
    <footer> 
        <div id="footer-s1" class="footer-s1">
          <div class="footer">
            <div class="container">
              <div class="row">
                <!-- About Us -->
                <div class="col-md-3 col-sm-6 ">
                  <div><img src="img/logo-w.png" alt="" class="img-fluid"></div>
                  <ul class="list-unstyled comp-desc-f">
                     <li><p>Businessbox is a corporate business theme. You can customize what ever you think to make your website much better from your great ideas. </p></li> 
                  </ul><br> 
                </div>
                <!-- End About Us -->

                <!-- Recent News -->
                <div class="col-md-3 col-sm-6 ">
                  <div class="heading-footer"><h2>Useful Links</h2></div>
                  <ul class="list-unstyled link-list">
                    <li><a href="about.php">About us</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="project.php">Project</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="careers.php">Career</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="faq.php">FAQ</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="contact.php">Contact us</a><i class="fa fa-angle-right"></i></li> 
                  </ul>
                </div>
                <!-- End Recent list -->

                <!-- Recent Blog Entries -->
                <div class="col-md-3 col-sm-6 ">
                  <div class="heading-footer"><h2>Recent Post Entries</h2></div>
                  <ul class="list-unstyled thumb-list">
                    <li>
                      <div class="overflow-h">
                        <a href="#">Praesent ut consectetur diam.</a>
                        <small>02 OCT, 2017</small>
                      </div>
                    </li>
                    <li>
                      <div class="overflow-h">
                        <a href="#">Maecenas pharetra tellus et fringilla.</a>
                        <small>02 OCT, 2017</small>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- End Recent Blog Entries -->

                <!-- Latest Tweets -->
                <div class="col-md-3 col-sm-6">
                  <div class="heading-footer"><h2>Get In Touch</h2></div>
                  <address class="address-details-f">
                    25, Dist town Street, Logn <br>
                    California, US <br>
                    Phone: 800 123 3456 <br>
                    Fax: 800 123 3456 <br>
                    Email: <a href="mailto:info@Businessbox.com" class="">info@Businessbox.com</a>
                  </address>  
                  <ul class="list-inline social-icon-f top-data">
                    <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                  </ul>
                </div>
                <!-- End Latest Tweets -->
              </div>
            </div><!--/container -->
          </div> 
        </div>

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="footer-copyrights">
                            <p>Copyrights &copy; 2017 All Rights Reserved by Businessbox. <a href="#">Privacy Policy</a> <a href="#">Terms of Services</a></p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>

    <!--Global JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/wow/wow.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script> 
    <script src="js/custom.js"></script> 
  </body>

</html>
