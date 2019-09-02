@extends('frontend/master')
@section('maincontent')
<div id="theme-main-banner">
    <div data-src="assets/images/frontend/home/new2.jpg">
        <div class="camera_caption">
            <div class="container">
                <h1 class="wow fadeInUp animated">Working with us<br>Always a little Differnet</h1>
                <p class="wow fadeInUp animated"  data-wow-delay="0.5s">Since 1998 we have been business coaching NGO’s, Business Owners, Government <br>Organisations, Entrepreneurs and Corporate business entities.</p>
                <a href="#" class="tran3s button-left wow fadeInLeft animated hvr-bounce-to-right" data-wow-delay="1s">Learn More</a>
                <a href="#" class="tran3s button-right wow fadeInRight animated hvr-bounce-to-right" data-wow-delay="1s">Our Programms</a>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.camera_caption -->
    </div>
    <div data-src="assets/images/frontend/home/slider2.jpg">
        <div class="camera_caption">
            <div class="container">
                <h1 class="wow fadeInUp animated">Get Quality<br>Business Consutation</h1>
                <p class="wow fadeInUp animated"  data-wow-delay="0.5s">Since 1998 we have been business coaching NGO’s, Business Owners, Government <br>Organisations, Entrepreneurs and Corporate business entities.</p>
                <a href="#" class="tran3s button-left wow fadeInLeft animated hvr-bounce-to-right" data-wow-delay="1s">Learn More</a>
                <a href="#" class="tran3s button-right wow fadeInRight animated hvr-bounce-to-right" data-wow-delay="1s">Our Programms</a>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.camera_caption -->
    </div>
    <div data-src="assets/images/frontend/home/slider3.jpg">
        <div class="camera_caption">
            <div class="container">
                <h1 class="wow fadeInUp animated">Working with us<br>Always a little Differnet</h1>
                <p class="wow fadeInUp animated"  data-wow-delay="0.5s">Since 1998 we have been business coaching NGO’s, Business Owners, Government <br>Organisations, Entrepreneurs and Corporate business entities.</p>
                <a href="#" class="tran3s button-left wow fadeInLeft animated hvr-bounce-to-right" data-wow-delay="1s">Learn More</a>
                <a href="#" class="tran3s button-right wow fadeInRight animated hvr-bounce-to-right" data-wow-delay="1s">Our Programms</a>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.camera_caption -->
    </div>
</div>
<!-- business section ____________________________ -->
<section class="home-business-section home-two-business">
    <div class="container">
        <div class="business-text">
            <p>Our many years of experience in training make us<br>experts at enabling you to gain insight into your life<br>and into your careers.</p>
            <span></span>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="business-item">
                    <div><img src="{{ URL::asset('assets/images/frontend/Them-logo/icon-3.png') }}" alt="icon"></div>
                    <h5><a href="#">Learning — Blended to Perfection</a></h5>
                    <p>We have experience 10 years providing training online classes & with our top expert you can gain .</p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="business-item">
                    <div><img src="{{ URL::asset('assets/images/frontend/Them-logo/icon-4.png') }}" alt="icon"></div>
                    <h5><a href="#">Validated & Certified</a></h5>
                    <p>Curriculum developed by renowned experts and aligned with 40+ accreditation bodies.</p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="business-item">
                    <div><img src="{{ URL::asset('assets/images/frontend/Them-logo/icon-5.png') }}" alt="icon"></div>
                    <h5><a href="#">Achieve Your Dreams</a></h5>
                    <p>Mix of self-paced, interactive and applied learning – better experience, better results.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home-two-our-Service ____________________________ -->
<section class="home-two-our-service clear-fix">
    <div class="home-two-our-service-item float-left">
        <img src="{{ URL::asset('assets/images/frontend/home/new1.jpg')}}" style="height: 336px;" alt="image">
        <div class="item-opact-text">
            <h5><a href="#">Live Online Classes <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h5>
            <p>The classes can be attended to at any place and any time as per your choice Use our Android and iOS App to learn on the
                go.
            </p>
        </div>
    </div>
    <div class="home-two-our-service-item float-left">
        <img src="{{ URL::asset('assets/images/frontend/home/new2.jpg') }}" style="height: 336px;" alt="image">
        <div class="item-opact-text">
            <h5><a href="#">Highest Course Completion rate <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h5>
            <p>
                Our engaging learning platform, expert industry practitioners and support ninjas makes sure that you complete the course.
            </p>
        </div>
    </div>
    <div class="home-two-our-service-item float-left">
        <img src="{{ URL::asset('assets/images/frontend/home/new3.jpg') }}"  alt="image">
        <div class="item-opact-text">
            <h5><a href="#">Lifetime Access to Learning Platform <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h5>
            <p>
                Get lifetime access to the entire content including quizzes and assignments As the technology upgrades your content gets
                updated at no cost.
            </p>
        </div>
    </div>
    <div class="home-two-our-service-item float-left">
        <img src="{{ URL::asset('assets/images/frontend/home/new4.jpg') }}" style="height: 336px;" alt="image">
        <div class="item-opact-text">
            <h5><a href="#">Flexible Schedule <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h5>
            <p>
                Choose from a number of batches as per your convenience If you got something urgent to do, reschedule your batch for a
                later time.
            </p>
        </div>
    </div>
</section>
<!-- Home-two Meet Our Experts section ____________________________ -->
<section class="home-two-experts-section">
    <div class="container">
        <div class="them-main-title text-center">
            <h2>Meet Our Experts</h2>
            <span></span>
            <p>We have expert team member ready to solve your problem with fast delivery</p>
        </div>
        <div class="experts-claider-wrapper">
            <div id="home-two-experts-carousel" class="owl-carousel owl-theme">
                <div class="item text-center">
                    <div>
                        <div class="expert-img"><img src="{{ URL::asset('assets/images/frontend/home/avatar.png') }}" alt="image"></div>
                        <h5><a href="team.html">Jeson Mark</a></h5>
                        <span>Senior Financial Officer</span>
                        <p>Jannatul fa is senior financial adviso and<br>working with us over 20 years.</p>
                    </div>
                </div>
                <!-- / .Item -->
                <div class="item text-center">
                    <div>
                        <div class="expert-img"><img src="{{ URL::asset('assets/images/frontend/home/avatar.png') }}" alt="image"></div>
                        <h5><a href="team.html">Jannatul Fa.</a></h5>
                        <span>Sells & Marketing Expert</span>
                        <p>Jannatul fa is senior financial adviso and<br>working with us over 20 years.</p>
                    </div>
                </div>
                <!-- / .Item -->
                <div class="item text-center">
                    <div>
                        <div class="expert-img"><img src="{{ URL::asset('assets/images/frontend/home/avatar.png') }}" alt="image"></div>
                        <h5><a href="team.html">Rashed Kabir</a></h5>
                        <span>Design & Devevlopment Expert</span>
                        <p>Jannatul fa is senior financial adviso and<br>working with us over 20 years.</p>
                    </div>
                </div>
                <!-- / .Item -->
                <div class="item text-center">
                    <div>
                        <div class="expert-img"><img src="{{ URL::asset('assets/images/frontend/home/avatar.png') }}" alt="image"></div>
                        <h5><a href="team.html">Jannatul Fa.</a></h5>
                        <span>Sells & Marketing Expert</span>
                        <p>Jannatul fa is senior financial adviso and<br>working with us over 20 years.</p>
                    </div>
                </div>
                <!-- / .Item -->
            </div>
        </div>
    </div>
</section>
<!-- Choose Section ____________________________ -->
<section class="choose-section clear-fix">
    <div class="left-side float-left">
        <div class="left-side-opact clear-fix">
            <div class="left-side-content float-right">
                <div class="left-content-text">
                    <div class="them-main-title">
                        <h2>We Have<br>Many Reason to<br>Choose us</h2>
                        <span></span>
                    </div>
                    <p>You will not wrong to take our services as your business tool</p>
                    <a href="#" class="hvr-bounce-to-right">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="right-side float-right home-two-right-side">
        <div class="clear-fix">
            <div class="right-side-content float-left">
                <div class="right-content-text clear-fix">
                    <div class="right-side-item">
                        <i class="flaticon flaticon-user"></i>
                        <h4><a href="#">Expert Coach Trainer</a></h4>
                        <p>Our coaches have the highest certifications in different personal development aspects and years of experience coaching
                        businesses and individuals. They will mentor you and provide the guidance and support you need so you can rise above
                        challenges and achieve your personal goals, in love and relationship, career or any aspect of life you choose. Read
                        expert profiles and find the coach for you.</p>
                    </div>
                    <div class="right-side-item">
                        <i class="flaticon flaticon-umbrella"></i>
                        <h4><a href="#">Trsuted Vendor</a></h4>
                        <p>PMI, the Registered Education Provider logo, PMBOK, PMP, PgMP, CAPM,PMI-RMP, PMI-ACP, the PMI logo, and the PMP logo are
                        marks of the Project Management Institute, Inc.ITIL, PRINCE2, and MSP are registered trademarks of AXELOS Limited, used under permission of AXELOS Limited. All rights
                        reserved."The Swirl logo™ is a trade mark of AXELOS Limited, used under permission of AXELOS Limited. All rights reserved.</p>
                    </div>
                    {{-- <div class="right-side-item">
                        <i class="flaticon flaticon-medal"></i>
                        <h4><a href="#">Award Winner</a></h4>
                        <p>Lorem ipsum dolor sit amet, dolor pr.Percipit imper brute nulla novumo amet dolo.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Client Claider ____________________________ -->
<section class="home-client-claider">
    <div class="container">
        <div class="them-main-title text-center">
            <h2>What Client Say</h2>
            <span></span>
        </div>
        <div class="client-claider-wrapper">
            <div id="client-claider-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div>
                        <p>With my digital marketing master course from Edifycons, I was awarded a job as Digital Marketing Manager for a leading
                        Advertising Agency. Due to my unparallel knowledge in DM, there is also a contractually binding agreement for Equity
                        Stake. All thanks to Edifycons.</p>
                        <div>
                            <span></span>
                            <img src="{{ URL::asset('assets/images/frontend/Them-logo/icon-6.png') }}" alt="logo">
                            <h6><a href="#">Mohasin Khan</a></h6>
                            {{-- <i>Co-Founder of UnifyTheme</i> --}}
                        </div>
                    </div>
                </div>
                <!-- / .Item -->
                <div class="item">
                    <div>
                        <p>The skills gained from the certification helped me to optimize my clients' website and measure the outcome of my
                        decisions on a website.</p>
                        <div>
                            <span></span>
                            <img src="{{ URL::asset('assets/images/frontend/Them-logo/icon-6.png') }}" alt="logo">
                            <h6><a href="#">Shivani Vannan</a></h6>
                            {{-- <i>Co-Founder of UnifyTheme</i> --}}
                        </div>
                    </div>
                </div>
                <!-- / .Item -->
                <div class="item">
                    <div>
                        <p>My trainer was really very patient and made sure to address all our doubts. The journey with Edifycons has indeed been a
                        great experience because of the way the trainers explained the topics.</p>
                        <div>
                            <span></span>
                            <img src="{{ URL::asset('assets/images/frontend/Them-logo/icon-6.png') }}" alt="logo">
                            <h6><a href="#">Ang Qiao Ni Shemin</a></h6>
                            {{-- <i>Co-Founder of UnifyTheme</i> --}}
                        </div>
                    </div>
                </div>
                <!-- / .Item -->
                <div class="item">
                    <div>
                        <p>It was a nice learning experience so far, specially class assignment and recorded classroom videos help me a lot in
                        practicing and understanding the concept better. Old instructor's videos also helped a lot in adding some more knowledge
                        what i gained in live session. Would also like to thank Edifycons support team for their great support over emails to
                        get clarify the issues I had.</p>
                        <div>
                            <span></span>
                            <img src="{{ URL::asset('assets/images/frontend/Them-logo/icon-6.png') }}" alt="logo">
                            <h6><a href="#">Goh Yi Chong</a></h6>
                            {{-- <i>Co-Founder of UnifyTheme</i> --}}
                        </div>
                    </div>
                </div>
                <!-- / .Item -->
            </div>
        </div>
        <!-- / .Home Client Claider -->
    </div>
</section>
<!-- Home two Recent work ____________________________ -->
{{-- <section class="Recent-work-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="Recent-work-taitle">
                    <div class="them-main-title">
                        <h2>Check<br>Recent work</h2>
                        <span></span>
                    </div>
                    <p>Check all of our latest work we have done for our client</p>
                    <a href="service-v2.html" class="hvr-bounce-to-right">Got to Work</a>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="Recent-work-claider-wrapper">
                    <div id="Recent-work-claider-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <div><img src="{{ URL::asset('assets/images/frontend/home/recentone.jpg') }}" alt="image"></div>
                        </div>
                        <!-- / .Item -->
                        <div class="item">
                            <div><img src="{{ URL::asset('assets/images/frontend/home/img-19.jpg') }}" alt="image"></div>
                        </div>
                        <!-- / .Item -->
                        <div class="item">
                            <div><img src="{{ URL::asset('assets/images/frontend/home/img-20.jpg') }}" alt="image"></div>
                        </div>
                        <!-- / .Item -->
                        <div class="item">
                            <div><img src="{{ URL::asset('assets/images/frontend/home/img-19.jpg') }}" alt="image"></div>
                        </div>
                        <!-- / .Item -->
                    </div>
                </div>
                <!-- / .Recent work claider -->
            </div>
        </div>
    </div>
</section> --}}
<!-- Numver Section ____________________________ -->
<section class="numver-section">
    <div class="numver-section-opact">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="numver-title">
                        <h2>Company<br>Facts in Number</h2>
                    </div>
                </div>
                <div class="col-sm-8 col-xs-12">
                    <div class="numver-item clear-fix">
                        <div>
                            <h2><span class="timer" data-from="0" data-to="5237" data-speed="2000" data-refresh-interval="5">0</span></h2>
                            <p>Proud Customers</p>
                        </div>
                        <div class="M-Exp-itam">
                            <h2><span class="timer" data-from="0" data-to="120" data-speed="2000" data-refresh-interval="5">0</span></h2>
                            <p>Expert Advisor</p>
                        </div>
                        <div>
                            <h2>
                                <span class="timer" data-from="0" data-to="367" data-speed="2000" data-refresh-interval="5">0</span>
                            </h2>
                            <p>Completed Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Membership ____________________________ -->
{{-- <section class="Our-Membership">
    <div class="container">
        <div class="them-main-title text-center">
            <h2>Our Membership</h2>
            <span></span>
            <p>Check our all the membership pricing & plan before get the one.</p>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-6 Our-Membership-width">
                <div class="Our-Membership-item">
                    <div class="Membership-div item-one-color text-center">
                        <h6>Beginner</h6>
                        <strong>$7</strong>
                        <h5>Weekly Planing</h5>
                        <p>10 Videos to upload<br>50GB Bandwidth<br>Uo to 10 Email Account<br>5 contacts</p>
                        <span>14 Days Trial</span>
                        <a href="#" class="hvr-bounce-to-right">Get started</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 Our-Membership-width">
                <div class="Our-Membership-item">
                    <div class="Membership-div item-two-color text-center">
                        <h6>Reguler</h6>
                        <strong>$29</strong>
                        <h5>Monthly Planing</h5>
                        <p>10 Videos to upload<br>50GB Bandwidth<br>Uo to 10 Email Account<br>5 contacts</p>
                        <span>14 Days Trial</span>
                        <a href="#" class="hvr-bounce-to-right">Get started</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 Our-Membership-width">
                <div class="Our-Membership-item">
                    <div class="Membership-div item-three-color text-center">
                        <h6>Business</h6>
                        <strong>$99</strong>
                        <h5>Weekly Planing</h5>
                        <p>10 Videos to upload<br>50GB Bandwidth<br>Uo to 10 Email Account<br>5 contacts</p>
                        <span>14 Days Trial</span>
                        <a href="#" class="hvr-bounce-to-right">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Home Form Section ____________________________ -->
{{-- <section class="home-form-section">
    <div class="form-section-opact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-xs-12">
                    <div class="form-text-item">
                        <div class="them-main-title">
                            <h2>Get<br>A Free Consultation<br>By Our Exerts</h2>
                            <span></span>
                        </div>
                        <p>Fill the form beside and one of our specialists will get back to you as soon as possible & get your business solution.</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-xs-12">
                    <div class="form-contact-item">
                        <form action="#" class="row">
                            <div class="col-sm-6"><input type="text" placeholder="Your Name*"></div>
                            <div class="col-sm-6"><input type="email" placeholder="Your Email*"></div>
                            <div class="col-xs-12"><textarea placeholder="Your Message*"></textarea></div>
                            <div class="col-xs-12"><button class="hvr-bounce-to-right tran3s">Send Request</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Latest News Section ____________________________ -->
<section class="home-latest-news">
    {{-- <div class="container">
        <div class="them-main-title text-center">
            <h2>Latest Courses</h2>
            <span></span>
        </div>
        <div class="row news-item-wrapper">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="news-item">
                    <div class="news-item-img">
                        <img src="{{ URL::asset('assets/images/frontend/home/img-9.jpg')}}" alt="image">
                        <span>07 JUN, 2019</span>
                    </div>
                    <div class="news-text-item">
                        <h4>Business Growth Depends<br>on Your Marketing</h4>
                        <p>Vivamus varius accumsan sem, ullamcor tristi diam vel. Morbi ultri mattis dolor, egests  consequat non. Sed sem sapien, suscipit at lectus vel.</p>
                        <a href="blog-v3-singleblog.html">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="news-item">
                    <div class="news-item-img">
                        <img src="{{ URL::asset('assets/images/frontend/home/img-10.jpg')}}" alt="image">
                        <span>07 JUN, 2019</span>
                    </div>
                    <div class="news-text-item">
                        <h4>Business Growth Depends<br>on Your Marketing</h4>
                        <p>Vivamus varius accumsan sem, ullamcor tristi diam vel. Morbi ultri mattis dolor, egests  consequat non. Sed sem sapien, suscipit at lectus vel.</p>
                        <a href="blog-v3-singleblog.html">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="news-item">
                    <div class="news-item-img">
                        <img src="{{ URL::asset('assets/images/frontend/home/img-11.jpg')}}" alt="image">
                        <span>07 JUN, 2019</span>
                    </div>
                    <div class="news-text-item">
                        <h4>Business Growth Depends<br>on Your Marketing</h4>
                        <p>Vivamus varius accumsan sem, ullamcor tristi diam vel. Morbi ultri mattis dolor, egests  consequat non. Sed sem sapien, suscipit at lectus vel.</p>
                        <a href="blog-v3-singleblog.html">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>
<!-- home Logo Slide ____________________________ -->
<section class="home-logo-slide">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="them-main-title">
                    <h2>Who<br>Behind us</h2>
                    <span></span>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="logo-claider-wrapper">
                    <div id="logo-claider-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <div>
                                <img src="{{ URL::asset('assets/images/frontend/home/pennstate.jpg')}}"  style="    height: 260px;" alt="logo">
                            </div>
                        </div>
                        <!-- / .Item -->
                        <div class="item">
                            <div>
                                <img src="{{ URL::asset('assets/images/frontend/home/usf.jpg')}}" style="    height: 260px;" alt="logo">
                            </div>
                        </div>
                        <!-- / .Item -->
                        <div class="item">
                            <div>
                                <img src="{{ URL::asset('assets/images/frontend/home/strayer.jpg')}}" style="    height: 260px;" alt="logo">
                            </div>
                        </div>
                        <!-- / .Item -->
                        <div class="item">
                            <div>
                                <img src="{{ URL::asset('assets/images/frontend/home/rutgers.jpg')}}" style="    height: 260px;" alt="logo">
                            </div>
                        </div>
                        <!-- / .Item -->
                    </div>
                </div>
                <!-- / .logo-claider-wrapper -->
            </div>
        </div>
    </div>
</section>
@stop
@section('custom-footer-scripts')
@stop