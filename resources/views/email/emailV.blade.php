@extends('layouts.master')
@include('layouts.menu');
@section('content')

<section >
  <div class="container shadow-sm mt-5" style=""><div class="text-center">
    <img src="{{Storage::url('email.png')}}">
    <h5 style="display:inline">An email has been sent to this email account for verification.</h5>

  </div>
</div>
</section>

@endsection
