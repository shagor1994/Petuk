@extends('layouts.app')
@section('content')

<div class="container" id="editor-section">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
               
                   <form method="post" action="{{route('reschange.update',['id'=>$res->user_id])}}">
                    {{csrf_field()}}
                     <input type="hidden" name="_method" value="PATCH" />

  <div class="form-group">
   
    <label for="formGroupExampleInput">Name of your restaurant</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="name" value="{{$res->name}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">District</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="district" value="{{$res->district}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">divisioin</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="division" value="{{$res->division}}">

  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">city</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="city" value="{{$res->city}}">
  </div>

   <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{$res->address}}</textarea>
    
  </div>
<input type="submit" class="btn btn-primary" value="Update" />
</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection