@extends('layout.erp.app')

@section('page')

<div class="row">
    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-md-12">
        <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Product Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $product->name) }}">
                @error('name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price" value="{{ old('price', $product->price) }}">
                @error('price')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo">Product Photo</label>
                <br>
                @if ($product->photo)
                    <img width="100" src="{{ asset('img/' . $product->photo) }}" alt="{{ $product->name }}" class="img-thumbnail mb-2">
                @else
                    <p>No photo available.</p>
                @endif
                <input type="file" class="form-control" name="photo">
                @error('photo')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="stock_quantity">Stock Quantity</label>
                <input class="form-control" type="text" name="stock_quantity" value="{{ old('stock_quantity', $product->stock_quantity) }}">
                @error('stock_quantity')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="reorder_level">Reorder Level</label>
                <input class="form-control" type="text" name="reorder_level" value="{{ old('reorder_level', $product->reorder_level) }}">
                @error('reorder_level')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Update Product</button>
            </div>
        </form>
    </div>
</div>

@endsection
