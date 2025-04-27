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
        // Check if customer exists by phone, otherwise create new
        $customer = Customer::where('phone', $request->phone)->value('id');
        $lastcustomer_id = 0;

        if (!$customer) {
            $newCustomer = new Customer();
            $newCustomer->name = $request->name;
            $newCustomer->phone = $request->phone;
            $newCustomer->email = $request->email;
            $newCustomer->address = $request->address;
            $newCustomer->city = $request->city;
            $newCustomer->post_code = $request->post_code;
            $newCustomer->save();
            $lastcustomer_id = $newCustomer->id;
        }

        // Create the Order
        $order = new Order();
        $order->customer_id = $customer ?: $lastcustomer_id; // <-- Fixed line here
        $order->user_id = 1; // Default user id (admin)
        $order->total_amount = $request->total_payment;
        $order->discount = 0;
        $order->status_id = 1; // 1 = Pending (or your default status)
        $order->order_date = now();
        $order->delivery_date = now();
        $order->save();

        // Insert Order Items and update Inventory
        foreach ($request->products as $product) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product['item_id'];
            $orderItem->quantity = $product['qty'];
            $orderItem->price = $product['price'];
            $orderItem->save();

            // Update inventory
            $inventory = Inventory::where('product_id', $product['item_id'])->first();
            if ($inventory) {
                $inventory->quantity -= $product['qty'];
                $inventory->save();
            }
        }

        // Create Payment
        $payment = new Payment();
        $payment->order_id = $order->id;
        $payment->customer_id = $order->customer_id;
        $payment->payment_method = $request->payment_method;
        $payment->payment_status_id = 1; // 1 = Pending (you can change later)
        $payment->amount = $request->total_payment;
        $payment->transaction_id = "TXN" . time();
        $payment->payment_date = now();
        $payment->save();

        return response()->json([
            'message' => 'Order placed successfully!',
            'order_id' => $order->id
        ], 201);
    }
}
