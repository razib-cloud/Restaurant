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


    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'table_id' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required|string', // Assuming time is sent as "HH:MM"
        ]);

        // Check if the table is already reserved for the same date and time
        $existingReservation = Reservation::where('table_id', $request->table_id)
            ->where('date', $request->date)
            ->where('time', $request->time)
            ->first();

        if ($existingReservation) {
            return response()->json(['error' => 'This table is already reserved for the selected date and time.'], 400);
        }

        // Create a new reservation without changing the ResTable status
        Reservation::create($request->all());

        return response()->json(['success' => 'Reservation successful!']);
    }





    public function checkReservedTables(Request $request)
    {
        $date = $request->date;
        $time = $request->time;

        // Fetch all reserved tables for the selected date and time
        $reservedTables = Reservation::where('date', $date)
            ->where('time', $time)
            ->get();

        // Get all tables and mark the ones as reserved
        $tables = ResTable::all()->map(function ($table) use ($reservedTables) {
            $isReserved = $reservedTables->contains('table_id', $table->id);
            return [
                'id' => $table->id,
                'table_number' => $table->table_number,
                'capacity' => $table->capacity,
                'is_reserved' => $isReserved
            ];
        });

        return response()->json($tables);
    }
}
