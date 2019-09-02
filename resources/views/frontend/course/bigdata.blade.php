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
</style>
@section('maincontent')
<div ng-app="edifycons" ng-controller="bigdataCtrl">
	<div class="Enar-page-banner">
		<div class="Enar-page-banner-opact">
			<div class="container">
				<div>
					<h1>@{{ mastername.menu_name }}</h1>
					<ul>
						<li><span></span></li>
						<li><a href="{!! route('index') !!}">Home</a></li>
						<li>/</li>
						<li><a href="{!! route('course') !!}">Courses</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- /.Enar-page-banner -->
	<section class="home-gallery">
		<div class="container">
			<div class="home-gallery_wrapper Projects-gallery-v-One">

				<div class="gallery_item_wrapper row" id="isotop-gallery-wrapper">
					<div class="grid-sizer"></div>

					<!-- Single Item -->
					<div class="isotop-item Finance Growth Training" ng-repeat="courses in form">
					<h6 class="courseTitle">@{{courses.course_name}}</h6>
						<div class="single_item_wrapper">
							<img src="@{{ courses.course_img_url }}" alt="image">
							<div>
								<a href="/sub2coursesdetails/@{{ courses.id }}">+</a>
							</div>
						</div> <!-- End of .single_item_wrapper -->
					</div> <!-- End of .isotop-item -->

					{{-- <div class="isotop-item Finance Growth Training" ng-repeat="courses in form[0].subcourses">
						<div class="single_item_wrapper">
							<img src="{{ URL::asset('assets/images/frontend/home/big.jpg')}}" alt="image">
							<div>
								<a href="{!! route('singlecourse') !!}">+</a>
							</div>
						</div> <!-- End of .single_item_wrapper -->
					</div> <!-- End of .isotop-item --> --}}

						


				</div> <!-- End of .gallery_item_wrapper -->
			</div> <!-- End of .WORK-item_wrapper -->
		</div>
	</section>
</div>
@stop
@section('custom-footer-scripts')

<script type="text/javascript">
	var app = angular.module('edifycons', []);
	app.controller('bigdataCtrl', function($scope,$http,$timeout) {
		console.log('5');
		$scope.form ={};
		$scope.form = {!! json_encode($record) !!};

		$scope.mastername = {!! json_encode($mastervalue) !!};
		console.log($scope.mastername);
		console.log($scope.form)
		console.log($scope.form[0].subcourses);
	});
</script>

	@stop