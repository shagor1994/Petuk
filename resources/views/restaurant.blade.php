@extends('layouts.master')
@section('css')
<style>
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
#scroll-hor-menu{
	display: none;
	font-family:serif;
}
/* side menu classes */
#sideMenu{
	display: block;
}
#shopping-card{
	display: block;
}
/* food hover effec */

#detail .setMenu{

	transition: all .2s ease-in;
}
#detail .setMenu:hover{

	margin-top: -3px;
	margin-bottom: 3px;
	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.cardModal{
	display: none;

}


@media screen and (max-width: 600px) {

	#scroll-hor-menu{
		display: block;
		font-family: Verdana;
	}
	/* #b-menu{
		display: none;
	} */
}
@media screen and (max-width: 767px) {

  #sideMenu{
  	display: none;
  }
	#shopping-card{
		display: none;
	}
	.cardModal{
  	display: block;

  }
}
</style>


@endsection

@section('content')
@include('layouts.menu')
@include('layouts.headSection')
@include('layouts.scrollHorizentalMenu')
@include('layouts.cardModal')
@include('layouts.mainSection')
@include('layouts.mainSectionJs')
@include('layouts.cardJs')
@include('layouts.animateJs')





@endsection
