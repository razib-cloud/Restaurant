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
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'members' => 'required|integer',
            'table_id' => 'required|exists:res_tables,id'
        ]);

        // Mark the table as reserved
        ResTable::where('id', $request->table_id)->update(['status' => 1]);

        // Create reservation
        Reservation::create($request->all());

        return response()->json(['message' => 'Reservation successful!']);
    }
}
