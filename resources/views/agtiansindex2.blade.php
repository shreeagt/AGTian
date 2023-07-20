

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
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('new/assets/images/ajantaone-logo.png')}}">  
        <!-- Bootstrap v4.4.1 css -->
        
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/flaticon.css')}}">
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

    <style>
        @keyframes firework {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.1);
    opacity: 0.8;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

.firework-animation {
  animation-name: firework;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}

#message.sec-title .title.title2:before {
    content: none;
}

span#startMessage {
    font-size: 20px;
    line-height: 1.1;
    margin-left: 60px;
    display: inline-block;
}
    </style>
    <body class="defult-home">
        
        <div class="offwrap"></div>

        <!--Preloader start here-->
        <div id="pre-load">
           <div id="loader" class="loader">
               <div class="loader-container">
                   <div class='loader-icon'><img src="{{asset('new/assets/images/ajantaone-logo.png')}}" alt="agtian"></div>
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
                                        <a href="/">
                                            {{-- <img class="normal-logo" src="new/assets/images/ajanta-light.png" alt="logo">   --}}
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
                                                    <li class=" current-menu-item">
                                                        <a href="#home">Home</a>                                                     
                                                    </li>
                                                    <li>
                                                        <a href="#about">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="#htp">How to enroll</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#faq">FAQ's</a>                                                   
                                                    </li>
                                                    <li>
                                                        <a href="{{route('winner')}}">Winner</a>
                                                    </li>
                                                </ul> <!-- //.nav-menu -->
                                            </nav>
                                        </div> <!-- //.main-menu -->
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="expand-btn-inner">
                                        <ul>
                                            <li class="btn-quote">
                                                <a href="{{route( 'participate' )}}" class="quote-button">Participate</a>
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
                                <a href="#home">Home</a>
                             
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#htp">How to enroll</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#faq">FAQ's</a>
                            </li>
                            <li>
                                <a href="{{route('winner')}}">Winner</a>
                            </li>
                            <li>
                                <a href="{{route('participate')}}">Participate</a>
                            </li>
                
                        </ul> <!-- //.nav-menu -->
                        {{-- <div class="canvas-contact">
                              <div class="address-area">
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-location"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Address</h4>
                                          <em>05 kandi BR. New York</em>
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-email"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Email</h4>
                                          <em><a href="mailto:support@reactheme.com">support@reactheme.com</a></em>
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-call"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Phone</h4>
                                          <em>+019988772</em>
                                      </div>
                                  </div>
                              </div>
                        </div> --}}
                    </nav>
                    <!-- Canvas Menu end -->                     
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->

            <!-- Banner Section Start -->
            <div class="rs-banner banner-home-style4" id="home">
                <div class="container">
                    <div class="content-wrap sec-title ">

                        <h2 class="title title2 title3 text-middle title4">Showcase Your Talent and win exciting prizes at</h2>
                        <h1 class="music wow fadeInDown">Ajanta's</h1>
                        <h2 class="year wow fadeInLeft">Got Talent</h2>
                        <div class="event_counter2">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="banner-counter5">
                                        <div class="timecounter-inner">
                                            <div class="coming-soon-part2">
                                                <div class="coming-soon-text ">    
                                                    <div id="countdown" data-animation-in="slideInLeft" data-animation-out="animate-out fadeOut" class="CountDownTimer" data-date="7/17/2023 17:00"> </div>
                                                    {{-- <div id="message" style="display: none;">Competition has started!</div> --}}
                                                    <div id="message" style="display: none;" class="sec-title">
                                                        <span id="startMessage" class="title title2 title3 text-middle title4">Time's up! Let the talent show begin! Upload your videos and let your brilliance illuminate Ajanta Got Talent! </span>
                                                      </div>
                                                </div>                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
           
            <!-- About Section Start -->
            <div class="rs-about style2 bg17" id="about">
                <div class="container">
                    <div class="left-side">
                        <img class="wow fadeInLeft" src="{{asset('new/assets/images/1.png')}}" alt="Images">
                    </div>
                    <div class="right-side">
                        <img class="wow fadeInRight d-none d-md-block" src="{{asset('new/assets/images/2light.png')}}"  alt="Images">
                    </div>
                    <div class="sec-title text-center mb-60">
                        <h2 class="title title2 title3 text-middle title4 pb-40">
                         About
                        </h2>
                        <p class="desc-big">"Unleash your hidden talents at Ajanta Got Talent (AGTians) - the electrifying corporate event of the year! Whether you're a singer, dancer, comedian, magician, or have any extraordinary skill, this is your chance to shine. Submit your performance online and compete for the coveted AGTians champion title. Get ready to dazzle the world with your talent and leave a lasting impression. Join us now and let your moment in the spotlight begin!"</p>
                    </div>
                    <div class="rs-videos about-video">
                        <div class="animate-border">
                            {{-- <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338"> --}}
                            <a class="popup-border" href="{{asset('assets/videos/sample.mp4')}}">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>

                    {{-- <div class="rs-videos about-video">
                        <div class="animate-border">
                            <video controls>
                                <source src="{{asset('assets/videos/sample-5s.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <a class="popup-border" href="#">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div> --}}
                    
                </div>
            </div>
            <!-- About Section End -->

            <!-- Team Section Start -->
            <div class="rs-team style8">
                <div class="container">
                 
                </div>
                <div class="team-line">
                    <div class="line-animate left-side">
                        <img class="wow fadeInLeft" src="{{asset('new/assets/images/line/1.png')}}" alt="Images">
                    </div>
                    <div class="line-animate right-side">
                        <img class="wow fadeInRight" src="{{asset('new/assets/images/line/2.png')}}" alt="Images">
                    </div>
                </div>
            </div> 

        

            <div class="rs-services style1 bg1 pt-110 pb-60 md-pt-75 md-pb-80" id="htp">
                <div class="container">
                    <div class="sec-title text-center mb-60 md-mb-40">
                    
                        <h2 class="title pb-27">
                           <!-- How to Play<br> -->
                           Play in AGTians: Unleash Your Talent
                        </h2>
                        <div class="heading-border-line"></div>
                    </div>
                    <div class="row y-middle">
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="services-item">
                                <div class="services-wrap">
                                    <!-- <div class="services-icon">
                                        <img src="assets/images/services/main-home/choose/1.png" alt="Services">
                                    </div> -->
                                    <div class="services-text">
                                        <h4 class="title">1. Register & Upload</h4>
                                        <p class="services-txt">
                                            Sign up for AGTians and upload your talent video to showcase your extraordinary skills. Let your talent take center stage!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="services-item">
                                <div class="services-wrap">
                                    <!-- <div class="services-icon">
                                        <img src="assets/images/services/main-home/choose/2.png" alt="Services">
                                    </div> -->
                                    <div class="services-text">
                                        <h4 class="title">2. Captivate the Judges</h4>
                                        <p class="services-txt">
                                            Prepare a captivating performance that highlights your unique talent. Whether it's singing, dancing, comedy, or any other skill, give it your all! Keep your video within 2 minutes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-item">
                                <div class="services-wrap">
                                    <!-- <div class="services-icon">
                                        <img src="assets/images/services/main-home/choose/1.png" alt="Services">
                                    </div> -->
                                    <div class="services-text">
                                        <h4 class="title">3. Await Results & Celebrate</h4>
                                        <p class="services-txt">
                                            Our esteemed judges will evaluate performances and announce the AGTians champion. If you win, celebrate your success and enjoy the exhilarating AGTians experience! Good luck!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rs-faq gray-bg4 pt-120 md-pt-80 bg17" id="faq">
                <div class="container sec-title ">  
                    <h2 class="title title2 title3 text-middle title4 pb-40 text-center">
                        FAQ's
                       </h2>                  
                    <div class="row y-middle">
                        <div class="col-lg-12 md-mb-50">
                            <div class="content-part">
                                 <div class="faq-content">
                                     <div id="accordion" class="accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false">How do I participate in Ajanta Got Talent (AGTians)?</a>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    To participate, simply upload your talent video through the online portal provided. It's quick and easy!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">What types of talents can be showcased in AGTians?</a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    AGTians welcomes a wide range of talents including singing, dancing, comedy, magic, poetry, and more. Let your creativity shine!
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">Can I submit a group performance?</a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    Absolutely! Group performances are encouraged. Just make sure all participants are employees of the organization.
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">How long should my talent video be?</a>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    We recommend keeping your talent video within a maximum duration of 2 minutes to ensure fairness and efficiency during the evaluation process.
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false">Will my talent video be publicly accessible?</a>
                                            </div>
                                            <div id="collapseFive" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    Talent videos will be accessible to the judging panel and internal employees participating in the event. They will not be shared with the public without prior consent.
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false">How will the winners be selected?</a>
                                            </div>
                                            <div id="collapseSix" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    Winners will be chosen by a panel of experienced judges who will evaluate performances based on originality, skill, stage presence, and overall impact.
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false">Can I participate in multiple talent categories?</a>
                                            </div>
                                            <div id="collapseSeven" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    Yes, you can showcase your talent in multiple categories. Feel free to display your versatility and passion across different areas.
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false">Will there be prizes for the winners?</a>
                                            </div>
                                            <div id="collapseEight" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    Yes, the ultimate winner of AGTians will receive a grand prize as a recognition of their exceptional talent. Additional prizes may also be awarded to outstanding participants.
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false">Is there any registration fee to participate?</a>
                                            </div>
                                            <div id="collapseNine" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    No, there is no registration fee to participate in AGTians. It is a free and inclusive event for all employees.
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false">Can I seek assistance in recording my talent video?</a>
                                            </div>
                                            <div id="collapseTen" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    While we encourage participants to record their videos independently, seeking assistance from colleagues or family members for recording is allowed. The focus should remain on your talent and performance.
                                                </div>
                                            </div>
                                        </div> 
                                     </div>
                                 </div>
                            </div>
                        </div>

                    </div>
   
                </div>

            </div>
        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="align-self-center col-lg-4 col-md-12 col-sm-12 md-mb-10 text-sm-right">
                           
                                <a href="/"><img src="{{asset('new/assets/images/ajantaone-logo.png')}}" alt=""></a>
                            
                        </div>
                        <div class="col-lg-8">
                          
                                  
                                    <div class="textwidget">Be a part of our company's remarkable 50 years journey and seize the opportunity to showcase your talent by participating in this inspiring contest!<div>
                               
                        </div>
                    </div>
                </div>
            </div>
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
        <script src="{{asset('new/assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{asset('new/assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset('new/assets/js/bootstrap.min.js')}}"></script>
        <!-- op nav js -->
        <script src="{{asset('new/assets/js/jquery.nav.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{asset('new/assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('new/assets/js/owl.carousel.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('new/assets/js/wow.min.js')}}"></script>
        <!-- Time Circle js -->
        <script src="{{asset('new/assets/js/time-circle.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{asset('new/assets/js/skill.bars.jquery.js')}}"></script>
        <!-- imagesloaded js -->
        <script src="{{asset('new/assets/js/imagesloaded.pkgd.min.js')}}"></script>
         <!-- waypoints.min js -->
        <script src="{{asset('new/assets/js/waypoints.min.js')}}"></script>
        <!-- counterup.min js -->
        <script src="{{asset('new/assets/js/jquery.counterup.min.js')}}"></script> 
        <!-- magnific popup js -->
        <script src="{{asset('new/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- contact form js -->
        <script src="{{asset('new/assets/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('new/assets/js/main.js')}}"></script>

  
        <script>
// Get the countdown element
const countdownElement = document.getElementById('countdown');

// Get the message element
const messageElement = document.getElementById('message');

// Get the start message element
const startMessageElement = document.getElementById('startMessage');

// Get the target date from the data-date attribute
const targetDate = new Date(countdownElement.dataset.date).getTime();

// Function to check if countdown has ended
function checkCountdown() {
  // Get the current date and time
  const now = new Date().getTime();

  // Check if the countdown has ended
  if (now >= targetDate) {
    // Hide the countdown element
    countdownElement.style.display = 'none';

    // Show the message element
    messageElement.style.display = 'block';

    // Add firework animation class to the start message
    startMessageElement.classList.add('firework-animation');
  }
}

// Call the checkCountdown function immediately
checkCountdown();

// Check if the countdown has ended every second
const countdown = setInterval(checkCountdown, 1000);
          </script>

 

    </body>
</html>
