<!-- /*
* Template Name: Story
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />


  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href=" {{ url('css/bootstrap.min.css') }} ">
  <link rel="stylesheet" href=" {{ url ('css/owl.carousel.min.css')}} ">
  <link rel="stylesheet" href=" {{ url('css/owl.theme.default.min.css') }} ">
  <link rel="stylesheet" href=" {{ url('fonts/icomoon/style.css')}} ">
  <link rel="stylesheet" href="{{ url('fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ url('css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/aos.css') }}">
  <link rel="stylesheet" href="{{ url('css/style.css') }}">

  <title>Story Free HTML Template by Untree.co</title>
</head>
<body>

<div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <div class="container">


      <nav class="site-nav">
        <div class="row justify-content-between align-items-center">
          <div class="d-none d-lg-block col-lg-3 top-menu">
            <a href="#" class="d-inline-flex align-items-center"><span class="icon-facebook mr-2"></span></a>
            <a href="#" class="d-inline-flex align-items-center"><span class="icon-twitter mr-2"></span></a>
            <a href="#" class="d-inline-flex align-items-center"><span class="icon-instagram mr-2"></span></a>
          </div>
          <div class="col-3 col-md-6 col-lg-6 text-lg-center logo">
            <a href="index.html">Story<span class="text-primary">.</span> </a>
          </div>
          <div class="col-9 col-md-6 col-lg-3 text-right top-menu">

            <div class="d-inline-flex align-items-center">
              <div class="search-wrap">
              <a href="#" class="d-inline-flex align-items-center js-search-toggle"><span class="icon-search2 mr-2"></span><span>Search</span></a>

              <form action="#" class="d-flex">
                <input type="search" id="s" class="form-control" placeholder="Enter keyword and hit enter...">                  
              </form>

              </div>

              <span class="mx-2 d-inline-block d-lg-none"></span>
              
              <a href="#" class="d-inline-flex align-items-center d-inline-block d-lg-none"><span class="icon-facebook mr-2"></span></a>
              <a href="#" class="d-inline-flex align-items-center d-inline-block d-lg-none"><span class="icon-twitter mr-2"></span></a>
              <a href="#" class="d-inline-flex align-items-center d-inline-block d-lg-none"><span class="icon-instagram mr-2"></span></a>


              <a href="#" class="burger ml-3 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
              </a>

              
            </div>
            
            

          </div>
        </div>
        <div class="d-none d-lg-block row align-items-center py-3">
          
          
          <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center">
            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu">
              <li class="active"><a href="index.html">Business</a></li>
              <li><a href="index.html">Sports</a></li>
              <li class="has-children">
                <a href="#">Pages</a>
                <ul class="dropdown">
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="single.html">Single</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="#">Categories</a></li>
                  <li class="has-children">
                    <a href="#">Menu Two</a>
                    <ul class="dropdown">
                      <li><a href="#">Sub Menu One</a></li>
                      <li><a href="#">Sub Menu Two</a></li>
                      <li><a href="#">Sub Menu Three</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Menu Three</a></li>
                </ul>
              </li>
              <li><a href="elements.html">Elements</a></li>
              
              <li><a href="contact.html">Contact us</a></li>
            </ul>

          </div>

        </div>  
      </nav> <!-- END nav -->

    </div> <!-- END container -->

        <div class="row justify-content-between align-items-center">
          <div class="d-none d-lg-block col-lg-3 top-menu">
           
          </div>
          <div class="col-3 col-md-6 col-lg-6 text-lg-center logo">
            <a href="index.html"> Story New <span class="text-primary"></span> </a>
          </div>
          <div class="col-9 col-md-6 col-lg-3 text-right top-menu">

            <div class="d-inline-flex align-items-center">
          

              <span class="mx-2 d-inline-block d-lg-none"></span>
              
              <a href="#" class="d-inline-flex align-items-center d-inline-block d-lg-none"><span class="icon-facebook mr-2"></span></a>
              <a href="#" class="d-inline-flex align-items-center d-inline-block d-lg-none"><span class="icon-twitter mr-2"></span></a>
              <a href="#" class="d-inline-flex align-items-center d-inline-block d-lg-none"><span class="icon-instagram mr-2"></span></a>


              <a href="#" class="burger ml-3 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
              </a>

              
            </div>
            
            

          </div>
        </div>
   

        </div>  
      </nav> 
 <!-- END nav -->

  

            @yield('content')



    <script src="{{ url ('js/jquery-3.4.1.min.js')  }}"></script>
    <script src="{{ url ('js/popper.min.js')  }}"></script>
    <script src="{{ url ('js/bootstrap.min.js ')  }}"></script>
    <script src="{{ url ('js/owl.carousel.min.js ')  }}"></script>
    <script src="{{ url ('js/aos.js ')  }}"></script>
    <script src="{{ url ('js/imagesloaded.pkgd.js ')  }}"></script>
    <script src="{{ url ('js/isotope.pkgd.min.js')  }}"></script>
    <script src="{{ url ('js/jquery.animateNumber.min.js ')  }}"></script>
    <script src="{{ url ('js/jquery.waypoints.min.js ')  }}"></script>
    <script src="{{ url ('js/jquery.fancybox.min.js ')  }}"></script>
    <script src="{{ url ('js/custom.js')  }}"></script>

    
  </body>
  </html>
