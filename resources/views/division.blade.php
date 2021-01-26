@extends('layouts.master')
@include('layouts.menu')
@section('css')
<style>
#division .city{
	font-family: 'maiandra GD';
	font-weight: bold;
	color: #4E3B3B;
}
#division .res_inner{
	position: relative;
}
#division .discount{;
	position: absolute;
	right: 0px;
	top:0px;

}
#division .dis_text{
	background-color: #EC4747;
	color: white;
	font-family: 'maiandra GD';
	font-weight: bold;

}
#division .HovClass{
	    cursor: pointer;
		transition: margin-top 0.3s, box-shadow ;
	}
#division .HovClass:hover{
		margin-top:-10px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	p{
		/* font-size: 15px; */
	}

</style>
@endsection
@section('content')
<section id="division">
	  <h1 class="ml-5 city mt-3">
	  	{{$city}}
	  </h1>
	<div class="container mt-5">
		<h2 class="city">Best Rated</h2>
		<div class="row">

			@foreach($restaurants as $restaurant)


			<div class="col-md-4 col-lg-3 col-sm-6 mb-3">
				<a href="{{url('restaurant/'.$restaurant->id)}}">
				<div class="res_inner clearfix" id="{{$restaurant->id}}" onmouseover="hover({{$restaurant->id}})">
					<img src="{{Storage::url('restaurant/'.$restaurant->image.'.jpg')}}" width="100%" height="200px;">
					<div class="discount">
						<h5 class="dis_text pl-3 pr-3 pt-2 pb-2">{{$restaurant->discount}}%</h5>
					</div>
					<div class="p-2">
						<div class="float-left">{{$restaurant->name}}</div>

						<div class="float-right"><p class="text-muted">
<i class="fa fa-star p-1" aria-hidden="true" style="color: gold;"></i>{{$restaurant->rating}}</p>
</div>
</div>
				</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>

	<div class="container mt-5">

		<h2 class="city">Offer</h2>

				<div class="row">

			@foreach($offer_cities as $city)


			<div class="col-md-4 col-lg-3 col-sm-6 mb-3">
					<a href="{{url('restaurant/'.$restaurant->id)}}">
				<div class="res_inner clearfix" id="{{$city->id}}11" onmouseover="hover({{$city->id}}11)">
					<img src="{{Storage::url('restaurant/'.$city->image.'.jpg')}}" width="100%" height="200px;">
					<div class="discount">
						<h5 class="dis_text pl-3 pr-3 pt-2 pb-2">{{$city->discount}}%</h5>
					</div>
						<div class="p-2">
						<div class="float-left">{{$city->name}}</div>

						<div class="float-right"><p class="text-muted">
<i class="fa fa-star p-1" aria-hidden="true" style="color: gold;"></i>{{$restaurant->rating}}</p>
</div>
</div>

				</div>
			</a>
			</div>
			@endforeach
		</div>

	</div>
</section>
@include('layouts.footer')

<script>
	function hover(id){

		var Id=document.getElementById(""+id+"");
		Id.classList.add('HovClass');
	}
</script>

@endsection
