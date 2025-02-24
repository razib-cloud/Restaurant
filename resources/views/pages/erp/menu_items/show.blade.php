@extends('layout.erp.app')

@section('page')

<div class="container mt-6">
    <h4>Menu Item Details</h4>
    <fieldset disabled>
        <div class="mb-2">
            <label for="menus_id" class="form-label">Menu ID</label>
            <input type="text" id="menus_id" name="menus_id" value="{{ $menu_item->menus_id }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="product_id" class="form-label">Product ID</label>
            <input type="text" id="product_id" name="product_id" value="{{ $menu_item->product_id }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="price" class="form-label">Price</label>
            <input type="text" id="price" name="price" value="{{ $menu_item->price }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" rows="3">{{ $menu_item->description }}</textarea>
        </div>

        <div class="mb-2">
            <label for="is_available" class="form-label">Availability</label>
            <input type="text" id="is_available" name="is_available" value="{{ $menu_item->is_available ? 'Available' : 'Not Available' }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="created_at" class="form-label">Created At</label>
            <input type="text" id="created_at" name="created_at" value="{{ $menu_item->created_at }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="updated_at" class="form-label">Updated At</label>
            <input type="text" id="updated_at" name="updated_at" value="{{ $menu_item->updated_at }}" class="form-control">
        </div>

        <div class="mb-2">
            <label for="photo" class="form-label">Photo</label>
            <br>
            @if ($menu_item->photo)
                <img width="50" src="{{ asset('photos') }}/{{ $menu_item->photo }}" alt="Menu Item Photo">
            @else
                <p>No photo available.</p>
            @endif
        </div>
    </fieldset>
    <a href="{{ url('menu_items') }}" class="btn btn-primary">Back</a>
</div>

@endsection
