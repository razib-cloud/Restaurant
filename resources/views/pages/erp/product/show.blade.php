<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/product/_show.blade.php" was generated by ProBot AI.
* Date: 2/23/2025 10:15:46 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show Product')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('erp_products.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$product->id}}</td></tr>
		<tr><th>Name</th><td>{{$product->name}}</td></tr>
		<tr><th>Menu Id</th><td>{{$product->item->name}}</td></tr>
		<tr><th>Price</th><td>{{$product->price}}</td></tr>
		<tr><th>Description</th><td>{{$product->description}}</td></tr>
		<tr><th>Photo</th><td>
            <br>
            @if ($product->photo)
            <img width="50" height="" src="{{asset('products')}}/{{$product['photo']}}" alt="{{$product['name']}}" srcset="">
            @else
                <p>No photo available.</p>
            @endif
        </td>
        </tr>
		<tr><th>Is Featured</th><td>{{$product->is_featured}}</td></tr>
		<tr><th>Stock Quantity</th><td>{{$product->stock_quantity}}</td></tr>
		<tr><th>Reorder Level</th><td>{{$product->reorder_level}}</td></tr>
		<tr><th>Created At</th><td>{{$product->created_at}}</td></tr>
		<tr><th>Updated At</th><td>{{$product->updated_at}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
