<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/order/_show.blade.php" was generated by ProBot AI.
* Date: 2/21/2025 12:56:35 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show Order')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('orders.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$order->id}}</td></tr>
		<tr><th>Customer Id</th><td>{{$order->customer_id}}</td></tr>
		<tr><th>User Id</th><td>{{$order->user_id}}</td></tr>
		<tr><th>Total Amount</th><td>{{$order->total_amount}}</td></tr>
		<tr><th>Discount</th><td>{{$order->discount}}</td></tr>
		<tr><th>Status Id</th><td>{{$order->status_id}}</td></tr>
		<tr><th>Order Date</th><td>{{$order->order_date}}</td></tr>
		<tr><th>Delivery Date</th><td>{{$order->delivery_date}}</td></tr>
		<tr><th>Created At</th><td>{{$order->created_at}}</td></tr>
		<tr><th>Updated At</th><td>{{$order->updated_at}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
