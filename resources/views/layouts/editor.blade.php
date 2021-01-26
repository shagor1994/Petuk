<div id="editor-section">

	<form >
  <div class="form-group">
    <label for="formGroupExampleInput">Name of your restaurant</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="{{$res->name}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">District</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="{{$res->district}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">divisioin</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="{{$res->division}}">

  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">city</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="{{$res->city}}">
  </div>

   <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$res->address}}</textarea>
    
  </div>
  <a href="{{route('menuchange',['user_id'=>$res->user_id])}}" class="btn btn-primary" role="button" aria-disabled="true">Change</a>
</form>

</div>
