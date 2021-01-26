<div>
	<br><br>
	<div class="container">
	<div class="row">
		<div class="col-md-3"><div>	  
    
	 <ul class="list-group">
	 	<li class="list-group-item active">


	 	Menu</li>
	 	
	 	@foreach($menu as $menu)
  
  <li class="list-group-item">
      <a style="height: 30px" class="nav-link text-dark" href="{{ route('setmenu.show',['id'=>$menu->id]) }}">{{$menu->nav_li}}</a>
  	</li>
     @endforeach

</ul>

</div></div>
		<div class="col-md-9">
			<div class="text-center" style="background-color: white"><h2><i class="fas fa-pizza-slice"></i>Beefs</h2></div>
	@foreach($setmenu as $setmenu)
<div class="card border-0 mb-2 shadow-sm" style="">
 
  <div class="card-body">
  	<div class="row">
  		<div class="col-md-4">
  			<img src='{{Storage::url("cities/dhaka.jpg")}}' class="img-fluid" >
  		</div>
  		<div class="col-md-8">
   
    	<h5 class="card-title text-muted">{{$setmenu->name}}</h5>
				{{$setmenu->detail}}
				<br>
				Price:{{$setmenu->price}}
				<br>
				
				
				<div class="float-right">
					<a href="{{route('setmenu.edit',['id'=>$setmenu->id])}}" class="btn radius btn-outline-info mr-2">Edit</a>
					<!-- <a href="" class="btn radius btn-outline-info">Delete</a> -->
					<form method="post" action="{{route('setmenu.destroy',['id'=>$setmenu->id])}}" class="float-right">
        {{csrf_field()}}
         <input type="hidden" name="_method" value="DELETE" />
        <input type="submit" class="btn radius btn-outline-info" value="Delete" 
        id="{{$setmenu->id}}" />
        </form> 
				</div>
				
  </div>

</div>

		</div>
	</div>
	@endforeach

</div>
</div>
</div>
</div>