<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{
    // Fetch all tables with their status
    public function getTables(): JsonResponse
    {
        // echo"Reservations";

        $tables = DB::table('res_tables')->get();
        return response()->json($tables);
    }

    // Handle reservations
    public function store(Request $request): JsonResponse
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'phone' => 'required|string|max:20',
        //     'email' => 'required|email',
        //     'date' => 'required|date',
        //     'time' => 'required',
        //     'members' => 'required|integer|min:1',
        //     'table_id' => 'required|exists:res_tables,id',
        //     'special_requests' => 'nullable|string',
        // ]);

        // Check if table is already reserved
        $table = DB::table('res_tables')->where('id', $request->table_id)->first();
        if ($table->status == 1) {
            return response()->json(['error' => 'Table is already reserved'], 400);
        }

        // Insert reservation into database
        DB::table('reservations')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'time' => $request->time,
            'members' => $request->members,
            'table_id' => $request->table_id,
            'special_requests' => $request->special_requests,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Mark table as reserved
        DB::table('res_tables')->where('id', $request->table_id)->update(['status' => 1]);

        return response()->json(['success' => 'Reservation successful!']);
    }
}
