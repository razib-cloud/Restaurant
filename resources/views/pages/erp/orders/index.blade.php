@extends('layout.erp.app')

@section('page')

<div class="row">
    <!-- Display session success messages -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display session error messages -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Order List</h3>
                <div class="card-tools">
                    <a href="{{ route('orders.create') }}" class="btn btn-primary">Add New Order</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer ID</th>
                            <th>Staff ID</th>
                            <th>Order Date</th>
                            <th>Total Amount</th>
                            <th>Status ID</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->customer_id }}</td>
                                <td>{{ $order->staff_id }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->total_amount }}</td>
                                <td>{{ $order->status_id }}</td>
                                <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>{{ $order->updated_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ url("orders/{$order->id}/edit") }}">Edit</a>
                                    <a class="btn btn-primary" href="{{ url("orders/{$order->id}") }}">Show</a>
                                    <form method="POST" action="{{ url("orders/{$order->id}") }}" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">No orders found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
