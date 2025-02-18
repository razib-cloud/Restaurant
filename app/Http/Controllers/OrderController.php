<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use App\Models\Role;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = OrderModel::all(); // Fetch all orders from the database
        return view('pages.orders.index', compact('orders'));
    }



    public function create()
    {
        return view('pages.orders.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'customer_id'   => 'required|integer|exists:customers,id',
            'staff_id'      => 'required|integer|exists:staff,id',
            'order_date'    => 'required|date',
            'total_amount'  => 'required|numeric|min:0',
            'status_id'     => 'required|integer|in:1,2,3',
        ]);

        $order = new OrderModel();
        $order->customer_id  = $request->customer_id;
        $order->staff_id     = $request->staff_id;
        $order->order_date   = $request->order_date;
        $order->total_amount = $request->total_amount;
        $order->status_id    = $request->status_id;

        if ($order->save()) {
            return redirect('orders')->with('success', 'Order created successfully!');
        } else {
            return back()->with('error', 'Failed to create order.');
        }
    }



    public function show(OrderModel $orderModel)
    {
        //
    }


    public function edit(OrderModel $orderModel)
    {
        //
    }


    public function update(Request $request, OrderModel $orderModel)
    {
        //
    }


    public function destroy(OrderModel $orderModel)
    {
        //
    }
}
