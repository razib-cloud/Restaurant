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
        <form action="{{ url("menu-items/{$menuItem->id}") }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="menus_id">Menu ID</label>
                <input class="form-control" type="number" name="menus_id" value="{{ old('menus_id', $menuItem->menus_id) }}">
                @error('menus_id')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="product_id">Product ID</label>
                <input class="form-control" type="number" name="product_id" value="{{ old('product_id', $menuItem->product_id) }}">
                @error('product_id')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo">Product Photo</label>
                <br>
                @if ($menuItem->photo)
                    <img width="100" src="{{ asset('storage/' . $menuItem->photo) }}" alt="{{ $menuItem->product_id }}" class="img-thumbnail mb-2">
                @else
                    <p>No photo available.</p>
                @endif
                <input type="file" class="form-control" name="photo">
                @error('photo')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="number" step="0.01" name="price" value="{{ old('price', $menuItem->price) }}">
                @error('price')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description">{{ old('description', $menuItem->description) }}</textarea>
                @error('description')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="is_available">Availability</label>
                <select class="form-control" name="is_available">
                    <option value="1" {{ old('is_available', $menuItem->is_available) == 1 ? 'selected' : '' }}>Available</option>
                    <option value="0" {{ old('is_available', $menuItem->is_available) == 0 ? 'selected' : '' }}>Not Available</option>
                </select>
                @error('is_available')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Update Menu Item</button>
            </div>
        </form>
    </div>
</div>

@endsection
