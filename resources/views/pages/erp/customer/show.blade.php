<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/customer/_show.blade.php" was generated by ProBot AI.
* Date: 2/19/2025 9:45:35 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show Customer')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('customers.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$customer->id}}</td></tr>
		<tr><th>Name</th><td>{{$customer->name}}</td></tr>
		<tr><th>Phone</th><td>{{$customer->phone}}</td></tr>
		<tr><th>Email</th><td>{{$customer->email}}</td></tr>
		<tr><th>Address</th><td>{{$customer->address}}</td></tr>
		<tr><th>Created At</th><td>{{$customer->created_at}}</td></tr>
		<tr><th>Updated At</th><td>{{$customer->updated_at}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
