<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    function index(Request $request){


        $customer= Customer::where('phone', $request->phone)->value('id');
        $lastcustomer_id=0;
        if (!$customer) {
            $newCustomer = new Customer;
            $newCustomer->name=$request->name;
            $newCustomer->phone=$request->phone;
            $newCustomer->email=$request->email;
            $newCustomer->address=$request->address;
            date_default_timezone_set("Asia/Dhaka");
            $newCustomer->created_at=date('Y-m-d H:i:s');
            date_default_timezone_set("Asia/Dhaka");
            $newCustomer->updated_at=date('Y-m-d H:i:s');
            $newCustomer->city=$request->city;
            $newCustomer->post_code=$request->post_code;

		     $newCustomer->save();

             $lastcustomer_id= $newCustomer->id;
        }

        // print_r($customer);
        // print_r($lastcustomer_id);





        $order = new Order();
        $order->customer_id = $customer ?? $lastcustomer_id ;
        $order->user_id =1;
        $order->total_amount = 1;
        $order->discount =0;
        $order->status_id = 1;
        $order->order_date = now();
        $order->delivery_date = now();
        date_default_timezone_set("Asia/Dhaka");
        $order->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $order->updated_at = date('Y-m-d H:i:s');
        $order->save();


        // $lastId= $order->id;
        // $products= $request->products;


        //  print_r($customer);

    }
}
