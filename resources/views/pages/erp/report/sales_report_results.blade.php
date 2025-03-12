@extends('layout.erp.app')

@section('page')

<div class="container mt-5">
    <h2>Sales Report Results</h2>

    @if($orders->isEmpty())
        <p>No orders found for the selected criteria.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer ID</th>
                    <th>Total Amount</th>
                    <th>Discount</th>
                    <th>Status</th>
                    <th>Order Date</th>
                    <th>Delivery Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->total_amount }}</td>
                        <td>{{ $order->discount }}</td>
                        <td>{{ $order->status_id }}</td>
                        <td>{{ $order->order_date }}</td>
                        <td>{{ $order->delivery_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
