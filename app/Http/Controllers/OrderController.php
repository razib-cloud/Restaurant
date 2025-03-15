<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Customer;

use App\Models\Status;
use App\Models\User;
use App\Notifications\NewOrderNotification;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('customer')->paginate(10);
        return view("pages.erp.order.index", ["orders" => $orders]);
    }

    public function pending()
    {
        $orders = Order::with('customer')->paginate(10);
        return view("pages.erp.order.index", ["orders" => $orders]);
    }

    public function create()
    {
        return view("pages.erp.order.create", ["customers" => Customer::all(), "users" => User::all(), "status" => Status::all()]);
    }


    public function store(Request $request)
    {
        // Create a new order instance
        $order = new Order;
        $order->customer_id = $request->customer_id;
        $order->user_id = $request->user_id;
        $order->total_amount = $request->total_amount;
        $order->discount = $request->discount;
        $order->status_id = $request->status_id;
        $order->order_date = $request->order_date;
        $order->delivery_date = $request->delivery_date;

        // Set the created and updated timestamps
        date_default_timezone_set("Asia/Dhaka");
        $order->created_at = date('Y-m-d H:i:s');
        $order->updated_at = date('Y-m-d H:i:s');

        // Save the order to the database
        $order->save();

        // Send notification to admin after saving the order
        $admin = User::where('role', 'admin')->first();  // Find admin user
        $admin->notify(new NewOrderNotification());  // Send notification

        // Return a success message after creating the order
        return back()->with('success', 'Created Successfully.');
    }




    public function show($id)
    {
        $order = Order::find($id);
        return view("pages.erp.order.show", ["order" => $order]);
    }
    public function edit(Order $order)
    {
        return view("pages.erp.order.edit", ["order" => $order, "customers" => Customer::all(), "users" => User::all(), "status" => Status::all()]);
    }
    public function update(Request $request, Order $order)
    {
        //Order::update($request->all());
        $order = Order::find($order->id);
        $order->customer_id = $request->customer_id;
        $order->user_id = $request->user_id;
        $order->total_amount = $request->total_amount;
        $order->discount = $request->discount;
        $order->status_id = $request->status_id;
        $order->order_date = $request->order_date;
        $order->delivery_date = $request->delivery_date;
        date_default_timezone_set("Asia/Dhaka");
        $order->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $order->updated_at = date('Y-m-d H:i:s');

        $order->save();

        return redirect()->route("orders.index")->with('success', 'Updated Successfully.');
    }
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route("orders.index")->with('success', 'Deleted Successfully.');
    }
}
