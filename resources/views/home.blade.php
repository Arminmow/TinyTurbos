@extends('partials.default')

@section('content')
    @if(Auth::check())
        Welcome User
    @endif
    HOME
@stop
