@extends('admin.master')
@section('content')
<h1>Dashboard</h1>
<div>
    @if(Session::has('mail'))
    <h1>Hii! {{Session::get('mail')}}</h1>
    @endif
    @if(Session::has('pass'))
    <h1>Password is {{Session::get('pass')}}</h1>
    @endif
</div>
<img src="{{Session::get('imgg')}}"/>
@stop