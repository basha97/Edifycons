@extends('frontend/master')
<style>
    .courseTitle{
		margin-bottom: 25px;
		font-family: monospace;
		font-size: xx-large;
		font-weight: 600;
		border-left: 10px solid #1c75bc;
		padding-left: 15px;
	}
    .keyFeaturesDesign{
        margin-top: 30px;
		margin-bottom: 25px;
		font-family: monospace;
		font-size: xx-large;
		font-weight: 600;
		border-left: 10px solid #1c75bc;
		padding-left: 15px;
	}
    .demo {
        background: linear-gradient(to right, #4e42b9, #e98223)
    }

    a:hover,
    a:focus {
        text-decoration: none;
        outline: none;
    }

    #accordion .panel {
        border: none;
        border-radius: 5px;
        box-shadow: none;
        margin-bottom: 10px;
        background: transparent;
    }

    #accordion .panel-heading {
        padding: 0;
        border: none;
        border-radius: 5px;
        background: transparent;
        position: relative;
    }

    #accordion .panel-title a {
        display: block;
        padding: 20px 30px;
        margin: 0;
        background: rgb(31, 119, 189);
        font-size: 17px;
        font-weight: bold;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        border-radius: 5px;
        position: relative;
    }

    #accordion .panel-title a.collapsed {
        border: none;
    }

    #accordion .panel-title a:before,
    #accordion .panel-title a.collapsed:before {
        content: "\f107";
        font-family: "FontAwesome";
        width: 30px;
        height: 30px;
        line-height: 27px;
        text-align: center;
        font-size: 25px;
        font-weight: 900;
        color: #fff;
        position: absolute;
        top: 15px;
        right: 30px;
        transform: rotate(180deg);
        transition: all .4s cubic-bezier(0.080, 1.090, 0.320, 1.275);
    }

    #accordion .panel-title a.collapsed:before {
        color: rgba(255, 255, 255, 0.5);
        transform: rotate(0deg);
    }

    #accordion .panel-body {
        padding: 20px 30px;
        background: rgba(255, 255, 255, 0.8);
        font-size: 15px;
        color: #fff;
        line-height: 28px;
        letter-spacing: 1px;
        border-top: none;
        border-radius: 5px;
        box-shadow: 0 0 10px #7d7b7b;
    }
</style>
@section('maincontent')
<div ng-app="edifycons" ng-controller="sub2coursesCtrl">
    <div class="Enar-page-banner">
        <div class="Enar-page-banner-opact">
            <div class="container">
                <div>
                    <h1>@{{ form.course_name }}</h1>
                    <ul>
                        <li><span></span></li>
                        <li><a href="index-2.html">Home</a></li>
                        <li>/</li>
                        <li><a href="#">Project</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="Single-Project">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="Single-Project-left-Side">
                        <div class="Single-Project-img-item"><img
                                src="@{{ form.course_img_url }}" alt="image"></div>
                        <h3><a href="#">@{{ form.menu_name }}</a></h3>
                        <h3 class="courseTitle">Course Description</h3>
                        <p style="font-size:19px;font-family:monospace;font-weight:600;"> @{{ form.course_long_description }}</p>

                        <div class="col-md-12" style="margin-top: 40px;margin-bottom: 25px;">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default" ng-repeat="coursessub in form.course_content track by $index">
                                    <div class="panel-heading" role="tab" id="header@{{ $index }}">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse@{{ $index }}" aria-expanded="true" aria-controls="collapse@{{ $index }}">
                                               @{{ coursessub.title }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse@{{ $index }}" class="panel-collapse collapse in" role="tabpanel"
                                        aria-labelledby="header@{{ $index }}">
                                        <div class="panel-body">
                                            <p style="color: black;">@{{ coursessub.description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="Result">
                            <h3>Result</h3>
                            <p>Everybody pulled his weight. Gee our old Lasalle ran great. Those were the days. If you
                                have a problem if no one else can help and if you can find them maybe you can hire. And
                                we'll do it our way yes our way. Make all our dreams come true for me and you</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="Single-Project-Right-Side">
                        <div class="Single-Project-img-item"><img
                                src="{{ URL::asset('assets/images/frontend/home/big.jpg')}}" alt="image"></div>
                        <h3 class="keyFeaturesDesign"> Key Features</h3>
                        <p style="font-size:19px;font-family:monospace;font-weight:600;">@{{ form.course_short_description }}</p>
                        <ul>
                            <li>
                                <h6><a href="#">Clients</a></h6>
                                <span>Trusted Business Client</span>
                            </li>
                            <li>
                                <h6><a href="#">Categories</a></h6>
                                <span>Investment, Trading</span>
                            </li>
                            <li>
                                <h6><a href="#">Completed</a></h6>
                                <span>June 03, 2017</span>
                            </li>
                            <li>
                                <h6><a href="#">Project Budgets</a></h6>
                                <span>$12500</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

@section('custom-footer-scripts')
<script type="text/javascript">
    var app = angular.module('edifycons', []);
    app.controller('sub2coursesCtrl', function($scope,$http,$timeout) {
        console.log('5');
        $scope.form ={};
        $scope.form = {!! json_encode($record) !!};
        console.log($scope.form)
     
    });
</script>
@stop