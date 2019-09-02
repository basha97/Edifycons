@extends('frontend/master')

@section('maincontent')

    <div class="Enar-page-banner">
        <div class="Enar-page-banner-opact">
            <div class="container">
                <div>
                    <h1>Contact Us</h1>
                    <ul>
                        <li><span></span></li>
                        <li><a href="{!! route('index') !!}">Home</a></li>
                        <li>/</li>
                        <li><a href="{!! route('contact') !!}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-us-section ____________________________ -->
    <section class="Contact-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-xs-12">
                    <div class="Contact-us-form">
                        <form action="" class="form-validation row" autocomplete="off">
                            <div class="col-sm-6 col-xs-12"><input type="email" placeholder="Email Address*" name="email">
                            </div>
                            <div class="col-sm-6 col-xs-12"><input type="text" placeholder="Subject*" name="sub"></div>
                            <div class="col-xs-12"><textarea placeholder="Your Comments*" name="message"></textarea></div>
                            <div class="col-xs-12"><button class="hvr-bounce-to-right">Send Message</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-xs-12">
                    <div class="Contact-us-title-text">
                        <h3>Don’t Hesitate to<br>contact with us for any<br>kind of information</h3>
                        <span></span>
                        <p>call us for immidiate support this number</p>
                        <strong>880 172 801 729</strong>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="Contact-us-Google-map">
            <!-- Google Map _______________________ -->
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                    width="1900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    
    <!--Contact Form Validation Markup -->
    <!-- Contact alert -->
    <div class="alert-wrapper" id="alert-success">
        <div id="success">
            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
            <div class="wrapper">
                <p>Your message was sent successfully.</p>
            </div>
        </div>
    </div> <!-- End of .alert-wrapper -->
    <div class="alert-wrapper" id="alert-error">
        <div id="error">
            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
            <div class="wrapper">
                <p>Sorry!Something Went Wrong.</p>
            </div>
        </div>
    </div> <!-- End of .alert-wrapper -->
@stop

@section('custom-footer-scripts')
@stop