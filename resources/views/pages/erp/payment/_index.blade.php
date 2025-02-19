<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/payment/_index.blade.php" was generated by ProBot AI.
* Date: 2/20/2025 12:37:55 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Manage Payment')
@section('style')


@endsection
@section('page')
<a href="{{route('payments.create')}}">New Payment</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Transaction Type</th>
			<th>Transaction Id</th>
			<th>Amount Paid</th>
			<th>Payment Date</th>
			<th>Created At</th>
			<th>Updated At</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($payments as $payment)
		<tr>
			<td>{{$payment->id}}</td>
			<td>{{$payment->transaction_type}}</td>
			<td>{{$payment->transaction_id}}</td>
			<td>{{$payment->amount_paid}}</td>
			<td>{{$payment->payment_date}}</td>
			<td>{{$payment->created_at}}</td>
			<td>{{$payment->updated_at}}</td>

			<td>
			<form action = "{{route('payments.destroy',$payment->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('payments.show',$payment->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('payments.edit',$payment->id)}}"> Edit </a>
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
