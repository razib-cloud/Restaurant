<?php
/*
 * ProBot Version: 3.0
 * Laravel Version: 10x
 * Description: This source file "resources/views/product/_create.blade.php" was generated by ProBot AI.
 * Date: 2/23/2025 10:15:46 AM
 * Contact: towhid1@outlook.com
 */
?>
@extends('layout.erp.app')
@section('title', 'Create Product')
@section('style')

@endsection
@section('page')
    <a class='btn btn-success' href="{{ route('erp_products.index') }}">Manage</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('erp_products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">Menu Category</label>
            <div class="col-sm-10">
                <select class="form-control" name="menus_id" id="menus_id" required>
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>

            </div>
        </div>
        <div class="row mb-3">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="price" id="price" placeholder="Price" step="0.01"
                    min="0" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="photo" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="photo" id="photo" accept="image/*">
            </div>
        </div>


        {{-- <div class="row mb-3">
            <label for="stock_quantity" class="col-sm-2 col-form-label">Stock Quantity</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="stock_quantity" id="stock_quantity"
                    placeholder="Stock Quantity" min="0" required>
            </div>
        </div> --}}

        {{-- <div class="row mb-3">
            <label for="reorder_level" class="col-sm-2 col-form-label">Reorder Level</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="reorder_level" id="reorder_level"
                    placeholder="Reorder Level" min="0" required>
            </div>

        </div> --}}
        {{-- <div class="row mb-3">
            <label for="is_featured" class="col-sm-2 col-form-label">Featured</label>
            <div class="col-sm-10">
                <input type="checkbox" name="is_featured" id="is_featured" value="1">
            </div>
        </div> --}}
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
@section('script')

@endsection
