<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Edifycons </title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="{{ URL::asset('assets/images/frontend/Them-logo/Favicon-1.png')}}">
        <!-- Main style sheet -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/frontend/style.css')}}">
        <!-- responsive style sheet--->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/frontend/responsive.css')}}">
        <!-- Fix Internet Explorer ______________________________________-->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="vendor/html5shiv.js"></script>
        <script src="vendor/respond.js"></script>
        <![endif]-->
    </head>
    <style type="text/css">
        .tran3se{
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        font-weight: 500;
        line-height: 46px;
        text-transform: capitalize;
        color: #fff;
        padding: 0 10px;
        left: 250px;
        display: block;
        border-bottom: 1px solid #02266f;
        background: #02266f;
        position: relative;
        z-index: 1;
        }
        .footerManualclass{
            width: 185px;
        }
    </style>
    <body>
        <div class="main-page-wrapper">
            <!-- Header Top _________________________________ -->
            <div class="top-header-v-two">
                <div class="container">
                    <div class="row clear-fix">
                        <div class="col-md-6 col-xs-12">
                            <ul class="top-header-left clear-fix">
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>  Pulikeshi Nagar, Bengaluru</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:notify@edifycons.com">notify@edifycons.com</a></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <ul class="top-header-right clear-fix">
                                <li>
                                    <ul>
                                        <li><a href="https://www.facebook.com/edifycons"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/edifycons"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/edifycons/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/edifycons-pvt-ltd"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Call Us +91 9986798748</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu + Banner _________________________________ -->
            <div class="banner-ad-menu">
                @include('frontend/topbar')
                <!-- Theme Main Banner ____________________________ -->
                <!-- /#theme-main-banner -->
                @yield('maincontent')
            </div>
            <!-- /.banner-ad-menu -->
            <!-- home Footer section ____________________________ -->
            <footer class="them-footer-section">
                <div class="footer-button-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                                <h3>Have any question or need any business consultation?</h3>
                            </div>
                            <div class="col-sm-3  col-xs-4">
                                <a href="contact-us.html" class="hvr-bounce-to-right">Contact Now!!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-xs-6 footer-item">
                                <div class="footer-item-one">
                                    <a href="#" class="footre-logo footerManualclass"><img src="{{ URL::asset('assets/images/frontend/Them-logo/logoedify2.png')}}" alt="logo"></a>
                                    <p>Edifycons is the BIG DATA and CLOUD COMPUTING focuse spin-off of the IT consultancy company cediant. We help our
                                    customers to stay afloat in a competitive market where the key is efficiently converting data into knowledge.</p>
                                    <ul>
                                        <li><a href="https://www.facebook.com/edifycons"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/edifycons"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/edifycons/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/edifycons-pvt-ltd"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 footer-item">
                                <div class="footer-item-two">
                                    <h3>Our Services</h3>
                                    <ul>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Business Consulting</a></li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Corporate Training</a></li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Placement</a></li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Leadership & Personal<br>Development</a></li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Marketing Consulting</a></li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="col-md-3 col-xs-6 footer-item">
                                <div class="footer-item-three">
                                    <h3>Latest News</h3>
                                    <ul>
                                        <li>
                                            <h6><a href="#">How Can be Successfull<br>in Market Place..</a></h6>
                                            <i>07 Jun, 2019  /  Business</i>
                                        </li>
                                        <li>
                                            <h6><a href="#">Business Growth Depends<br>on Your Marketing</a></h6>
                                            <i>07 Jun, 2019  /  Business</i>
                                        </li>
                                        <li>
                                            <h6><a href="#">Expert Will help in Your..</a></h6>
                                            <i>07 Jun, 2019  /  Business</i>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="col-md-4 col-xs-6 footer-item">
                                <div class="footer-item-four">
                                    <h3>Our Address</h3>
                                    <span>No : 210 , 2nd Floor, Nostalgia Complex</span>
                                    <span>Robertson Rd, Pulikeshi Nagar , Bengaluru</span>
                                    <span>(+91) 9986798748</span>
                                    <span>notify@edifycons.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6">
                                    <p>Copyright <a href="#">Edifycons</a> @ 2019</p>
                                </div>
                                <div class="col-xs-6">
                                    <div class="clear-fix">
                                        <div class="float-right privacy-item">
                                            <h6>Privacy & Policy</h6>
                                            | 
                                            <h6><a href="#">FAQ’s</a></h6>
                                            | 
                                            <h6><a href="#">Shop</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.footer-section -->
            </footer>
            <!-- /.them-footer-section -->
        </div>
        <!-- /.main-page-wrapper -->
        <!-- Scroll Top Button -->
        <button class="scroll-top tran7s p-color-bg">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
        </button>
        <!-- pre loader  -->
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
        <!-- js file -->
        <!-- Main js file/jquery -->
        <script src="{{ URL::asset('assets/vendor/frontend/jquery-2.2.3.min.js')}}"></script>
        <!-- bootstrap-select.min.js -->
        <script src="{{ URL::asset('assets/vendor/frontend/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{ URL::asset('assets/vendor/frontend/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- camera js -->
        <script src="{{ URL::asset('assets/vendor/frontend/Camera-master/scripts/camera.min.js')}}"></script>
        <script src="{{ URL::asset('assets/vendor/frontend/Camera-master/scripts/jquery.easing.1.3.js')}}"></script>
        <!-- Owl carousel -->
        <script src="{{ URL::asset('assets/vendor/frontend/OwlCarousel2/dist/owl.carousel.min.js')}}"></script>
        <!-- appear & countTo -->
        <script src="{{ URL::asset('assets/vendor/frontend/jquery.appear.js')}}"></script>
        <script src="{{ URL::asset('assets/vendor/frontend/jquery.countTo.js')}}"></script>
        <!-- fancybox -->
        <script src="{{ URL::asset('assets/vendor/frontend/fancybox/dist/jquery.fancybox.min.js')}}"></script>
        <!-- Gallery - isotop -->
        <script type="text/javascript" src="{{ URL::asset('assets/vendor/frontend/isotope.pkgd.min.js')}}"></script>
        <!-- WOW js -->
        <script type="text/javascript" src="{{ URL::asset('assets/vendor/frontend/WOW-master/dist/wow.min.js')}}"></script>
        <!-- Style js -->
        <script src="{{ URL::asset('assets/js/frontend/custom.js')}}"></script>
        <!-- map script js -->
        <script type="text/javascript" src="{{ URL::asset('assets/js/frontend/map-script.js')}}"></script>
        <script src="{{ URL::asset('assets/js/angular.min.js') }}"></script>
        @yield('custom-footer-scripts')
    </body>
</html>