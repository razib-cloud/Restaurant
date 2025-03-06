<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // Check if customer exists, else create new one
        $customer = Customer::where('phone', $request->phone)->value('id');
        $lastcustomer_id = 0;

        if (!$customer) {
            // Create a new customer
            $newCustomer = new Customer;
            $newCustomer->name = $request->name;
            $newCustomer->phone = $request->phone;
            $newCustomer->email = $request->email;
            $newCustomer->address = $request->address;
            $newCustomer->city = $request->city;
            $newCustomer->post_code = $request->post_code;
            date_default_timezone_set("Asia/Dhaka");
            $newCustomer->created_at = date('Y-m-d H:i:s');
            $newCustomer->updated_at = date('Y-m-d H:i:s');

            $newCustomer->save();
            $lastcustomer_id = $newCustomer->id;
        }

        // Create Order
        $order = new Order();
        $order->customer_id = $customer ?? $lastcustomer_id;
        $order->user_id = 1;
        $order->total_amount = $request->total_payment;
        $order->discount = 0;
        $order->status_id = 1;
        $order->order_date = now();
        $order->delivery_date = now();
        date_default_timezone_set("Asia/Dhaka");
        $order->created_at = date('Y-m-d H:i:s');
        $order->updated_at = date('Y-m-d H:i:s');
        $order->save();

        // Insert Order Items
        foreach ($request->products as $product) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product['item_id'];
            $orderItem->quantity = $product['qty'];
            $orderItem->price = $product['price'];
            $orderItem->save();
        }


        $inventory = Inventory::where('product_id', $product['item_id'])->first();
        if ($inventory) {
            $inventory->quantity -= $product['qty'];
            $inventory->save();
        }

        //payment
        $payment = new Payment();
        $payment->order_id = $order->id;
        $payment->customer_id = $order->customer_id;
        $payment->payment_method = $request->payment_method;
        $payment->payment_status_id = 1;
        $payment->amount = $request->total_payment;
        $payment->transaction_id = "TXN" . time();
        $payment->payment_date = now();
        $payment->created_at = now();
        $payment->updated_at = now();
        $payment->save();


        return response()->json([
            'message' => 'Order placed successfully!',
            'order_id' => $order->id
        ], 201);
    }
}
