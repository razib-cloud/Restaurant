<?php


namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\PaymentStatu;
use Illuminate\Http\Request;

class SalesReportController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $paymentstatu = PaymentStatu::all();

        return view('pages.erp.report.sales_report', [
            'orderitems' =>[],
            'customers' => $customers,
            'paymentstatu' => $paymentstatu
        ]);
    }


    public function store(Request $request)
{
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $customerId = $request->input('customer_id');
    $paymentStatusId = $request->input('payment_status_id');

    $query = Order::with(['customer', 'user', 'payments.paymentStatus', 'orderItems.product'])
        ->whereBetween('order_date', [$startDate, $endDate]);

    if ($customerId) {
        $query->where('customer_id', $customerId);
    }

    if ($paymentStatusId) {
        $query->whereHas('payments', function ($q) use ($paymentStatusId) {
            $q->where('payment_status_id', $paymentStatusId);
        });
    }

    $orders = $query->get();

    $orderitems = $orders->map(function ($order) {
        return (object)[
            'id' => $order->id,
            'customer' => optional($order->customer)->name ?? 'N/A',
            'staffs' => optional($order->user)->name ?? 'N/A',
            'order_date' => $order->order_date,
            'orderitems' => $order->orderItems->map(function ($item) {
                return (optional($item->product)->name ?? 'Unknown Product') . ' (x' . $item->quantity . ')';
            })->implode(', '),
            'payments' => number_format($order->payments->sum('amount'), 2),
            'paymentstatus' => optional(optional($order->payments->first())->paymentStatus)->name ?? 'N/A',
        ];
    });

    $customers = Customer::all();
    $paymentstatu = PaymentStatu::all();

    return view('pages.erp.report.sales_report', [
        'orderitems' => $orderitems,
        'customers' => $customers,
        'paymentstatu' => $paymentstatu,
        'startDate' => $startDate,
        'endDate' => $endDate,
        'selectedCustomer' => $customerId,
        'selectedStatus' => $paymentStatusId,
    ]);
}

}
