<div id="editormenu-section">
<div>	  
    
	 <ul class="list-group">
	 	<li class="list-group-item active">


	 	Menu</li>
	 	
	 	@foreach($menu as $menu)
  
  <li class="list-group-item">
      <a class="nav-link text-dark" href="{{ route('setmenu.show',['id'=>$menu->id]) }}">{{$menu->nav_li}}</a>
  	</li>
     @endforeach

</ul>

</div>
<br>
<a href="{{route('resmenu.show',['user_id'=>$res->user_id])}}" class="btn btn-primary" role="button" aria-disabled="true">Change</a>

</div>