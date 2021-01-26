@extends('layouts.master')
@include('layouts.menu')
@section('content')
<section >
  <div class="container shadow-sm mt-5" style="max-width:600px;"><div class="text-center">
    <img src="{{Storage::url('email.png')}}">
    <h5 style="display:inline">A password reset Link has been sent to this email account.</h5>

  </div>
</div>
</section>

@endsection
