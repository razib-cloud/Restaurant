<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Menu;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class SalesReportController extends Controller
{
    public function index()
    {
        // Render the report view
        return view('pages.erp.report.sales');
    }

    public function generate(Request $request)
    {
        $month = $request->input('month');
        $menuItemId = $request->input('menu_item');
        $paymentMethodId = $request->input('payment_method');
        $staffMemberId = $request->input('staff_member');

        // Fetching orders for the selected month
        $orders = Order::whereMonth('order_date', date('m', strtotime($month)))
            ->whereYear('order_date', date('Y', strtotime($month)))
            ->when($menuItemId, function ($query, $menuItemId) {
                return $query->whereHas('orderItems', function ($q) use ($menuItemId) {
                    $q->where('menu_id', $menuItemId);
                });
            })
            ->when($paymentMethodId, function ($query, $paymentMethodId) {
                return $query->where('payment_id', $paymentMethodId);
            })
            ->when($staffMemberId, function ($query, $staffMemberId) {
                return $query->where('user_id', $staffMemberId);
            })
            ->get();

        return view('pages.erp.report.sales_report_results', compact('orders'));
    }
}
