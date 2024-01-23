@extends('partials.default')

@section('content')
    @if(Auth::check())
        Welcome {{ Auth::user()->username }}
    @endif
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $product)
            @include('product.partials.card')
        @endforeach
        </div>
    </div>
@stop

<!-- Car Card 1 -->
