@extends('server.LayoutServer')
@section('title', 'FPT dashboard ')
@section('header', 'Dashboard')
@section('content')
    <div>
        <h1 class="text-center">
           Dashboard
           @if(Auth::check())
{{Auth::user()->name}}
           @endif
        </h1>
    </div>
@endsection
