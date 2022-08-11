@extends('server.LayoutServer')
@section('title', 'Success')
@section('header', '')

@section('content')  
<h1 class="text-center"> email : {{$data['email']}}</h1>
<h1  class="text-center"> password : {{$data['password']}}</h1>

@endsection
