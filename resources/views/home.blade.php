@extends('partials.default')

@section('content')
    @if(Auth::check())
        Welcome {{ Auth::user()->username }}
    @endif
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $product)
                <div class="col">
                    <div class="card">
                        <img src="{{ $product->image }}" class="card-img-top" alt="Car 1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-price">${{ $product->price }}</p>
                            <a href="#" class="btn btn-details">Details</a>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
@stop

<!-- Car Card 1 -->
