@extends('frontend/master')
@section('maincontent')
<div class="Enar-page-banner">
					<div class="Enar-page-banner-opact">
						<div class="container">
							<div>
								<h1>Cyber Security</h1>
								<ul>
									<li><span></span></li>
									<li><a href="{!! route('index') !!}">Home</a></li>
									<li>/</li>
									<li><a href="{!! route('projectmanagement') !!}">Courses</a></li>
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
							<div class="isotop-item Finance Growth Training">
								<div class="single_item_wrapper">
									<img src="{{ URL::asset('assets/images/frontend/home/img-3.jpg')}}" alt="image">
									<div>
										<a href="single-projects.html">+</a>
									</div>
								</div> <!-- End of .single_item_wrapper -->
							</div> <!-- End of .isotop-item -->
							
							<!-- Single Item -->
							<div class="isotop-item Business Market Training">
								<div class="single_item_wrapper">
									<img src="{{ URL::asset('assets/images/frontend/home/img-4.jpg' )}}" alt="image">
									<div>
										<a href="single-projects.html">+</a>
									</div>
								</div> <!-- End of .single_item_wrapper -->
							</div> <!-- End of .isotop-item -->
							
							<!-- Single Item -->
							<div class="isotop-item Market">
								<div class="single_item_wrapper">
									<img src="{{ URL::asset('assets/images/frontend/home/img-5.jpg')}}" alt="image">
									<div>
										<a href="single-projects.html">+</a>
									</div>
								</div> <!-- End of .single_item_wrapper -->
							</div> <!-- End of .isotop-item -->
							
							<!-- Single Item -->
							<div class="isotop-item Business Growth Training">
								<div class="single_item_wrapper">
									<img src="{{ URL::asset('assets/images/frontend/home/img-6.jpg')}}" alt="image">
									<div>
										<a href="single-projects.html">+</a>
									</div>
								</div> <!-- End of .single_item_wrapper -->
							</div> <!-- End of .isotop-item -->
							
							<!-- Single Item -->
							<div class="isotop-item Business Finance Growth Training">
								<div class="single_item_wrapper">
									<img src="{{ URL::asset('assets/images/frontend/home/img-7.jpg')}}" alt="image">
									<div>
										<a href="single-projects.html">+</a>
									</div>
								</div> <!-- End of .single_item_wrapper -->
							</div> <!-- End of .isotop-item -->
							
							<!-- Single Item -->
							<div class="isotop-item Finance Market Growth Training">
								<div class="single_item_wrapper">
									<img src="{{ URL::asset('assets/images/frontend/home/img-8.jpg')}}" alt="image">
									<div>
										<a href="single-projects.html">+</a>
									</div>
								</div> <!-- End of .single_item_wrapper -->
							</div> <!-- End of .isotop-item -->				
													
							
						</div> <!-- End of .gallery_item_wrapper -->
					</div> <!-- End of .WORK-item_wrapper -->
				</div>
			</section>
@stop
@section('custom-footer-scripts')

@stop