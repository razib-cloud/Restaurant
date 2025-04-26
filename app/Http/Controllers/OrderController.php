<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Statu;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::query()->with(['customer', 'status']);

        if ($request->has('status_id') && $request->status_id !== '') {
            $query->where('status_id', $request->status_id);
        }

        $perPage = $request->get('perPage', 10);
        $orders = $query->latest()->paginate($perPage);

        return view('pages.erp.order.index', compact('orders'));
    }

    public function create()
    {
        $customers = Customer::all();
        $statuses = Status::all();
        return view('pages.erp.order.create', compact('customers', 'statuses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'nullable|exists:customers,id',
            'user_id' => 'required|integer',
            'total_amount' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'order_date' => 'required|date',
            'delivery_date' => 'nullable|date',
        ]);

        $order = new Order;
        $order->customer_id = $request->customer_id;
        $order->user_id = $request->user_id;
        $order->total_amount = $request->total_amount;
        $order->discount = $request->discount;

        // Force Pending status always
        $order->status_id = 1; // 1 = Pending

        $order->order_date = $request->order_date;
        $order->delivery_date = $request->delivery_date;

        date_default_timezone_set("Asia/Dhaka");
        $order->created_at = date('Y-m-d H:i:s');
        $order->updated_at = date('Y-m-d H:i:s');

        $order->save();

        // Log status after saving
        Log::info('New order created', [
            'order_id' => $order->id,
            'status_id' => $order->status_id,
        ]);

        return back()->with('success', 'Order created successfully and marked as Pending.');
    }


    public function show(Order $order)
    {
        $order->load(['customer', 'status']);
        return view('pages.erp.order.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $customers = Customer::all();
        $statuses = Status::all();
        $users = User::all();
        return view('pages.erp.order.edit', compact('order', 'customers', 'statuses', 'users'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'customer_id' => 'nullable|exists:customers,id',
            'user_id' => 'required|integer',
            'total_amount' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'status_id' => 'required|exists:statuses,id',
            'order_date' => 'required|date',
            'delivery_date' => 'nullable|date',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        try {
            $order->delete();
            return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('orders.index')->with('error', 'Failed to delete order.');
        }
    }
}
