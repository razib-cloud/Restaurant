<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResTable;
use App\Models\Reservation;

class ReservationController extends Controller
{
    // Fetch tables and their status
    public function getTables()
    {
        return response()->json(ResTable::all());
    }

    // Store reservation
    public function store(Request $request)
    {


        // Mark the table as reserved
        // print_r($request->all());
        ResTable::where('id', $request->table_id)->update(['status' => 0]);
        // die;

        // Create reservation
        Reservation::create($request->all());

        return response()->json(['message' => 'Reservation successful!']);
    }
}
