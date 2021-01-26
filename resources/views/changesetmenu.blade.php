@extends('layouts.master')
@include('layouts.menu')
@section('content')
<div class="container" id="editor-section">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
               
                   <form method="post" enctype="multipart/form-data" action="{{route('setmenu.update',['id'=>$setmenu->id])}}">
                    {{csrf_field()}}
                     <input type="hidden" name="_method" value="PATCH" />

  <div class="form-group">
   
    <label for="name">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="name" value="{{$setmenu->name}}">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Detail</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail">{{$setmenu->detail}}</textarea>
    
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Price</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="price" value="{{$setmenu->price}}">

  </div>
  <div class="custom-control custom-radio cd">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="any">
  <label class="custom-control-label" for="customRadio1">% discount</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="1">
  <label class="custom-control-label" for="customRadio2">Buy one get one</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="0">
  <label class="custom-control-label" for="customRadio3">No discount</label>
</div>
  

  <div  class="form-group">
    <div>
  	<img class="img-thumbnail" src="{{Storage::url('cities/dhaka.jpg')}}" >
 
</div>
 <div class="upload-btn-wrapper form-group">
  <button class="bttn btn btn-info">change</button>
  <input type="file" name="file" class="form-control-file" />
</div>

</div>
 
  

  
<input type="submit" class="btn btn-primary" value="Update" />
</form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">


	$(document).ready(function(){
		
		$("#customRadio1").click(function(){

		$(".cd").after(' <div class="form-group hide"><label for="p_d">Persent</label><input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="discount" value="{{$setmenu->name}}"><small>Do not use persent(%) in the field. example:30</small></div>')	

});

		$("#customRadio2").click(function(){
             $(".hide").hide();});
			$("#customRadio3").click(function(){
             $(".hide").hide();});
	})
			

	
	
</script>

@endsection
