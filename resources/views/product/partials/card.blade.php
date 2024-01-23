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
