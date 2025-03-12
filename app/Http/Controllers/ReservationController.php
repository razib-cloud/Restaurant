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


    //for multiple table

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'phone' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'date' => 'required|date',
    //         'time' => 'required|string',
    //         'members' => 'required|integer',
    //         'table_ids' => 'required|array', // Array of table IDs
    //         'special_requests' => 'nullable|string',
    //     ]);

    //     $table_ids = $validated['table_ids'];
    //     $date = $validated['date'];
    //     $time = $validated['time'];

    //     // Check if the selected tables are already reserved for the given date and time
    //     $reservedTables = Reservation::whereIn('table_id', $table_ids)
    //         ->where('date', $date)
    //         ->where('time', $time)
    //         ->get();

    //     if ($reservedTables->count() > 0) {
    //         return response()->json(['error' => 'Some of the selected tables are already reserved for this date and time.'], 400);
    //     }

    //     // Create reservations for the selected tables
    //     foreach ($table_ids as $table_id) {
    //         // Mark each table as reserved
    //         ResTable::where('id', $table_id)->update(['status' => 0]);

    //         // Create a reservation for the table
    //         Reservation::create([
    //             'name' => $validated['name'],
    //             'phone' => $validated['phone'],
    //             'email' => $validated['email'],
    //             'date' => $date,
    //             'time' => $time,
    //             'members' => $validated['members'],
    //             'table_id' => $table_id,
    //             'special_requests' => $validated['special_requests'],
    //         ]);
    //     }

    //     return response()->json(['success' => 'Tables reserved successfully!']);
    // }






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
