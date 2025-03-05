@extends('layout.erp.app')
@section('title', 'Create Reservation')
@section('style')
@endsection
@section('page')
    <a class='btn btn-success' href="{{ route('reservations.index') }}">Manage</a>
    <form action="{{ route('reservations.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="date" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="date" id="date">
            </div>
        </div>
        <div class="row mb-3">
            <label for="time" class="col-sm-2 col-form-label">Time</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" name="time" id="time">
            </div>
        </div>
        <div class="row mb-3">
            <label for="members" class="col-sm-2 col-form-label">Members</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="members" id="members" placeholder="Number of Members">
            </div>
        </div>
        <div class="row mb-3">
            <label for="special_requests" class="col-sm-2 col-form-label">Special Requests</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="special_requests" id="special_requests" placeholder="Special Requests"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="table_id" class="col-sm-2 col-form-label">Table</label>
            <div class="col-sm-10">
                <select class="form-control" name="table_id" id="table_id">
                    @forelse($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->name }}</option>
                    @empty
                        <option value="">No tables available</option>
                    @endforelse
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
@section('script')
@endsection
