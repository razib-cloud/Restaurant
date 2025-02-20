<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/paymentmethod/_edit.blade.php" was generated by ProBot AI.
* Date: 2/21/2025 12:59:00 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Edit PaymentMethod')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('paymentmethods.index')}}">Manage</a>
<form action="{{route('paymentmethods.update',$paymentmethod)}}" method ="post" enctype="multipart/form-data">
@csrf
@method("PUT")
<div class="row mb-3">
	<label for="method_name" class="col-sm-2 col-form-label">Method Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="method_name" value="{{$paymentmethod->method_name}}" id="method_name" placeholder="Method Name">
	</div>
</div>
<div class="row mb-3">
	<label for="details" class="col-sm-2 col-form-label">Details</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="details" value="{{$paymentmethod->details}}" id="details" placeholder="Details">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save Change</button>
</form>
@endsection
@section('script')


@endsection
