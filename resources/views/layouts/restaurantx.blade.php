@extends('layouts.master')
@section('css')
<style>
*{
	margin:0;
	padding:0;
}
/*scroll menu*/
div.scrollmenu {
	background-color: #333;
	overflow: auto;
	white-space: nowrap;
	margin:0;
	padding:0;
}

div.scrollmenu a {
	display: inline-block;
	color: white;
	text-align: center;
	padding: 14px;
	text-decoration: none;
}

div.scrollmenu a:hover {
	background-color: #777;
}
.icc{
	color: DodgerBlue;

}
.ic{
	color: white;
}
.bttn {
	color:red;
	background-color: white;
	border: 1px solid DodgerBlue ;
	border-radius: 20%;

	padding:0px 5px;
	font-size: 15px;
	cursor: pointer;

}

/* Darker background on mouse-over */
.btnnn{
	background-color: RoyalBlue;
}
.responsive-card{
	display: none;
}
#scroll-hor-menu{
	display: none;
	font-family:serif;
}
#b-menu{
	display: block;

}
h5{
	font-family: monospace;
}
small{
	letter-spacing: .08em;
}
.shopping-card-scroll{
position: fixed;
/* /z-index: 1; */
top: 100px;
width: 28%;
display: block;
}
@media screen and (max-width: 600px) {

	#scroll-hor-menu{
		display: block;
		font-family: Verdana;
	}
	#b-menu{
		display: none;
	}
}
@media screen  and (max-width:767px) {
	.responsive-card{
		display: block;
		cursor: pointer;
	}
	/* .shopping-card-scroll{
		display: none;
	} */

}

</style>
@endsection
@section('content')
<section id="TopMenu" class="sticky-top">
	@include('layouts.menu')
</section>


<section id="head-section" style="background: url({{Storage::url('v.jpg')}}) no-repeat center;
background-size: cover;
max-width: 1200px;
margin:0 auto;">
<div class="home-section dark-overlay">
	<div class="home-inner">
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
<!-- <section id="menu">
<div>

<nav class="nav navbar navbar-light navbar-expand bg-light">
<ul class="navbar-nav ml-5">
<li class="nav-item"> <a class="nav-link" href="">{{ __('Home') }}</a></li>
<li class="nav-item"><a class="nav-link" href="">{{ __('Review') }}</a></li>
<li class="nav-item"><a class="nav-link" href="">{{ __('Rating') }}</a></li>
</ul>
</nav>
</div>
</section> -->
<br>
<br>
<section id="scroll-hor-menu">
	<div class="scrollmenu">
		<nav class="navbar navbar-expand mt-0 pt-0 pb-0 mb-0">

			<ul class="navbar-nav">
				<?php
				$out='';
				for ($i=0; $i <count($menu) ; $i++) {
					# code...
					$out.='<li class="nav-item" style="border:0px;">
					<a class="nav-link" href="#'.$i.'">'.$menu[$i]['nav_li'].'</a></li>';
				}
				echo $out;
				//    unset($menus);
				?>
			</ul>

		</nav>

	</div>

</section>


<section id="detail">
	<div class="container">
		<div class="row" style="position:;">
			<div class="col-md-2"id="b-menu">
				<div class="card" style="position:;" id="sideMenu" >
					<div class="card-header" style="background-color: #FFFF;">
						<h4 class="font-weight-bold">Catagory</h4>
					</div>
					<nav class="navbar navbar-light scroll " style="font-weight: 600;">
						<ul class="navbar-nav " id="scroll-nav" >



							<?php
							$out='';

							for ($i=0; $i <count($menu) ; $i++) {
								# code...
								$out.='<li class="nav-item" style="border:0px;">
								<a class="nav-link" id="'.$i.'" href="#'.$i.'">'.$menu[$i]['nav_li'].'</a></li>';
							}
							echo $out;
							//    unset($menus);
							?>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-md-6 " style="max-width: 600px;"  data-spy="scroll" data-target="#navbar-example3" data-offset="0">
				<?php
				$k=0;

				for ($i=0; $i <count($menu) ; $i++) {
					# code...
					for ($j=0; $j <count($restaurant) ; $j++) {
						# code...
						//echo $restaurant[$j]['name'];
						if ($menu[$i]['id']==$restaurant[$j]['nav_li']) {
							if ($k==0) {
								//	dd('ima');

								echo '<h5 class="p-2" style="font-weight:600;" id="'.$i.'e"> <span class="dot"></span>
								<span class="dot"></span>
								<span class="dot mr-2"></span>'.$menu[$i]['nav_li'].' <span class="dot"></span>
								<span class="dot"></span>
								<span class="dot"></h5>';
								$k=1;
							}
							$output='';
							$output.='<div class="card border text-center card-hover" style="max-height:150px;" id="'.$i.''.$j.'">
							<div class="card-body" style="margin-top:-10px; margin-bottom:-10px;">
							<h6 class="card-title pb-2" style="border-bottom:1px solid #DEE2E6;font-weight: 600;">'.$restaurant[$j]['name'].'</h6><small class="card-text text-muted" style="margin-top:-10px;">'.$restaurant[$j]['detail'].'</small>
							<div class="row" style="margin-top:;"><div class="col-md-4 mt-1"><small class="text-muted">Price : '.$restaurant[$j]['price'].'Tk</small></div><div class="col-md-4"><small class=text-muted>1:3</small></div><div class="col-md-4 hh"><button type="button" value="'.$restaurant[$j]['price'].'" class="addd bttn" onclick="my('.$restaurant[$j]['id'].');" id="'.$restaurant[$j]['id'].'" name="'.$restaurant[$j]['name'].'" onmouseover="hoveradd(this)" onmouseout="hoverremove(this)"><i class="fas fa-plus icc" id="'.$restaurant[$j]['id'].'a"></i></button></div>
							</div>

							</div>
							</div>';
							echo $output.'<br>';
						}
					}
					$k=0;
				}


				?>



			</div>
			<div class="col-md-4">
				<div class="card border shopping-card" style="width:">
					<h4 class="card-header text-center font-weight-bold" style="background-color: #FFFF;">Food Card</h4>
					<div class="card-body">
						<div id="shop-card" class="container text-center">
							<img src="{{Storage::url('shop.png')}}" class="mx-auto"  style="max-width: 150px;">
							<div class="text-center"><h4 class="text-muted">Your Card is empty!</h4></div>
						</div>
						<div class="card-menu"></div>
						<div class="row order" style="display: none;">
							<div class="col-md-6 text-muted"><p>Subtotal:</p></div>
							<div class="col-md-6 text-muted text-right"></div>
						</div>
						<div class="row order" style="display: none;">
							<div class="col-md-6 text-muted"><p>Delivery Fee:</p></div>
							<div class="col-md-6 text-muted text-right"></div>
						</div>
						<div class="row order" style="display: none;">
							<div class="col-md-6 text-muted"><p>Vat:</p></div>
							<div class="col-md-6 text-muted text-right"></div>
						</div>
						<div class="row order"  style="display: none;">
							<div class="col-md-6 font-weight-bold"><p>Total:</p></div>
							<div class="col-md-6  text-right font-weight-bold" id="pr"></div>
						</div>
						<div class="order"  style="display: none;">
							<button type="button" class="btn btn-outline-danger btn-block" style="border-radius: 0px;">Order</button>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>
<!-- <div class="cl"><p class="p">kjldfs</p></div> -->
<div class=" responsive-card" onclick="res_card_show(this);">
	<div class="fixed-bottom ">
		<div style="background-color: #DC3545;">

			<div class="row">
				<div class="col-3"><div class="float-left  p-2 ml-2"><div style="border-radius: 50%; background-color: white;color: #DC3545; height: 30px;width: 30px; padding-top: 2px;" class="text-center"  id="egg"></div></div></div>
				<div class="col-6"><div class="text-white pt-2 text-center"><label for="cardh">View Your Card

					<button name="cardh" id="cardh" style="display: none;" type="button" class="" data-toggle="modal" data-target="#exampleModalLong"></button>
				</label></div></div>
				<div class="col-3"><div class="float-right text-white p-2" id="prr"></div></div>
			</div>



		</div>
	</div>
</div>
<!-- <div>
<label for="cardh">View

<button name="cardh" id="cardh" style="display: none;" type="button" class="" data-toggle="modal" data-target="#exampleModalLong"></button>
</label>
</div> -->

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card border">
					<h4 class="card-header text-center font-weight-bold" style="background-color: #FFFF;">Food Card</h4>
					<div class="card-body">
						<div id="mobo-shop-card" class="container text-center">
							<img src="{{Storage::url('shop.png')}}" class="mx-auto"  style="max-width: 150px;">
							<div class="text-center"><h4 class="text-muted">Your Card is empty!</h4></div>
						</div>
						<div class="card-menu"></div>
						<div class="row order" style="display: none;">
							<div class="col-md-6 text-muted"><p>Subtotal:</p></div>
							<div class="col-md-6 text-muted text-right"></div>
						</div>
						<div class="row order" style="display: none;">
							<div class="col-md-6 text-muted"><p>Delivery Fee:</p></div>
							<div class="col-md-6 text-muted text-right"></div>
						</div>
						<div class="row order" style="display: none;">
							<div class="col-md-6 text-muted"><p>Vat:</p></div>
							<div class="col-md-6 text-muted text-right"></div>
						</div>
						<div class="row order"  style="display: none;">
							<div class="col-md-6 font-weight-bold"><p>Total:</p></div>
							<div class="col-md-6  text-right font-weight-bold" id="pR"></div>
						</div>
						<div class="order"  style="display: none;">
							<button type="button" class="btn btn-outline-danger btn-block" style="border-radius: 0px;">Order</button>
						</div>
					</div>


				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
function fu(){
	//	console.log("cardh");
}

function hoveradd(x){
	x.classList.add("btnnn");

	var IconId=document.getElementById(x.id+'a').id;
	var iocn=document.getElementById(IconId).classList.add('ic');


}
function hoverremove(x){
	x.classList.remove("btnnn");

	var IconId=document.getElementById(x.id+'a').id;
	var iocn=document.getElementById(IconId).classList.remove('ic');


}

$('.card-hover').hover(function() {
	$id=this.id;
	$('#'+$id+'').addClass('diva').addClass('shadow-sm');
	// $('#'+$id+'').css('margin-top','-10px');
	// $('#'+$id+'').css('margin-bottom','10px');
	/* Stuff to do when the mouse enters the element */
}, function() {
	$('.card-hover').removeClass('shadow-sm');
	//  $('#'+$id+'').css('margin-top','0px');
	//  $('#'+$id+'').css('margin-bottom','0px');

});


function hide(){

	if(array.length!=0){
		console.log(array.length);
		$('#shop-card').hide();
		$('#mobo-shop-card').hide();
		$('.order').show();
	}else{
		$('#shop-card').show();
		$('#mobo-shop-card').show();
		$('.order').hide();

	}
}




var array=[];

function my(id){
	var found=0;
	var keep;
	var price=  $('#'+id+'').attr('value');
	var name=  $('#'+id+'').attr('name');

	for(var i=0;i<array.length;i++){
		//console.log(array[i][0]);

		if(array[i][0]==id){
			found=1;
			keep=i;

			break;
		}
	}
	//console.log(found);
	if(found==1){
		array[keep][3]++;
		found=0;
		//	console.log(array);

		//  alert(name);
	}
	else{
		array.push([id,price,name,1]);
		console.log(array);


	}
	$('').append('');
	$('.remove').remove();
	for(var i=0;i<array.length;i++){

		$('.card-menu').append('<div class="remove"><div class="row"><div class="col col-md-6"><p>'+array[i][2]+'</p></div><div class="col col-md-6 text-right"><button type="button" onclick="add('+i+');"  class="addd bttn" onmouseover="hoveradd(this)" onmouseout="hoverremove(this)" id="'+i+'a"><i class="fas fa-plus icc"  id="'+i+'aa"></i></button><p style="display:inline" class="p-3 text-muted">'+array[i][3]+'</p><button type="button" onclick="sub('+i+');" class="addd bttn" onmouseover="hoveradd(this)" onmouseout="hoverremove(this)" id="'+i+'aa"><i class="fas fa-minus icc" id="'+i+'aaa"></i></button></div></div><div class="row"><div class="col col-md-6"><p class="text-muted">Price:</p></div><div class="col col-md-6 text-right"><p class="text-muted">'+(array[i][1]*array[i][3])+'</p></div></div></div>');
	}
	total();
	hide();
	mobototal();

}



function add(num) {
	//console.log(num);
	array[num][3]++;
	$('.remove').remove();
	for(var i=0;i<array.length;i++){

		$('.card-menu').append('<div class="remove"><div class="row"><div class="col col-md-6"><p>'+array[i][2]+'</p></div><div class="col col-md-6 text-right"><button type="button" onclick="add('+i+');"  class="addd bttn" onmouseover="hoveradd(this)" onmouseout="hoverremove(this)" id="'+i+'a"><i class="fas fa-plus icc"  id="'+i+'aa"></i></button><p style="display:inline" class="p-3 text-muted">'+array[i][3]+'</p><button type="button" onclick="sub('+i+');" class="addd bttn" onmouseover="hoveradd(this)" onmouseout="hoverremove(this)" id="'+i+'aa"><i class="fas fa-minus icc" id="'+i+'aaa"></i></button></div></div><div class="row"><div class="col col-md-6"><p>Price:</p></div><div class="col col-md-6 text-right"><p class="text-muted">'+(array[i][1]*array[i][3])+'</p></div></div></div>');
	}
	total();
	mobototal();

	hide();
	// body...
}




function sub(num) {

	if(--array[num][3]==0){
		//array.pop(array[num]);
		array.splice(num, 1)
		$('.remove').remove();
		for(var i=0;i<array.length;i++){

			$('.card-menu').append('<div class="remove"><div class="row"><div class="col col-md-6"><p>'+array[i][2]+'</p></div><div class="col col-md-6 text-right"><button type="button" onclick="add('+i+');"  class="addd bttn" onmouseover="hoveradd(this)" onmouseout="hoverremove(this)" id="'+i+'a"><i class="fas fa-plus icc"  id="'+i+'aa"></i></button><p style="display:inline" class="p-3 text-muted">'+array[i][3]+'</p><button type="button" onclick="sub('+i+');" class="addd bttn" onmouseover="hoveradd(this)" onmouseout="hoverremove(this)" id="'+i+'aa"><i class="fas fa-minus icc" id="'+i+'aaa"></i></button></div><div class="row"><div class="col col-md-6"><p>Price:</p></div><div class="col col-md-6 text-right"><p class="text-muted">'+(array[i][1]*array[i][3])+'</p></div></div></div>');
		}
		total();
		hide();
		mobototal();


	}
	else{

		$('.remove').remove();
		for(var i=0;i<array.length;i++){

			$('.card-menu').append('<div class="remove"><div class="row"><div class="col col-md-6"><p>'+array[i][2]+'</p></div><div class="col col-md-6 text-right"><button type="button" onclick="add('+i+');"  class="addd bttn" onmouseover="hoveradd(this)" onmouseout="hoverremove(this)" id="'+i+'a"><i class="fas fa-plus icc"  id="'+i+'aa"></i></button><p style="display:inline" class="p-3 text-muted">'+array[i][3]+'</p><button type="button" onclick="sub('+i+');" class="addd bttn" onmouseover="hoveradd(this)" onmouseout="hoverremove(this)" id="'+i+'aa"><i class="fas fa-minus icc" id="'+i+'aaa"></i></button></div></div><div class="row"><div class="col col-md-6"><p>Price:</p class="text-muted"></div><div class="col col-md-6 text-right"><p>'+(array[i][1]*array[i][3])+'</p></div></div></div>');
		}
		total();
		hide();
		mobototal();


	}
}




function total() {
	//	console.log('called');
	var total=0;
	for(var i=0;i<array.length;i++){
		if(array[i][3]==1){
			total=total+parseInt(array[i][1]);
		}
		else{
			total=total+(parseInt(array[i][1])*parseInt(array[i][3]))
		}
	}
	document.getElementById("pr").innerHTML = ''+total+'';
	document.getElementById("prr").innerHTML = ''+total+'Tk';
	document.getElementById("pR").innerHTML = ''+total+'Tk';

}


function mobototal(){
	var i;
	var sum=0;

	for(i=0;i<array.length;i++){

		sum=sum+array[i][3];
	}
	document.getElementById("egg").innerHTML=''+sum+'';
}

</script>

<script type="text/javascript">

</script>
<script type="text/javascript">
var position=$('#sideMenu').offset().top;
var menuWidth=document.getElementById('TopMenu').offsetHeight;
var pos=position-menuWidth;
//console.log(position);

$(window).scroll(function(event){
	var scroll=$(window).scrollTop();
	console.log(scroll)

	if(scroll>position-menuWidth){



		//	 console.log(position);
		$('#sideMenu').css('marginTop','-'+pos+'px')
		$('.shopping-card').css('marginTop','-'+pos+'px')

		$('#sideMenu').css('position','fixed')
		$('.shopping-card').css('position','fixed')
		$('#sideMenu').css('z-index','1');
		$('.shopping-card').css('z-index','1');

	}
	if( $('#sideMenu').css('position') != null && scroll<pos ){
		$('#sideMenu').css('position','');
		$('#sideMenu').css('marginTop','')
		$('.shopping-card').css('marginTop','')
		$('.shopping-card').css('position','')


	}
});


</script>
@include('layouts.animateScroll')
@include('layouts.footer')

@endsection
