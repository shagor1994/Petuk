@extends('layouts.master')
@include('layouts.menu')
@section('content')

@if(count($setmenu)!=0)
@include('layouts.setmenushow')	

@else
@include('layouts.setmenushow')
@endif


@endsection