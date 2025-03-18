<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Reservation;
use App\Models\ResTable;
use Illuminate\Http\Request;

class ReactapiController extends Controller
{

    public function index()
    {
        return response()->json(["customers" => Customer::all()]);
    }




    public function tables()
    {
        return response()->json(["tables" => ResTable::all()]);
    }



    public function reservedtables()
    {
        $reservations = Reservation::all();
        return response()->json(["tables" => $reservations]);
    }





    // public function resarvation(Request $request)
    // {
    //     try {
    //         $reservation = new Reservation;

    //         // Fetching customer details directly from the request
    //         $customer = Customer::find($request->customer_id);

    //         if (!$customer) {
    //             return response()->json(["error" => "Customer not found"]);
    //         }

    //         $reservation->name = $customer->name;
    //         $reservation->phone = $customer->phone;
    //         $reservation->email = $customer->email;

    //         $reservation->date = $request->date;
    //         $reservation->time = $request->time;
    //         $reservation->members = $request->members;
    //         $reservation->table_id = $request->table_id;

    //         date_default_timezone_set("Asia/Dhaka");
    //         $reservation->created_at = date('Y-m-d H:i:s');
    //         $reservation->updated_at = date('Y-m-d H:i:s');

    //         $reservation->save();

    //         // Update table status to reserved
    //         $restable = ResTable::find($request->table_id);

    //         if ($restable) {
    //             $restable->status = 1;
    //             $restable->save();
    //         }

    //         return response()->json(["success" => "saved"]);
    //     } catch (\Throwable $th) {
    //         return response()->json(["error" => $th->getMessage()]);
    //     }
    // }


    public function resarvation(Request $request)
{
    try {
        // New customer creation block
        if ($request->customer_id === null) {
            $customer = new Customer;
            $customer->name = $request->customer['name'];
            $customer->phone = $request->customer['phone'];
            $customer->email = $request->customer['email'];
            $customer->address = $request->customer['address'];
            $customer->created_at = now();
            $customer->updated_at = now();
            $customer->save();

            $customer_id = $customer->id; // Newly created customer ID
        } else {
            $customer_id = $request->customer_id;
        }

        $reservation = new Reservation;

        // Fetching customer details directly from the request or the newly created customer
        $customer = Customer::find($customer_id);

        if (!$customer) {
            return response()->json(["error" => "Customer not found"]);
        }

        $reservation->name = $customer->name;
        $reservation->phone = $customer->phone;
        $reservation->email = $customer->email;

        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->members = $request->members;
        $reservation->table_id = $request->table_id;

        $reservation->created_at = now();
        $reservation->updated_at = now();

        $reservation->save();

        // Update table status to reserved
        $restable = ResTable::find($request->table_id);

        if ($restable) {
            $restable->status = 1;
            $restable->save();
        }

        return response()->json(["success" => "Reservation saved successfully."]);
    } catch (\Throwable $th) {
        return response()->json(["error" => $th->getMessage()]);
    }
}




    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
