<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class ReactOrderController extends Controller
{

    public function index()
    {
        return response()->json(["customers" => Customer::all()]);
    }

    public function order()
    {

        return response()->json(["orders" => Order::with('customer')->get()]);
    }
}
