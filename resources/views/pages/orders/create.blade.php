@extends('layout.backend.main')

@section('body_content')

<div class="row">
    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Display session success messages -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create New Order</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('orders.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="customer_id">Customer ID</label>
                        <input class="form-control" type="text" name="customer_id" value="{{ old('customer_id') }}">
                        @error('customer_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="staff_id">Staff ID</label>
                        <input class="form-control" type="text" name="staff_id" value="{{ old('staff_id') }}">
                        @error('staff_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="order_date">Order Date</label>
                        <input class="form-control" type="date" name="order_date" value="{{ old('order_date') }}">
                        @error('order_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="total_amount">Total Amount</label>
                        <input class="form-control" type="number" name="total_amount" value="{{ old('total_amount') }}">
                        @error('total_amount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status_id">Status</label>
                        <select class="form-control" name="status_id">
                            <option value="">Select Status</option>
                            <option value="1">Pending</option>
                            <option value="2">Completed</option>
                            <option value="3">Cancelled</option>
                        </select>
                        @error('status_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div><br><br>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Create Order</button>
                        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
