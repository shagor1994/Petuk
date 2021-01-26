<div id="detail-section">
<div>	
<table class="table table-striped table-bordered">

  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td>{{$res->name}}</td>
     
    </tr>
    <tr>
      <th scope="row">City</th>
      <td>{{$res->city}}</td>

    </tr>
    <tr>
      <th scope="row">District</th>
      <td>{{$res->district}}</td>
  
    </tr>
    <tr>
      <th scope="row">Division</th>
      <td>{{$res->division}}</td>
    
    </tr>
    <tr>
      <th scope="row">Address</th>
      <td>{{$res->address}}</td>
      
    </tr>

  </tbody>
</table>
  <a href="{{route('reschange.show',['user_id'=>$res->user_id])}}" class="btn btn-primary" role="button" aria-disabled="true">Change</a>
</div>
<br>
<div>

@if(count($menu)!=0)

@include('layouts.editormenu')
@else
 @include('layouts.creatmenu')

@endif  
</div>
</div>
