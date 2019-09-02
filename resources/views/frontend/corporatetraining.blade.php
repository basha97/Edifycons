@extends('frontend/master')
@section('maincontent')

    <div class="Enar-page-banner">
        <div class="Enar-page-banner-opact">
            <div class="container">
                <div>
                    <h1>Consultancy</h1>
                    <ul>
                        <li><span></span></li>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>/</li>
                        <li><a href="{{ route('corporatetraining') }}">Consultancy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="Service-Details">
        <div class="container">
            <div class="row clear-fix">
                <div class="col-md-12 col-xs-12 float-right float-none">
                    <div class="Service-Details-right-side-item">
                        <div class="right-side-item-top-area">
                            <div class="top-area-img"><img src="{{ URL::asset('assets/images/frontend/service/service1.jpg') }}" alt="image"></div>
                            <h3><a href="#" style="border-left: 5px solid #1c75bc;border-radius: 2px;padding-left: 5px;">Our Aim</a></h3>
                            <p>We strive to build long-term relationships with our clients and ensure the highest quality of our specialists.We are ready to cover your IT resource augmentation needs and provide highly skilled professionals when you need them
                            for any duration.</p>

                            <h3><a href="#" style="border-left: 5px solid #1c75bc;border-radius: 2px;padding-left: 5px;">Consultative Selling</a></h3>

                            <h6> Time-Tested System to Empower You To Break Into a Prestigious New Career</h6>
                            <p>Our Staff augmentation services are a perfect solution for resource gaps, particularly for bleeding edge technology. We
                            can assist your organization in filling the so-called ‘skills gap’ that allows organizations to engage top-level
                            professionals for individual projects without having to incur the same costs of hiring new full-time employees. The
                            selected specialists can join your project fast and get down to work immediately. You can change your requirements
                            specification, fully control the implementation of the project and control how the augmented team works..</p>
                        </div>
                        <div class="right-side-item-Our-Approch clear-fix">
                            <div class="Approch-img">
                                <img src="{{ URL::asset('assets/images/frontend/service/img-8.jpg') }}" alt="image">
                            </div>
                            <div class="Approch-text">
                                <h3 style="border-left: 5px solid #1c75bc;border-radius: 2px;padding-left: 5px;">Our Approch</h3>
                                <h6>Organization benefits with our Staff Augmentation Services
                                </h6>
                                <ul>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Reduced capital costs</li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> No infrastucture investment</li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Not bound by geographical limitation</li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Having short-term staff with ideal skills in required technologies</li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Enjoying benefits from collective experience with similar projects</li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Increased efficiency and achievement of short-term technology goals</li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Having the flexibility to react quickly to unanticipated project changes or problems</li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Increased customer satisfaction</li>
                                </ul>
                            </div>
                        </div>
                        <div class="right-side-item-benefits">
                            <h3>What are the benefits of business coaching?</h3>
                            <p>Business coaching, as opposed to personal life coaching, has the advantage of an easily
                                measured benefit - profitability. All business coaching is aimed at increasing the bottom
                                line of the company by increasing revenues and/or reducing costs. Coaching can do both, if
                                done right.</p>
                            <ul>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> More courageous conversations, more
                                    intentionality, more strategic approach.</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Better corporate culture.</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> Enabled an environment of internal
                                    coaching and encouraged staff at all levels to see the value in own external.</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> People listen to each other, support
                                    each other and enjoy coming to work more. Performance has improved.</li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i> My department has achieved a much better
                                    team spirit.</li>
                            </ul>
                            <p>Cutting edge companies know and understand the value of their people and invest in their
                                performance, well-being, and professional development. They understand that a happy
                                workforce is a more productive one. Coaching is one of the best tools available to companies
                                to bring about change and transformation in their people.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-3 col-xs-12 float-left float-none">
                    <div class="Service-Details-left-side-item">
                        <ul>
                            <li><a href="#">Consultative Selling</a></li>
                            <li><a href="#">Life Insurance plan</a></li>
                            <li><a href="#">Financial Planing</a></li>
                            <li><a href="#">Retirement lan</a></li>
                            <li><a href="#">Investment Plaining</a></li>
                            <li><a href="#">Colsunting Support</a></li>
                        </ul>
                        <div class="Download-PDF-item">
                            <h5>Our Brochure</h5>
                            <p>Our 2016 financial prospectus brochure for easy to read guide all of the services offered.
                            </p>
                            <div><img src="images/Them-logo/PDF-1.jpg" alt="logo"> <a href="#">Download PDF</a></div>
                        </div>
                        <div class="coll-us-item">
                            <p>Have any Question ?<br>Call Us :<br><span>(+880) 1723801729</span></p>
                            <h6><a href="#">More Details</a></h6>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

@stop
@section('custom-footer-scriptsbackend')
@stop