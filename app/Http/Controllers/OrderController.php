<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Role;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all(); // Fetch all orders from the database
        return view('pages.erp.orders.index', compact('orders'));
    }



    public function create()
    {
        return view('pages.erp.orders.create');
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

        $order = new Order();
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



    public function show($id)
    {
        $result = Order::find($id);

        if (!$result) {
            return redirect('orders')->with('error', 'Order not found.');
        }

        return view('pages.erp.orders.show', compact('result'));
    }



    public function edit(Order $order)
    {
        return view('pages.erp.orders.update', compact('order'));
    }



    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return redirect('orders')->with('error', 'Order not found.');
        }

        // Validate request data
        $request->validate([
            'customer_id'   => 'required|integer|exists:customers,id',
            'staff_id'      => 'required|integer|exists:staff,id',
            'order_date'    => 'required|date',
            'total_amount'  => 'required|numeric|min:0',
            'status_id'     => 'required|integer|in:1,2,3',
        ]);

        // Update order fields
        $order->customer_id  = $request->customer_id;
        $order->staff_id     = $request->staff_id;
        $order->order_date   = $request->order_date;
        $order->total_amount = $request->total_amount;
        $order->status_id    = $request->status_id;

        if ($order->save()) {
            return redirect('orders')->with('success', 'Order has been updated.');
        } else {
            return back()->with('error', 'Failed to update order.');
        }
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('orders')->with('success', 'Order has been deleted.');
    }
}
