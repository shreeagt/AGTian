

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

        <link rel="stylesheet" type="text/css" href="new/assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <!-- <link rel="stylesheet" type="text/css" href="new/assets/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="new/assets/fonts/flaticon.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="new/assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="new/assets/css/owl.carousel.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="new/assets/css/off-canvas.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="new/assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="new/assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="new/assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="new/assets/css/style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="new/assets/css/responsive.css">
        
    </head>

    <style>
             .drop-zone {
    max-width: 300px;
    height: 200px;
    padding: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-family: "Quicksand", sans-serif;
    font-weight: 500;
    font-size: 20px;
    cursor: pointer;
    color: #fff;
    border: 4px dashed #009578;
    border-radius: 10px;
  }
  
  .drop-zone--over {
    border-style: solid;
  }
  
  .drop-zone__input {
    display: none;
  }
  
  .drop-zone__thumb {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    overflow: hidden;
    background-color: #cccccc;
    background-size: cover;
    position: relative;
  }
  
  .drop-zone__thumb::after {
    content: attr(data-label);
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 5px 0;
    color: #ffffff;
    background: rgba(0, 0, 0, 0.75);
    font-size: 14px;
    text-align: center;
  }
  
    </style>
    <body class="defult-home">
        
        <div class="offwrap"></div>

        <!--Preloader start here-->
        <div id="pre-load">
           <div id="loader" class="loader">
               <div class="loader-container">
                   {{-- <div class='loader-icon'><img src="{{asset('new/assets/images/ajanta-logo.png')}}" alt="agtian"></div> --}}
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
                                                        <a href="{{route('index')}}/#home">Home</a>
                                                   
                                                    </li>
                                                    <li>
                                                        <a href="{{route('index')}}/#about">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('index')}}/#htp">How to enroll</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{route('index')}}/#faq">FAQ's</a>
                                                     
                                                    </li>
                                                 
                                                    <li>
                                                        <a href="{{route('winner')}}">Winner</a>
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
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('index')}}/#about">About</a>
                            </li>
                            <li>
                                <a href="{{route('index')}}/#htp">How to enroll</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('index')}}/#faq">FAQ's</a>
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
            <div class="rs-breadcrumbs img1  pt-110 ">
                <div class="container">
                    {{-- <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            Participate
                            <span class="watermark">Participate</span>
                        </h1>                       
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="breadcrumbs-inner">
                                <h1 class="page-title">
                                    Participate
                                    <span class="watermark">Participate</span>
                                </h1>                       
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-wrap mb-60">
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="{{route('insertvideo')}}" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="form-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    </div> 
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="form-control" type="text" id="empid" name="empid" placeholder="Employee I'd" required="">
                                    </div>   
                                    <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                        <input class="form-control" type="text" id="city" name="city" placeholder="City" required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                    
                                        <div class="drop-zone">
                                        <input type="hidden" name="myfile" value="myfile">
                                        <input type="hidden" name="myfile" value="myfile">
                                        <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                        <input type="file" name="video_path" class="drop-zone__input">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="btn-part">                                            
                                    <div class="form-group mb-0">
                                        <div class="submit-btn">
                                        <input class="submit" type="submit" value="Submit">
                                        </div>
                                    </div>
                                    </div> 
                                </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
 
            <!-- Our Sponsor Section Start -->

            <!-- Pricing Section Start -->

      
            <!-- Pricing Section End -->

            <!-- Blog Section End -->
        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="align-self-center col-lg-4 col-md-12 col-sm-12 md-mb-10 text-right">
                           
                                <a href="/"><img src="{{asset('new/assets/images/ajantaone-logo.png')}}" alt=""></a>
                            
                        </div>
                        <div class="col-lg-8">

                            <div class="row">
                               
                                        <h3 class="footer-title"></h3>
                                        <div class="textwidget">Be a part of our company's remarkable 50-year journey and seize the opportunity to showcase your talent by participating in this inspiring contest!</div>
                                    
                                </div>
                            </div>
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

         
      <script>
        document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
          const dropZoneElement = inputElement.closest(".drop-zone");
        
          dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
          });
        
          inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
              updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
          });
        
          dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
          });
        
          ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
              dropZoneElement.classList.remove("drop-zone--over");
            });
          });
        
          dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();
        
            if (e.dataTransfer.files.length) {
              inputElement.files = e.dataTransfer.files;
              updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }
        
            dropZoneElement.classList.remove("drop-zone--over");
          });
        });
        
        
        function updateThumbnail(dropZoneElement, file) {
          let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
        
          
          if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
          }
        
          
          if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
          }
        
          thumbnailElement.dataset.label = file.name;
        
          // Show thumbnail for image files
          if (file.type.startsWith("image/")) {
            const reader = new FileReader();
        
            reader.readAsDataURL(file);
            reader.onload = () => {
              thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
          } else {
            thumbnailElement.style.backgroundImage = null;
          }
        }
              
     </script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.querySelector('#contact-form');
      const fileInput = document.querySelector('.drop-zone__input');
      const allowedExtensions = ['mp4', 'avi', 'mov']; // Allowed video file extensions
      const maxSizeInBytes = 10 * 1024 * 1024; // 10MB
  
      form.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent the default form submission
  
        const file = fileInput.files[0];
  
        // Check if a file is selected
        if (!file) {
          alert('Please select a file.');
          return;
        }
  
        // Check the file extension
        const fileName = file.name;
        const fileExtension = fileName.split('.').pop().toLowerCase();
        if (!allowedExtensions.includes(fileExtension)) {
          alert('Please select a valid video file.');
          return;
        }
  
        // Check the file size
        if (file.size > maxSizeInBytes) {
          alert('File size exceeds the limit of 10MB.');
          return;
        }
  
        // Submit the form
        form.submit();
      });
    });
  </script>
    </body>
</html>