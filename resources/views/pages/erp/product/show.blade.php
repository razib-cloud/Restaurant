<?php

use App\Models\Menu;
?>

@extends('layout.erp.app')
@section('title', 'Show Product')
@section('style')

    <!-- Add custom styles if needed -->
@endsection


@section('page')
    <a class='btn btn-success' href="{{ route('erp_products.index') }}">Manage</a>
    <table class='table table-striped text-nowrap'>
        <tbody>
            @if ($product)
                @php
                    $menu = Menu::find($product->menus_id); // Find the menu
                    $menuName = $menu ? $menu->name : 'No Menu';
                @endphp
                <tr>
                    <th>Id</th>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Menu</th>
                    <td>{{ $menuName }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $product->price }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td>
                        <br>
                        @if ($product->photo)
                            <img width="50" src="{{ asset('products/' . $product->photo) }}" alt="{{ $product->name }}">
                        @else
                            <p>No photo available.</p>
                        @endif
                    </td>
                </tr>

                {{-- <tr>
                    <th>Is Featured</th>
                    <td>{{ $product->is_featured ? 'Yes' : 'No' }}</td>
                </tr> --}}

                <tr>
                    <th>Stock Quantity</th>
                    <td>{{ $product->stock_quantity }}</td>
                </tr>

                {{-- <tr>
                    <th>Reorder Level</th>
                    <td>{{ $product->reorder_level }}</td>
                </tr> --}}
                
                <tr>
                    <th>Created At</th>
                    <td>{{ $product->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            @else
                <tr>
                    <td colspan="2">Product not found.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection

@section('script')
    <!-- Add custom scripts if needed -->
@endsection
