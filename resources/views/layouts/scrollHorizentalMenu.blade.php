<section id="scroll-hor-menu">
	<div class="scrollmenu" id="scrollHorizentalMenu">
		<nav class="navbar navbar-expand mt-0 pt-0 pb-0 mb-0">

			<ul class="navbar-nav">
				@foreach($menu as $val)
				<li class="nav-item" style="border:0px;">
					<a class="nav-link" href="#" id="{{$val->id}}">{{$val->nav_li}}</a></li>;

	      @endforeach
			</ul>

		</nav>

	</div>

</section>
