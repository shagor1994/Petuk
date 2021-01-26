	@section('content')
	<form method="post" enctype="multipart/form-data" action="{{url('/albums/store')}}">
		 @csrf
  <div class="form-group">
    <label for="name">Album Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="album_name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Cover Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection