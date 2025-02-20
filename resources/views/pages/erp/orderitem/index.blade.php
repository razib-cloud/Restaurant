<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/orderitem/_index.blade.php" was generated by ProBot AI.
* Date: 2/21/2025 12:56:59 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Manage OrderItem')
@section('style')


@endsection
@section('page')
<a href="{{route('orderitems.create')}}">New OrderItem</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Order Id</th>
			<th>Product Id</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Created At</th>
			<th>Updated At</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($orderitems as $orderitem)
		<tr>
			<td>{{$orderitem->id}}</td>
			<td>{{$orderitem->order_id}}</td>
			<td>{{$orderitem->product_id}}</td>
			<td>{{$orderitem->quantity}}</td>
			<td>{{$orderitem->price}}</td>
			<td>{{$orderitem->created_at}}</td>
			<td>{{$orderitem->updated_at}}</td>

			<td>
			<form action = "{{route('orderitems.destroy',$orderitem->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('orderitems.show',$orderitem->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('orderitems.edit',$orderitem->id)}}"> Edit </a>
				@method('DELETE')
				@csrf
				<input type = "submit" class="btn btn-danger" name = "delete" value = "Delete" />
			</form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection
@section('script')


@endsection
