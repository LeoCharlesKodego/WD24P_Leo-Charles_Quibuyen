<?php
session_start();
?>




<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <!-- icon -->
    <link rel="icon" href="images/Yogurt-icon.jpg">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> 

    <!-- site metas -->
    <title>Yogurt E-Hauz</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/rev-bootstrap.min.css">
     <!-- review carousel css -->
    <link rel="stylesheet" href="css/rev-owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Own styling css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  </head>

  <?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>


  <!-- body -->
  <body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#"/></div>
    </div>
    <!-- end loader -->

    <!-- sidepanel -->
    <div id="mySidepanel" class="sidepanel">
      <p href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class='bx bx-x'></i></p>
      <a class="active" href="index.html">Home</a>
      <a href="pages/customer/products.php">Products</a>
      <a href="#nutrition">Nutrition</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
      <a href="pages/customer/cart.php">Cart</a>
    </div>
    <!-- end sidepanel -->

    <!-- header -->
    <header class="full_bg">
        <!-- header inner -->
        <div class="header" style="background-color: #2980b9;">
          <div class="container-fluid">
            <div class="row d_flex">
              <div class=" col-md-2 col-sm-3 col logo_section">
                <div class="full">
                  <div class="center-desk">
                    <div class="logo" id="logo">
                      <div class="logo-img"><img src="images/y-logo5.jpg" alt="#" /></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-10 col-sm-9" >
                <ul class="site_menu text_align_right">
                  <li >
                    <button class="openbtn" onclick="openNav()"><i class='bx bx-menu' ></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end header inner -->
        <!-- end header -->
        <section class="banner_main">
          <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container">
                  <div class="carousel-caption  banner_po">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="build_box text_align_left">
                          <h1>Spoon Up the Goodness!</h1>
                          <h2>With Our Rich, Delicious and Naturaly Healthy Yogurt Products..</h2><br>
                          <h2>We offer a variety of yogurt products for everyone. Worry no more! because we offer <b>100% Money Back Guarantee</b>
                            if you receive your order late or if not satistfied with your order..  </h2>
                          <a class="read_more conatct_btn" href="#contact" role="button">Contact Us</a>
                          <a class="read_more conatct_btn" href="#about" role="button">About Our Shop</a>
                        </div>
                      </div>
                    </div>
                    <strong>best</strong>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container">
                  <div class="carousel-caption banner_po">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="build_box text_align_left">
                          <h1>Reseller Program<br></h1>
                          <h2>We know you love our products, come and join us!</h2><br>
                          <h2>As a Reseller, you will get a lifetime 50% discount plus an unlimited support from our team to scale up your business.</h2>
                          <a class="read_more conatct_btn" href="#reseller-program" role="button">Reseller Program</a>
                          <a class="read_more conatct_btn" href="#about" role="button">About our shop</a>
                        </div>
                      </div>
                    </div>
                    <strong>best</strong>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel"  role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </section>
    </header>
    <!-- end banner -->

    <!-- about -->
    <div id="about" class="about">
      <div class="bg_about">
        <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
          <div class="row d_flex">
            <div class="col-md-5">
                <div class="about_img">
                  <figure><img src="images/comp2.jpg" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="titlepage text_align_right">
                  <h2>About Our Shop</h2>
                  <p> We are a growing company started in 2020 with around ten locations and over a hundred active resellers today. <br><br>
                    We aim to be the best and largest producer of home-made and healthy yogurt products in the city. <br><br>
                    Apart from being the customer's first choice, we are commited in helping our community by providing an alternative way
                    to earn by our <b><a href="#reseller-program">Yogurt Reseller Program</a></b>
                  </p>
                  <a class="read_more" href="#contact">Contact Us</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end about -->

    <!-- products -->
    <div id="product" class="prot" style="background: #f1f1f1;">
      <div class="products" style="background: #f1f1f1; margin-top: -100px;">
        <div class="container" style="padding-top: -50px;">
          <div class="row">
            <div class="col-md-12" >
              <div class="titlepage text_align_left">
                <h2>Our Products</h2>
                <p>Yogurt is often marketed as a healthy food. However, added sugar and flavorings added to many yogurts can alter their health-promoting properties.
                  This is one of the reasons that choosing between all the options in the grocery store yogurt aisle can be confusing.<br><br>
                  Our goal is to provide the best product for everyone in any community.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="prod" class="carousel slide product_banner" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#prod" data-slide-to="0" class="active"></li>
            <li data-target="#prod" data-slide-to="1"></li>
            <li data-target="#prod" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="carousel-caption  banner_pro">
                  <div class="row d_flex">
                    <div class="col-md-4">
                      <div class="product mar_bottom30">
                        <figure><img src="images/recipe4.jpg" sizes="cover" alt="#"/></figure>
                        <h3 style="padding-bottom: 30px; padding-top: 25px;">Mango Peach Sundae</h3>
                      </div>
                    </div>
                    <div class="col-md-4 mar_bottom30">
                      <div class="product">
                        <figure><img src="images/recipe2.jpg" alt="#"/></figure>
                        <h3 style="padding-bottom: 30px; padding-top: 25px  ;">Peanut with Cheese</h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="product" style="padding-top: 5px;">
                        <figure><img src="images/recipe3.png" alt="#"/></figure>
                        <h3 style="padding-bottom: 30px; padding-top: 20px ;">Three Seasons</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="carousel-caption  banner_pro">
                  <div class="row d_flex">
                    <div class="col-md-4 mar_bottom30">
                      <div class="product">
                        <figure><img src="images/recipe6.jpg" alt="#"/></figure>
                        <h3 style="padding-bottom: 30px; padding-top: 20px ;"> Ube and Cream</h3>
                      </div>
                    </div>
                    <div class="col-md-4 mar_bottom30">
                      <div class="product">
                        <figure><img src="images/recipe1.jpg" alt="#"/></figure>
                        <h3 style="padding-bottom: 30px; padding-top: 20px">Strawberry Sorbet</h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="product">
                        <figure><img src="images/recipe5.jpg" alt="#"/></figure>
                        <h3 style="padding-bottom: 30px; padding-top: 20px ;">Chocolate Overload</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#prod" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#prod" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a class="order_now" href="pages/customer/products.php">Order Now</a>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- end products -->

    <div class="bg"> </div>

    <!--  nutrition -->
    <div id="nutrition" class="nutrition-container">
      <div  class="nutrition">
        <h1> Nutrition Facts</h1>
        <p>A single cup of plain whole milk yogurt contains approximately 11.4 grams of carbohydrates. Of course, 
          the carbohydrate count will vary depending on the type of milk and flavor used in a yogurt, but largely 
          the carbohydrate makeup comes from the natural sugars found in yogurt.<br><br>

        
          In one serving of plain whole milk yogurt, you can expect about 8 grams of fats. Swap to a low-fat yogurt 
          or a skim milk-based yogurt for a lower fat count<br><br>
        
          Alongside other dairy-based foods, yogurt is a good source of protein. One cup brings 8.5 grams of protein.<br><br>
          
          Plain yogurt is an excellent source of calcium and is high in phosphorus and riboflavin. But it also provides 
          more naturally-occurring sugar (from lactose) and saturated fat than most people would expect to find in a 
          "healthy" food.<br><br>
          
          There are approximately 149 calories in one cup of plain whole milk yogurt. Of course, the calorie count will 
          ultimately differ if the yogurt has additional fruit or toppings, or is made from a different milk. If you 
          are buying yogurt to include in your healthy diet, always remember to check the Nutrition Facts label and 
          ingredients list. Some yogurt products contain just a few ingredients like milk and fruit, but others may 
          contain quite a bit of added sugar, corn syrup, and other ingredients like corn starch or gelatin that increase 
          the calorie count. And if you are comparing the calorie count of yogurt, be sure that the containers you are 
          evaluating are the same size. Some yogurt products are lower in calories simply because the package is smaller.<br>
        </p>

      </div>
    </div>
    <!-- end nutrition -->

    <!-- resekker program -->
    <div id="reseller-program" class="about" style="padding-top: 120px;">
      <div class="bg_about2">
        <div class="container">
          <div class="row d_flex">
            <div class="col-md-6 offset-md-1">
              <div class="titlepage text_align_left" id="reseller-page" style="margin-right: 50px;">
                <h2>Reseller Program</h2>
                <p> We are commited in helping the community and it's people by giving a chance to earn while loving our products.<br><br>
                  As a <b>Reseller</b>, you will get a lifetime 50% discount to all of our products and you can re-sell it at your own price! <br><br>
                  We value our Resellers as much as we value our customers that's why we make sure to give you unlimited support
                  to help you grow and scale up you business<br><br>

                  Want to start your own business? Come join us now!
                </p>
                <a class="read_more" href="#contact">Contact Us</a>
              </div>
            </div>
            <div class="col-md-5">
              <div class="reseller_img" >
                <figure><img  src="images/reseller.jpg"  alt="#"/></figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end reseller program -->

    <!--review section -->
    <div class="content">
    
      <div class="review-container">
  
        <h1 class="my-5 text-center"> Hear From Our Customers </h1>
  
        <div class="owl-carousel slide-one-item">
  
          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image" style="background-image: url('images/person_1.jpg');"></div>
            <div class="text">
              <blockquote class="quotes">
                <p>&ldquo;Really appreciate the packaging, the product looks really neat and FRESH<br>plus the delivery was
                  really fast. <br><br>
                  I just found my new diet partner!&rdquo;</p> 
                <div class="author">&mdash; Leo Charles</div>
              </blockquote>                 
            </div>         
          </div>  <!-- .item -->
  
          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image" style="background-image: url('images/person_2.jpg');"></div>
            <div class="text">
              <blockquote class="quotes">
                <p>&ldquo;I receive my order faster than I expected and the products looks really fresh and tastes really good. This 
                  yogurt definitely is the best you can find in the city.<br><br>
                  Will order again for sure.&rdquo;</p> 
                <div class="author">&mdash; Jey</div>               
              </blockquote>              
            </div>           
          </div>  <!-- .item -->

          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image" style="background-image: url('images/person_1.jpg');"></div>
            <div class="text">
              <blockquote class="quotes">
                <p>&ldquo;Really appreciate the packaging, the product looks really neat and FRESH<br>plus the delivery was
                  really fast. <br><br>
                  I just found my new diet partner!&rdquo;</p> 
                <div class="author">&mdash; Leo Charles</div>
              </blockquote>                 
            </div>          
          </div>  <!-- .item -->

          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image" style="background-image: url('images/person_2.jpg');"></div>
            <div class="text">
              <blockquote class="quotes">
                <p>&ldquo;I receive my order faster than I expected and the products looks really fresh and tastes really good. This 
                  yogurt definitely is the best you can find in the city.<br><br>
                  Will order again for sure.&rdquo;</p> 
                <div class="author">&mdash; Jey</div>              
              </blockquote>             
            </div>           
          </div>  <!-- .item -->

          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image" style="background-image: url('images/person_1.jpg');"></div>
            <div class="text">
              <blockquote class="quotes">
                <p>&ldquo;Really appreciate the packaging, the product looks really neat and FRESH<br>plus the delivery was
                  really fast. <br><br>
                  I just found my new diet partner!&rdquo;</p>
                <div class="author">&mdash; Leo Charles</div>
              </blockquote>    
            </div>
          </div>  <!-- .item -->  
        </div>
   
      </div>

    </div>
    <!--End review section -->

    <!--  contact -->
    <div id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bg_yeloow">
              <div class="titlepage text_align_center">
                <h2>Contact Us</h2>
              </div>
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  
                  <!-- contact us form -->
                  <form action="php/contact_form.php" id="request" class="main_form" method="POST">
                    <div class="row">
                      <div class="col-md-12 ">
                        <input class="contactus" placeholder="Name" type="text" id="name" name="name"> 
                      </div>
                      <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="email" id="Email"  name="email"> 
                      </div>
                      <div class="col-md-12">
                        <input class="contactus" placeholder="Phone Number" type="number" id="phone" name="phone">                          
                      </div>
                      <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="text" id="message" name="inquiry">Message</textarea>
                      </div>
                      <div class="col-md-12">
                        <button class="send_btn" type="submit" >Send</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end contact -->

    <!--  footer -->
    <footer>
      <div class="footer" >
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="news">
                <h3>Newsletter <i class='bx bxl-telegram'></i> </h3>

                <!--  Newsletter Signup -->
                <form action="php/newsletter.php" id="email" class="form_news" method="POST">
                  <input class="newsltter" placeholder="Enter your email" id="email" type="email" name="email">
                  <button class="sunm_btn" value="submit" name="submit">SUBSCRIBE</button>                 

                </form>

              </div>
            </div>

            <div class=" col-md-10 offset-md-1">
              <ul class="conta">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>Puerto Princesa City 5300
                </li>
                <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 09994637200</li>
                <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> test@gmail.com</a></li>
              </ul>
            </div>

            <div class="col-md-12">
              <ul class="social_icon">
                <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>

          </div>

        </div>

        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <p>Copyright 2023  All Right Reserved @<a href="https://html.design/"> Yogurt E-Hauz</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </footer>
    <!-- end footer -->

    <!--smpt js--- pag send ng email galing contact form (outlook domain lang tinatanggap)-->
    <script src="js/smtp.js"></script>


    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- review carousel javascript files-->
    <script src="js/rev-jquery-3.3.1.min.js"></script>
    <script src="js/rev-popper.min.js"></script>
    <script src="js/rev-bootstrap.min.js"></script>
    <script src="js/rev-owl.carousel.min.js"></script>
    <script src="js/rev-main.js"></script>

    <!-- pop-up JS-->
    <script src="js/pop-up.js"></script>
    
  </body>


</html>