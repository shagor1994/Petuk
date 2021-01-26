<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

   <script src="{{asset('jquery.js')}}">

   </script>
   <script src="{{asset('Croppie/croppie.js')}}"></script>
   <link rel="stylesheet" href="{{asset('Croppie/croppie.css')}}" type="text/css">
   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" type="text/css">
     <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}" type="text/css">

	 @yield('css')
<style>


	* {
    margin:0;
    padding:0;
  }
/*  hover for card

*/
.diva {
  transition:  all .2s ease-in;

}
.diva:hover {
  margin-top: -3px;
  margin-bottom: 3px;
}

 .radius{
		border-radius: 0px;
	}
	.nav-pills .nav-item .nav-link{
		border-radius: 0px;
	}
	.scrolling-wrapper {
  overflow-x: scroll;
  overflow-y: hidden;
  white-space: nowrap;
}
.c-m{
	position: absolute;
	border-radius: 0px;
	top: 20px;
	left: 55%;
	z-index: 2;
}
  .kk{
    display: inline-block;
    margin: 5px;
  }

	.an{
		animation-name: dr;
		animation-duration: 3s;



	}
	@keyframes dr{
		from{
			margin-top: -10000px;
		}
		to{
			margin-top: 0px;
		}

	}
	.intro-section{
	/*	background: url("{{Storage::url('backimg.jpg')}}")  no-repeat center top;
		height:500px;
		width: 100%;
		 background-size: cover*/;
     background:url('{{Storage::url('fh.jpg')}}') no-repeat center;
    background-size:cover;
    height: 400px;
    width: 100%;

    background-attachment:fixed;

	}
	body {background-color: #F8FAFC;}
	/*.city-img{
		position: relative;
		/*text-align: center;*/

	}
/*	.city-text{
		  position: absolute;
		  bottom: -25px;
  left: 20px;
	}*/


/* file upload button*/
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.bttn {

}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.card{
	border: 1px solid white;
}

/*restaurant css*/
.dot {
  height: 10px;
  width: 10px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
#head-section{
  background-size: cover;
  background-attachment: fixed;
  min-height: 400px;
}
.dark-overlay{
background: rgba(0, 0, 0, 0.7);
    min-height: 400px;
}
.logo{
	margin-top: 120px;
}
.rel{
	/*position: relative;*/
}
.ab{
	/*position: absolute;
	bottom: 0px;*/
}
.w-100{
	opacity: 0.6;
}

.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0

}
#nutrision-section{
	animation-name: drop;
	animation-duration:2s;
}
.bck{
	background:url('{{Storage::url('fh.jpg')}}') no-repeat center;
    background-size:cover;
    height: 400px;
    width: 100%;

    background-attachment:fixed;

}
@keyframes drop {
	0%{
		transform: translateX(-80px);
	}
	100%{
		transform: translateX(0px);
	}
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}




	@media (min-width: 991px) {
}
.nav-itemm{
		border-right: 1px solid red;

	}
	.nr{
		border-left: 1px solid red;
	}



}



@media (max-width: 768px) {
 }

</style>
</head>
<body style="background-color: white;">
	<!-- navbar -->
	

	@yield('content')


</body>

</html>
