

<!DOCTYPE html>
<html lang="zxx"> 
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Ajanta Got Talent</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png"> -->
        <!-- Bootstrap v4.4.1 css -->
        
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/cfonts/flaticon.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/owl.carousel.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/off-canvas.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/responsive.css')}}">
        
    </head>
    <body class="defult-home">
        
        <div class="offwrap"></div>

        <!--Preloader start here-->
        <div id="pre-load">
           <div id="loader" class="loader">
               <div class="loader-container">
                   <div class='loader-icon'><img src="{{asset('new/assets/images/ajanta-logo.png')}}" alt="agtian"></div>
               </div>
           </div>              
       </div>
        <!--Preloader area end here-->
     
		<!-- Main content Start -->
        <div class="main-content">

            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header header-transparent">
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row-table">
                                <div class="col-cell header-logo">                                  
                                    <div class="logo-area">
                                        <a href="index.php">
                                            <img class="normal-logo" src="{{asset('new/assets/images/ajantaone-logo.png')}}" alt="logo">  
                                            <img class="sticky-logo" src="{{asset('new/assets/images/ajantaone-logo.png')}}" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu hidden-md">
                                                <ul class="nav-menu">
                                                    <li class="">
                                                        <a href="{{route('index')}}">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('index')}}/#about">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('index')}}/#htp">How to play</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{route('index')}}/#faq">FAQ's</a>
                                                    </li>
                                                     <li class="current-menu-item">
                                                        <a href="{{route( 'winner' )}}">Winner</a>
                                                    </li>
                                                    <!-- <li>
                                                        <a href="contact.html">Contact</a>
                                                    </li> -->
                                                </ul> <!-- //.nav-menu -->
                                            </nav>
                                        </div> <!-- //.main-menu -->
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="expand-btn-inner">
                                        <ul>
                                            <li class="btn-quote">
                                                <a href="{{route('participate')}}" class="quote-button">Participate</a>
                                            </li>
                                            <li class="humburger">
                                                <a id="nav-expander" class="nav-expander bar" href="#">
                                                    <div class="bar">
                                                        <span class="dot1"></span>
                                                        <span class="dot2"></span>
                                                        <span class="dot3"></span>
                                                        <span class="dot4"></span>
                                                        <span class="dot5"></span>
                                                        <span class="dot6"></span>
                                                        <span class="dot7"></span>
                                                        <span class="dot8"></span>
                                                        <span class="dot9"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->

                    <!-- Canvas Mobile Menu start -->
                    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                        <div class="close-btn">
                            <a id="nav-close2" class="nav-close">
                                <div class="line">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                </div>
                            </a>
                        </div>
                        <ul class="nav-menu">
                            <li class="menu-item-has-children current-menu-item">
                                <a href="{{route('index')}}/#home">Home</a>
                             
                            </li>
                            <li>
                                <a href="{{route('index')}}/#about">About</a>
                            </li>
                            <li>
                                <a href="{{route('index')}}/#htp">How to play</a>
                            </li>
                            <li class="">
                                <a href="{{route('index')}}/#faq">FAQ's</a>
                            </li>
                            <li class="">
                                <a href="{{route('winner')}}">Winner</a>
                            </li>
                            <li class="">
                                <a href="{{route('participate')}}">Participate</a>
                            </li>

           
                        </ul> <!-- //.nav-menu -->
                
                    </nav>
                    <!-- Canvas Menu end -->                     
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->

            <!-- Banner Section Start -->
            <div class="rs-breadcrumbs img2">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            Winner
                            <span class="watermark">Winner</span>
                        </h1>                       
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
           

       


    

            <div class="rs-services style1 bg1 pt-110 pb-60 md-pt-75 md-pb-80">
                <div class="container">
        
                    <div class="row y-middle">
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="services-item silver">
                                <div class="services-wrap">
                                    <div class="services-icon">
                                        <img src="{{asset('new/assets/images/medals/silver.png')}}" alt="Services">
                                    </div>
                                    <div class="services-text">
                                        <h4 class="title">2. 1st Runner–up</h4>
                                        <p class="services-txt">
                                            When the competition is over, the 1st Runner-Up should be announced. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="services-item gold">
                                <div class="services-wrap">
                                    <div class="services-icon">
                                        <img src="{{asset('new/assets/images/medals/gold.png')}}" alt="Services">
                                    </div>
                                    <div class="services-text">
                                        <h4 class="title">1. Winner</h4>
                                        <p class="services-txt">
                                            When the competition is over, the winner should be announced. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-item bronze">
                                <div class="services-wrap">
                                    <div class="services-icon">
                                        <img src="{{asset('new/assets/images/medals/bronze.png')}}" alt="Services">
                                    </div>
                                    <div class="services-text">
                                        <h4 class="title">3. 2nd Runner-Up</h4>
                                        <p class="services-txt">
                                            When the competition is over, the 2nd Runner-Up should be announced. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing Section End -->

            <!-- Blog Section End -->
        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10">
                            <div class="footer-logo mb-40">
                                <a href="/"><img src="{{asset('new/assets/images/ajantaone-logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 pl-45 md-pl-15">
                                    {{-- <h3 class="footer-title">Address</h3> --}}
                                    <div class="textwidget">Be a part of our company's remarkable 50-year journey and seize the opportunity to showcase your talent by participating in this inspiring contest!</div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6">
                            <div class="copyright text-lg-start text-center ">
                                <p>© 2023 Ajanta Got Talent. Developed By<a href="#"> Ajanta Pharma</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->


        <!-- Search Modal Start -->
        <div class="modal fade search-modal" id="searchModal" tabindex="-1">
            <button type="button" class="close" data-bs-dismiss="modal">
                <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                                <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="new/assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="new/assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="new/assets/js/bootstrap.min.js"></script>
        <!-- op nav js -->
        <script src="new/assets/js/jquery.nav.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="new/assets/js/isotope.pkgd.min.js"></script>
        <!-- owl.carousel js -->
        <script src="new/assets/js/owl.carousel.min.js"></script>
        <!-- wow js -->
        <script src="new/assets/js/wow.min.js"></script>
        <!-- Time Circle js -->
        <script src="new/assets/js/time-circle.js"></script>
        <!-- Skill bar js -->
        <script src="new/assets/js/skill.bars.jquery.js"></script>
        <!-- imagesloaded js -->
        <script src="new/assets/js/imagesloaded.pkgd.min.js"></script>
         <!-- waypoints.min js -->
        <script src="new/assets/js/waypoints.min.js"></script>
        <!-- counterup.min js -->
        <script src="new/assets/js/jquery.counterup.min.js"></script> 
        <!-- magnific popup js -->
        <script src="new/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- contact form js -->
        <script src="new/assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="new/assets/js/main.js"></script>
    </body>
</html>