<section id="head-section" style="background: url({{Storage::url('v.jpg')}}) no-repeat center;
background-size: cover;
max-width: 1200px;
margin:0 auto;">
<div class="home-section dark-overlay">
	<div class="home-inner container">
		<div class="row">
			<div class="col-md-5">
				<div class="logo float-lg-right text-sm-center text-center">
					<div class="text-md-center float-lg-left">
						<img src="{{Storage::url('burger.jpg')}}" style="height: 120px; width: 120px;">
					</div>
					<div class="float-lg-left mt-md-3 ml-3"><h2 class="text-white">{{$res->name}}
					</h2><p class="text-md-center text-lg-left text-sm-center mb-0"><i class="fa fa-star" aria-hidden="true" style="color: gold;"></i><i class="fa fa-star" aria-hidden="true" style="color: gold;"></i><i class="fa fa-star" aria-hidden="true" style="color: gold;"></i></p>
					<p class="text-white text-sm-center text-md-center text-lg-left">Open</p></div>
				</div>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-4 rel"
			style="font-weight: 550;">
			<div class="mt-3 text-center"><p class="text-white">{{$res->address, $res->city}}, {{$res->district}},{{$res->division}}, Bangaldesh</p>
			</div>
			<div class="text-center ab">
				<p class="text-white mr-2" style="display: inline;">
					Open : 8.30am
				</p>
				<p class="text-white mr-2" style="display: inline;">
					Close : 11.00pm
				</p>
				<p  class="text-white mr-2"style="display: inline;">
					Min delivery Time : 45min
				</p>

			</div>
		</div>
	</div>


</div>

</div>

<nav class="nav navbar navbar-light navbar-expand bg-light">
	<ul class="navbar-nav">

		<li class="nav-item mt-1"> <h4 class="d-inline nav-item font-weight-bold nav-link" style="color: #D70F64;">{{$res->discount}}%OFF</h4></li>
		<li class="nav-item"> <a class="nav-link" href="">{{ __('Home') }}</a></li>
		<li class="nav-item"><a class="nav-link" href="">{{ __('Review') }}</a></li>
		<li class="nav-item"><a class="nav-link" href="">{{ __('Rating') }}</a></li>
	</ul>
</nav>

</section>
