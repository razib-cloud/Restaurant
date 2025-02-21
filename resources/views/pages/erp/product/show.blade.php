@extends('layout.erp.app')

@section('title', 'Show Product')

@section('style')
@endsection

@section('page')

<div class="container mt-6">
    <h4>Product Details</h4>
    <fieldset disabled>
        <div class="mb-2">
            <label for="id" class="form-label">ID</label>
            <input type="text" id="id" name="id" value="{{ $product->id }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="category_id" class="form-label">Category ID</label>
            <input type="text" id="category_id" name="category_id" value="{{ $product->category_id }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="price" class="form-label">Price</label>
            <input type="text" id="price" name="price" value="{{ $product->price }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="mb-2">
            <label for="photo" class="form-label">Photo</label>
            <br>
            @if ($product->photo)
                <img src="{{ asset('img/' . $product->photo) }}" width="100" alt="{{ $product->name }}">
            @else
                <p>No photo available.</p>
            @endif
        </div>

        <div class="mb-2">
            <label for="is_featured" class="form-label">Is Featured</label>
            <input type="text" id="is_featured" name="is_featured" value="{{ $product->is_featured ? 'Yes' : 'No' }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="stock_quantity" class="form-label">Stock Quantity</label>
            <input type="text" id="stock_quantity" name="stock_quantity" value="{{ $product->stock_quantity }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="reorder_level" class="form-label">Reorder Level</label>
            <input type="text" id="reorder_level" name="reorder_level" value="{{ $product->reorder_level }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="created_at" class="form-label">Created At</label>
            <input type="text" id="created_at" name="created_at" value="{{ $product->created_at }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="updated_at" class="form-label">Updated At</label>
            <input type="text" id="updated_at" name="updated_at" value="{{ $product->updated_at }}" class="form-control">
        </div>
    </fieldset>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
</div>

@endsection

@section('script')
@endsection
