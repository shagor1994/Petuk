><div id="editor-section">

	<form id="change" method="post" action="{{route('reschange.store')}}">
    {{csrf_field()}}
  <div class="form-group">
    <label for="formGroupExampleInput">Name of your restaurant</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="restaurant name" name="name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">District</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="district"  name="district">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">divisioin</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="divisioin" name="division">

  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">city</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="city" name="city">
  </div>

   <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">address</textarea>

    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>