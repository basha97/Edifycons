<div class="theme-menu-fix-banner theme-menu-V-two-fix">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-6 manu-logo-v-two-width">
				<div class="manu-logo-v-two">
					<a href="{!! route('index') !!}"><img src="{{ URL::asset('assets/images/frontend/Them-logo/edifyiconlogo5.png') }}" alt="logo" style="max-width: 60%;"></a>
				</div>
			</div>

			<div class="col-md-1 col-xs-3 manu-icon-padding-mainas float-right" style="margin-top: 41px;">
				{{-- <div class="manu-icon">
					<div class="search_option float-right">
						<button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
						<form action="#" class="p_color_bg dropdown-menu" aria-labelledby="searchDropdown">
							<input type="text" placeholder="Search here.....">
							<button><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					</div> <!-- End of .search_option -->

					<div class="float-right">
						<a href="#">
							<i class="fa fa-shopping-bag" aria-hidden="true"> <span> 0 </span> </i>
						</a>
					</div>
				</div> --}}
			</div>
		
			<div class="col-md-8 col-xs-3 th-main-menu-vtwo-width">
				<!-- Theme Main Menu ____________________________ -->
				<div class="main-menu theme-main-menu">
					<!-- Menu -->
					<nav class="navbar">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed tran3s" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
								<span class="sr-only tran3s">Toggle navigation</span>
								<span class="icon-bar tran3s"></span>
								<span class="icon-bar tran3s"></span>
								<span class="icon-bar tran3s"></span>
							</button>
						</div>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="navbar-collapse-1">
							<ul class="nav navbar-nav" style="
    margin-top: 21px;
">

								<?php

									$menus = DB::table('menu_master')->where('status','active')->whereType('main')->select('menu_name','menu_url','id')->get();

								?>

								@foreach($menus  as $menu)
								<li class="dropdown-holder active current-page-item Active-manu"><a href="{{ $menu->menu_url }}"> {{  $menu->menu_name }} </a>
									

									<?php

										$menussubs = DB::table('menu_meta')->where('menu_id',$menu->id)->select('menu_name','menu_url','id')->get();
									?>

									@if(sizeof($menussubs))
									<ul class="sub-menu">
										@foreach($menussubs as $menussub)
										<li><a href="/subcoursesdetails/{{ $menussub->menu_name }}">
										{{ $menussub->menu_name }} </a>
											@endforeach
										
									</ul>

									@endif


	
								</li>
								@endforeach

								{{-- <li class="dropdown-holder"><a href="#">Courses</a>
								
								</li> --}}

								
								
								
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div> <!-- /.main-menu -->
			</div>
		</div>
	</div> <!-- /.container main-menu -->
</div> <!-- /.theme-menu-fix-banner -->