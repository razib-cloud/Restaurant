<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/supplier/_edit.blade.php" was generated by ProBot AI.
* Date: 2/19/2025 11:51:42 PM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Edit Supplier')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('suppliers.index')}}">Manage</a>
<form action="{{route('suppliers.update',$supplier)}}" method ="post" enctype="multipart/form-data">
@csrf
@method("PUT")
<div class="row mb-3">
	<label for="name" class="col-sm-2 col-form-label">Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="name" value="{{$supplier->name}}" id="name" placeholder="Name">
	</div>
</div>
<div class="row mb-3">
	<label for="contact_person" class="col-sm-2 col-form-label">Contact Person</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="contact_person" value="{{$supplier->contact_person}}" id="contact_person" placeholder="Contact Person">
	</div>
</div>
<div class="row mb-3">
	<label for="phone" class="col-sm-2 col-form-label">Phone</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="phone" value="{{$supplier->phone}}" id="phone" placeholder="Phone">
	</div>
</div>
<div class="row mb-3">
	<label for="email" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="email" value="{{$supplier->email}}" id="email" placeholder="Email">
	</div>
</div>
<div class="row mb-3">
	<label for="address" class="col-sm-2 col-form-label">Address</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="address" value="{{$supplier->address}}" id="address" placeholder="Address">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save Change</button>
</form>
@endsection
@section('script')


@endsection
