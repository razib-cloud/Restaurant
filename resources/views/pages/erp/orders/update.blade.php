@extends('layout.erp.app')

@section('page')

<div class="row">
    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title mb-0">Edit Order</h3>
            </div>
            <div class="card-body">
                <form action="{{ url("orders/{$order->id}") }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="customer_id" class="form-label">Customer ID</label>
                        <input class="form-control" type="text" name="customer_id" value="{{ old('customer_id', $order->customer_id) }}">
                        @error('customer_id')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="staff_id" class="form-label">Staff ID</label>
                        <input class="form-control" type="text" name="staff_id" value="{{ old('staff_id', $order->staff_id) }}">
                        @error('staff_id')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="order_date" class="form-label">Order Date</label>
                        <input class="form-control" type="date" name="order_date" value="{{ old('order_date', $order->order_date) }}">
                        @error('order_date')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="total_amount" class="form-label">Total Amount</label>
                        <input class="form-control" type="text" name="total_amount" value="{{ old('total_amount', $order->total_amount) }}">
                        @error('total_amount')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status_id" class="form-label">Status</label>
                        <select class="form-select" name="status_id">
                            <option value="">Select Status</option>
                    <option value="1">Pending</option>
                    <option value="2">Completed</option>
                    <option value="3">Cancelled</option>
                        </select>
                        @error('status_id')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-save"></i> Update Order
                        </button>
                        <a href="{{ route('orders.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
