<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>
<!-- <div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
 -->

<!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?= Yii::$app->request->baseUrl ?>/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="<?= Yii::$app->request->baseUrl ?>/images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.html"> Home  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact us</a>
                                 </li>
                              </ul>
                              <div class="sign_btn"><a href="#">Sign in</a></div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1>Computer and <br>laptop shop</h1>
                           <strong>Free Multipurpose Responsive</strong>
                           <span>Landing Page 2019</span>
                           <a href="#">Buy Now</a>
                        </div>
                     </div>
                     <div class="col-md-7 padding_right1">
                        <div class="text-img">
                           <figure><img src="images/top_img.png" alt="#"/></figure>
                           <h3>01</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <!-- end banner -->
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>About Pcoint</h2>
                     <span>d to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum gener</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2 ">
                  <div class="about_box ">
                     <figure><img src="images/about_img.png" alt="#"/></figure>
                     <a class="read_more" href="#">Read more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      <!-- best -->
      <div id="" class="best">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Build With Best </h2>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="best_box">
                     <h4>500GB <br>Micro SD Card</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t dolor in reprehenderit in voluptate velit</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="best_box">
                     <h4>100GB <br> Internal Ram</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t dolor in reprehenderit in voluptate velit</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="best_box">
                     <h4>100% <br> High Quality</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t dolor in reprehenderit in voluptate velit</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read more</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end best -->
      <!-- request -->
      <div id="contact" class="request">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request a Call back</h2>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>
                     incididunt ut labore et dolore magna</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="black_bg">
                     <div class="row">
                        <div class="col-md-7 ">
                           <form class="main_form">
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Nmae" type="text" name="Nmae">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Phone number" type="text" name=" Phone number">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="text" name="Email">
                                 </div>
                                 <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message "> Message </textarea>
                                 </div>
                                 <div class="col-sm-12">
                                    <button class="send_btn">Send</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="col-md-5">
                           <div class="mane_img">
                              <figure><img src="images/mane_img.jpg" alt="#"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end request -->
      <!-- two_box section -->
      <div  class="two_box">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="two_box_img">
                     <figure><img src="images/leptop.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="two_box_img">
                     <h2><span class="offer">15% </span>0ffer everyday</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end two_box section -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <h3>Michl ro</h3>
                                          <p><i class="padd_rightt0"><img src="images/te1.png" alt="#"/></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <i class="padd_leftt0"><img src="images/te2.png" alt="#"/></i> <br>form, by injected humour, or randomised words which don't look even slightly believable</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <h3>Michl ro</h3>
                                          <p><i class="padd_rightt0"><img src="images/te1.png" alt="#"/></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <i class="padd_leftt0"><img src="images/te2.png" alt="#"/></i> <br>form, by injected humour, or randomised words which don't look even slightly believable</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <h3>Michl ro</h3>
                                          <p><i class="padd_rightt0"><img src="images/te1.png" alt="#"/></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <i class="padd_leftt0"><img src="images/te2.png" alt="#"/></i> <br>form, by injected humour, or randomised words which don't look even slightly believable</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="cont">
                        <h3> <strong class="multi"> Free Multipurpose</strong><br>
                           Responsive Landing Page 2019
                        </h3>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="cont_call">
                        <h3> <strong class="multi"> Call Now</strong><br>
                           (+1) 12345667890
                        </h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->