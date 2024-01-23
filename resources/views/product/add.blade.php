@extends('partials.default')

@section('content')
    <div class="container mt-5">
        <h2>Add Product</h2>
        <form action="" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="product_name" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="url" class="form-control" id="image" name="image" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Category</label>
                <input type="text" class="form-control" id="image" name="category" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
@stop
