<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Menu;
use App\Models\Payment;
use App\Models\PaymentStatu;
use App\Models\User;
use Illuminate\Http\Request;

class SalesReportController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $paymentstatu = PaymentStatu::all();
        return view('pages.erp.report.sales_report', ['purchases' => [], 'customers' => $customers, 'paymentstatu' => $paymentstatu]);




        
    }
}
