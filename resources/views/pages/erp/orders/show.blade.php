@extends('layout.erp.app')

@section('page')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title mb-0">Order Details</h4>
        </div>
        <div class="card-body">
            <fieldset disabled>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="id" class="form-label">Order ID</label>
                        <input type="text" id="id" name="id" value="{{ $result->id }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="customer_id" class="form-label">Customer ID</label>
                        <input type="text" id="customer_id" name="customer_id" value="{{ $result->customer_id }}" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="staff_id" class="form-label">Staff ID</label>
                        <input type="text" id="staff_id" name="staff_id" value="{{ $result->staff_id }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="order_date" class="form-label">Order Date</label>
                        <input type="text" id="order_date" name="order_date" value="{{ $result->order_date }}" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="total_amount" class="form-label">Total Amount</label>
                        <input type="text" id="total_amount" name="total_amount" value="{{ $result->total_amount }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="status_id" class="form-label">Status ID</label>
                        <input type="text" id="status_id" name="status_id" value="{{ $result->status_id }}" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="created_at" class="form-label">Created At</label>
                        <input type="text" id="created_at" name="created_at" value="{{ $result->created_at }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="updated_at" class="form-label">Updated At</label>
                        <input type="text" id="updated_at" name="updated_at" value="{{ $result->updated_at }}" class="form-control">
                    </div>
                </div>
            </fieldset>
            <div class="mt-4">
                <a href="{{ url('orders') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
