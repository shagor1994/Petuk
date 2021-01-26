@extends('layouts.master')
@section('css')
<style>
    /*class of intro-section layout*/
    .position: {
    	z-index: 0;
    	position: relative;
    }
    /*class of city layout*/
   .pos_key{
    	z-index: -1;
    	position: relative;
    }
	.intro-section ul{
	/*	background-color:#eee;  */
		cursor:pointer;
	}
	.intro-section .res_auto_list li{
		padding:7px;
	}
    .intro-section #res_list{


    }
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}
	#city .findCity{
		font-family: 'maiandra GD';

	}
	#city .img{
		position: relative;


	}
	#city .imgFloat{
		max-width: 1000px;
	}
	#city .negative{
		margin-right: -15px;
		margin-top: 20px;
	}

	#city .imageText{
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
	}
	#city .HovClass{
		transition: margin-top 0.3s, box-shadow ;
	}
	#city .HovClass:hover{
		margin-top:-10px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	#mobSrollMenu{
    display: none;
	}
	#mobSrollMenu .img{
		position: relative;
	}
    #mobScrollMenu .imageText{
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
	}
	div.scrollmenu a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px;
		text-decoration: none;
	}

	div.scrollmenu a:hover {

	}

	#mission{
		overflow: hidden;
		margin-top: 100px;
		background-color: #C7FEC1;
		color: #5B9254;
		font-family: 'maiandra GD';
		clear: both;
	}
	#mission .left-arrow{
		border-right: 1px solid
	}
	#homeOffice .textColor{
		color: #707070;
		font-family: 'maiandra GD';
	}
	#homeOffice{
		margin-top: 150px;
	}
	#homeOffice .right-arrow{
		border-left: 1px solid #707070;
	}
	#app{
		margin-top: 300px;
	}
	#app .bellow{
		background-color:#FFE5E5;

	}
	#app .pocket{
		font-family: 'maiandra GD';
	}
	#app .parentPhone{
		position: relative;
		min-height: 220px;

	}
	#app .phonePic{
		position: absolute;
		margin-top: -300px;
	}
  #app .pic{

  }
	@media (max-width: 768px) {

		#mobSrollMenu{
			display: block;
		}
		.imgFloat{
			display: none;
		}
    #app .parentPhone{
      display: none;
    }

	}
  @media (max-width: 575px) {

    #app .pic{
         margin:3px;
    }

  }

</style>
@endsection
@section('content')
@include('layouts.menu')
@include('layouts.intro')
@include('layouts.city')
<br>
@include('layouts.mission')
@include('layouts.home-office')
@include('layouts.appp')
@include('layouts.footer')

<script type="text/javascript">


</script>
@endsection
