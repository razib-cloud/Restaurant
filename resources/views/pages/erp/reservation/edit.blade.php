<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/reservation/_edit.blade.php" was generated by ProBot AI.
* Date: 3/12/2025 10:05:39 PM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Edit Reservation')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('reservations.index')}}">Manage</a>
<form action="{{route('reservations.update',$reservation)}}" method ="post" enctype="multipart/form-data">
@csrf
@method("PUT")
<div class="row mb-3">
	<label for="name" class="col-sm-2 col-form-label">Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="name" value="{{$reservation->name}}" id="name" placeholder="Name">
	</div>
</div>
<div class="row mb-3">
	<label for="phone" class="col-sm-2 col-form-label">Phone</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="phone" value="{{$reservation->phone}}" id="phone" placeholder="Phone">
	</div>
</div>
<div class="row mb-3">
	<label for="email" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="email" value="{{$reservation->email}}" id="email" placeholder="Email">
	</div>
</div>
<div class="row mb-3">
	<label for="date" class="col-sm-2 col-form-label">Date</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="date" value="{{$reservation->date}}" id="date" placeholder="Date">
	</div>
</div>
<div class="row mb-3">
	<label for="time" class="col-sm-2 col-form-label">Time</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="time" value="{{$reservation->time}}" id="time" placeholder="Time">
	</div>
</div>
<div class="row mb-3">
	<label for="members" class="col-sm-2 col-form-label">Members</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="members" value="{{$reservation->members}}" id="members" placeholder="Members">
	</div>
</div>
<div class="row mb-3">
	<label for="special_requests" class="col-sm-2 col-form-label">Special Requests</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="special_requests" value="{{$reservation->special_requests}}" id="special_requests" placeholder="Special Requests">
	</div>
</div>
<div class="row mb-3">
	<label for="table_id" class="col-sm-2 col-form-label">Table</label>
	<div class="col-sm-10">
		<select class="form-control" name="table_id" id="table_id">
			@foreach($tables as $table)
				@if($table->id==$reservation->table_id)
					<option value="{{$table->id}}" selected>{{$table->name}}</option>
				@else
					<option value="{{$table->id}}">{{$table->name}}</option>
				@endif
			@endforeach
		</select>
	</div>
</div>

<button type="submit" class="btn btn-primary">Save Change</button>
</form>
@endsection
@section('script')


@endsection
