<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Image Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="css/swiper.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/flogo.png">

    <style type="text/css">
      /* header */
      .site-navbar{
        position: inherit;
      }
      .site-navbar .logo a{
        color: #000;
        text-shadow: 0 0 40px black;
        text-decoration: none;
        font-size: 40px;
        font-weight: 900;
        padding: 0 15px;
      }
      .site-navbar .logo a img{
        width: 300px;
        height: auto;
        /*background-color: #046f6f;*/
        margin-bottom: 20px;
      }
      .site-navbar .iconlogo a img{
        width: 300px;
        height: auto;
        /*background-color: #046f6f;*/
        margin-bottom: 20px;
      }
      .site-navbar .tabs a{
        display: inline;
        /*text-shadow: 0 0 40px black;*/
        text-decoration: none;
        color: #fff;
        font-size: 60px;
        font-weight: 900;
        line-height: initial;
        /*box-shadow: inset 0 0 20px 5px black;*/
        margin-left: 45px;
        /*background-color: #00ffff54;*/
      }
      /*.site-navbar .tabs a:hover{
        box-shadow: inset 0 0 20px 5px #2f6a8c;
        background-color: #00ffff;
      }*/
      .site-navbar .contact{
        margin-top: 45px;
      }
      .site-navbar .contact a{
        display: inline;
        /*text-shadow: 0 0 40px black;*/
        text-decoration: none;
        color: #fff;
        font-size: 60px;
        font-weight: 900;
        line-height: initial;
        /*box-shadow: inset 0 0 20px 5px black;*/
        margin-left: 10px;
        /*background-color: #00ffff54;*/
      }
      /*.site-navbar .contact a:hover{
        box-shadow: inset 0 0 20px 5px #2f6a8c;
        background-color: #00ffff;
      }*/
      @media (max-width: 780px) and (min-width: 280px){
        .site-navbar .logo a{
          font-size: 36px;
        }
        .site-navbar .tabs a{
          font-size: 2em;
          display: inherit;
          margin-top: 20px;
        }
        .site-navbar .contact a{
          font-size: 2em;
          display: inherit;
          margin-top: 20px;
        }
      }
    </style>
    
  </head>
  <body>
  
  <div class="site-wrap">

    
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    

    <header class="site-navbar py-3" role="banner">
      <div class="container-full">
        <div class="col-12 col-xl-12 logo">
          <!-- <a href="index.php"><img src="images/logo.PNG"></a> -->
          <a href="index.php"><img src="images/logo.gif" style="width: 100px;height: auto;"></a>
          <a href="index.php"> home </a>
        </div>
      </div>      
      


      <!-- <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Image Gallery<span class="text-primary">.</span></a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="painting.php">Painting</a>
                  <ul class="dropdown">
                    <li><a href="#">Street-Wall Painting</a></li>
                    
                  </ul>
                </li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="https://www.facebook.com/Dayen-Bayen-Art-101288444578804/?modal=admin_todo_tour" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div> -->
      
    </header>