@extends('partials.default')

@section('content')
    @if(Auth::check())
        Welcome {{ Auth::user()->username }}
    @endif
@stop
