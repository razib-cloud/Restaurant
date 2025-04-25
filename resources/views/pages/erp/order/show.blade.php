@extends('layout.erp.app')
@section('title', 'Show Order')

@section('style')


@endsection

@section('page')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f8f9fa;
    }

    .invoice-container {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .theme-color {
        color: #fd683e;
    }

    .theme-bg {
        background-color: #fd683e !important;
        color: #fff;
    }

    .table th {
        background-color: #fd683e;
        color: #fff;
    }

    .table-hover tbody tr:hover {
        background-color: rgba(253, 104, 62, 0.1);
    }

    .btn-theme {
        background-color: #fd683e;
        border-color: #fd683e;
        color: #fff;
    }

    .btn-theme:hover {
        background-color: #e85a34;
        border-color: #e85a34;
    }
</style>






    <a class="btn btn-info mb-4" href="{{ route('orders.index') }}">← Back to Order List</a>

    <div class="container my-5">
        <div class="invoice-container">
            <div class="d-flex justify-content-between align-items-center invoice-header">
                <h2 class="mb-0 theme-color">Invoice <strong>#ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</strong></h2>
                <span class="badge badge-theme fs-6">{{ $order->status->name ?? 'N/A' }}</span>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <h6 class="theme-color">From:</h6>
                    <p class="mb-0"><strong>Your Restaurant Name</strong></p>
                    <p class="text-muted">Address: Shankar, Dhanmondi-1213</p>
                    <p class="text-muted">Email: info@restaurant.com</p>
                    <p class="text-muted">Phone: 018XXXXXXXX</p>
                </div>

                <div class="col-md-4">
                    <h6 class="theme-color">To:</h6>
                    <p class="mb-0"><strong>{{ $order->customer->name ?? 'Guest' }}</strong></p>
                    <p class="text-muted">Address: {{ $order->customer->address ?? 'N/A' }}</p>
                    <p class="text-muted">Email: {{ $order->customer->email ?? 'N/A' }}</p>
                    <p class="text-muted">Phone: {{ $order->customer->phone ?? 'N/A' }}</p>
                </div>

                <div class="col-md-4 text-end">
                    <p><strong>Order Date:</strong> {{ $order->order_date }}</p>
                    <p><strong>Delivery Date:</strong> {{ $order->delivery_date }}</p>
                    <p><strong>Invoice #:</strong> #ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</p>
                    <img src="{{ asset('assets/images/qr.png') }}" alt="QR Code" class="img-fluid" width="100">
                </div>
            </div>

            <div class="table-responsive mt-4">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item</th>
                            <th class="text-end">Unit Price</th>
                            <th class="text-center">Qty</th>
                            <th class="text-end">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $subTotal = 0; @endphp
                        @foreach ($order->orderItems as $index => $item)
                            @php
                                $total = $item->price * $item->quantity;
                                $subTotal += $total;
                            @endphp
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->product->name ?? 'Unknown Product' }}</td>
                                <td class="text-end">{{ number_format($item->price, 2) }}</td>
                                <td class="text-center">{{ $item->quantity }}</td>
                                <td class="text-end">{{ number_format($total, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @php
                $discount = $order->discount ?? 0;
                $vat = ($subTotal - $discount) * 0.10;
                $totalWithVAT = $subTotal - $discount + $vat;
            @endphp

            <div class="row mt-4">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td><strong>Subtotal</strong></td>
                                <td class="text-end">{{ number_format($subTotal, 2) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Discount</strong></td>
                                <td class="text-end text-danger">-{{ number_format($discount, 2) }}</td>
                            </tr>
                            <tr>
                                <td><strong>VAT (10%)</strong></td>
                                <td class="text-end">{{ number_format($vat, 2) }}</td>
                            </tr>
                            <tr class="theme-bg">
                                <td><strong>Total</strong></td>
                                <td class="text-end"><strong>{{ number_format($totalWithVAT, 2) }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-theme px-4">Download PDF</a>
                <a href="#" class="btn btn-dark ms-2 px-4">Pay Now</a>
            </div>
        </div>
    </div>




@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
