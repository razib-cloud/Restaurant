<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Reservation;
use App\Models\ResTable;
use Illuminate\Http\Request;

class ReactapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(["customers"=>Customer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tables()
    {
        return response()->json(["tables" => ResTable::all()]);
    }
    public function reservedtables()
    {
        $reservations = Reservation::all();
        return response()->json(["tables" => $reservations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resarvation(Request $request)
    {

        // print_r($request->all());
        // print_r($request->customer_id);

        try {

            $reservation = new Reservation;
            $reservation->name=$request->customer_id['name'];
            $reservation->phone=$request->customer_id['phone'];
            $reservation->email=$request->customer_id['email'];
            $reservation->date=now();
            $reservation->time=now();
            $reservation->members=$request->reservations_id[''];
            $reservation->special_requests="";
            $reservation->table_id=$request->table_id;
                date_default_timezone_set("Asia/Dhaka");
            $reservation->created_at=date('Y-m-d H:i:s');
                date_default_timezone_set("Asia/Dhaka");
            $reservation->updated_at=date('Y-m-d H:i:s');
            $reservation->save();

             $restable=  ResTable::find($request->table_id);
             $restable->status= 1;
             $restable->save();
            return response()->json(["success" =>"saved"]);

        } catch (\Throwable $th) {
            return response()->json(["error" => $th]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
