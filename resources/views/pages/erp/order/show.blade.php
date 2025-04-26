@extends('layout.erp.app')
@section('title', 'Print Invoice')

@section('page')

<style>
    @media print {
        body * {
            visibility: hidden;
        }
        #receipt, #receipt * {
            visibility: visible;
        }
        #receipt {
            position: absolute;
            left: 0;
            top: 0;
            width: 80mm;
            font-size: 12px;
        }
        .no-print {
            display: none;
        }
    }

    #receipt {
        max-width: 80mm;
        margin: auto;
        font-family: 'Courier New', Courier, monospace;
        font-size: 12px;
        background: #fff;
        padding: 15px;
        border: 1px dashed #000;
    }

    .text-center {
        text-align: center;
    }

    .text-end {
        text-align: right;
    }

    .text-bold {
        font-weight: bold;
    }

    .separator {
        border-top: 1px dashed #000;
        margin: 5px 0;
    }

    .btn-print {
        margin: 20px;
        display: flex;
        justify-content: center;
    }
</style>



<a class="btn btn-info mb-4" href="{{ route('orders.index') }}">← Back to Order List</a>




<div id="receipt">
    <div class="text-center text-bold">
        <h4>Foodzy Restaurant</h4>
        <p>Shankar, Dhanmondi-1213</p>
        <p>Phone: 018XXXXXXXX</p>
        <div class="separator"></div>
        <p>Invoice: #ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</p>
        <p>Date: {{ $order->order_date }}</p>
        <div class="separator"></div>
    </div>

    <p><strong>Customer:</strong> {{ $order->customer->name ?? 'Guest' }}</p>

    <div class="separator"></div>

    <table width="100%">
        <thead>
            <tr>
                <td><strong>Item</strong></td>
                <td class="text-end"><strong>Qty</strong></td>
                <td class="text-end"><strong>Price</strong></td>
            </tr>
        </thead>
        <tbody>
            @php $subTotal = 0; @endphp
            @foreach ($order->orderItems as $item)
                @php
                    $lineTotal = $item->price * $item->quantity;
                    $subTotal += $lineTotal;
                @endphp
                <tr>
                    <td>{{ $item->product->name ?? 'N/A' }}</td>
                    <td class="text-end">{{ $item->quantity }}</td>
                    <td class="text-end">{{ number_format($lineTotal, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="separator"></div>

    @php
        $discount = $order->discount ?? 0;
        $vat = ($subTotal - $discount) * 0.10;
        $totalWithVAT = $subTotal - $discount + $vat;
    @endphp

    <table width="100%">
        <tr>
            <td>Subtotal</td>
            <td class="text-end">{{ number_format($subTotal, 2) }}</td>
        </tr>
        <tr>
            <td>Discount</td>
            <td class="text-end">-{{ number_format($discount, 2) }}</td>
        </tr>
        <tr>
            <td>VAT (10%)</td>
            <td class="text-end">{{ number_format($vat, 2) }}</td>
        </tr>
        <tr class="text-bold">
            <td>Total</td>
            <td class="text-end">{{ number_format($totalWithVAT, 2) }}</td>
        </tr>
    </table>

    <div class="separator"></div>

    <div class="text-center">
        <p>Thank you for dining with us!</p>
        <p>Visit Again 🍽️</p>
    </div>
</div>



<div class="btn-print no-print">
    <button onclick="window.print()" class="btn btn-primary">🖨️ Print Invoice</button>
</div>


@endsection
