<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/reservation/_show.blade.php" was generated by ProBot AI.
* Date: 2/27/2025 12:25:07 PM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show Reservation')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('reservations.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$reservation->id}}</td></tr>
		<tr><th>Customer Id</th><td>{{$reservation->customer_id}}</td></tr>
		<tr><th>Booking Name</th><td>{{$reservation->booking_name}}</td></tr>
		<tr><th>Phone</th><td>{{$reservation->phone}}</td></tr>
		<tr><th>Email</th><td>{{$reservation->email}}</td></tr>
		<tr><th>Table Number</th><td>{{$reservation->table_number}}</td></tr>
		<tr><th>Guests Count</th><td>{{$reservation->guests_count}}</td></tr>
		<tr><th>Reservation Date</th><td>{{$reservation->reservation_date}}</td></tr>
		<tr><th>Status</th><td>{{$reservation->status}}</td></tr>
		<tr><th>Special Requests</th><td>{{$reservation->special_requests}}</td></tr>
		<tr><th>Created At</th><td>{{$reservation->created_at}}</td></tr>
		<tr><th>Updated At</th><td>{{$reservation->updated_at}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
