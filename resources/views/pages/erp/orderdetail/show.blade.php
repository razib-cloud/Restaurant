<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/orderdetail/_show.blade.php" was generated by ProBot AI.
* Date: 2/20/2025 12:11:33 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show OrderDetail')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('orderdetails.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$orderdetail->id}}</td></tr>
		<tr><th>Order Id</th><td>{{$orderdetail->order_id}}</td></tr>
		<tr><th>Menu Item Id</th><td>{{$orderdetail->menu_item_id}}</td></tr>
		<tr><th>Quantity</th><td>{{$orderdetail->quantity}}</td></tr>
		<tr><th>Price</th><td>{{$orderdetail->price}}</td></tr>
		<tr><th>Created At</th><td>{{$orderdetail->created_at}}</td></tr>
		<tr><th>Updated At</th><td>{{$orderdetail->updated_at}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
