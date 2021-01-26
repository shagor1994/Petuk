  <section id="city">
<div class="container mt-md-5">
 <h1 class="text-muted findCity">Find us in our City</h1>

</div>
<div class="container imgFloat clearfix">
  <div class="row">

  @foreach($cities as $city)
    <div class="col-md-3 negative">

    <div class="img" id="{{$city->id}}" class="" onmouseover="hover({{$city->id}});">
   <a href="cities/{{$city->city}}"><img src='{{Storage::url("cities/$city->image")}}' class="img-fluid"  alt="smaple " style="width: 100%; height:300px" >
    </a>
   <div class="imageText"><h2 class="text-white">{{$city->city}}</h2></div>


</div>
 </div>
 @endforeach
</div>

</div>

<section id="mobSrollMenu">

  <div class="scrollmenu clearfix">
@foreach($cities as $city)
    <div style="display: inline-block;" class="img">
         <a href="cities/{{$city->city}}">
    <img src='{{Storage::url("cities/$city->image")}}' class="img-fluid city-img m-2" id="{{$city->id}}" alt="smaple image" style="width: 200px; height:270px" >
  </a>
    <div class="imageText"><h2 class="text-white">{{$city->city}}</h2></div>
  </div>

        @endforeach

</div>
</section>


<script>
  function hover(id){
  var Id = document.getElementById(""+id+"");
  Id.classList.add('HovClass');
 }
</script>
</section>
