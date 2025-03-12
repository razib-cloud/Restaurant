<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\ResTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::paginate(10);
        return view("pages.erp.reservation.index", ["reservations" => $reservations]);
    }


    // Fetch all tables with their status
    public function getTables(): JsonResponse
    {
        // echo"Reservations";

        $tables = DB::table('res_tables')->get();
        return response()->json($tables);
    }

    public function create()
    {
        return view("pages.erp.reservation.create", ["tables" => ResTable::all()]);
    }

    // Handle reservations
    public function store(Request $request): JsonResponse
    {

        // print_r($request->all());
        // die;
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







    public function show($id)
    {
        $reservation = Reservation::find($id);
        return view("pages.erp.reservation.show", ["reservation" => $reservation]);
    }
    public function edit(Reservation $reservation)
    {
        return view("pages.erp.reservation.edit", ["reservation" => $reservation, "tables" => ResTable::all()]);
    }
    public function update(Request $request, Reservation $reservation)
    {
        //Reservation::update($request->all());
        $reservation = Reservation::find($reservation->id);
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->members = $request->members;
        $reservation->special_requests = $request->special_requests;
        $reservation->table_id = $request->table_id;
        date_default_timezone_set("Asia/Dhaka");
        $reservation->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $reservation->updated_at = date('Y-m-d H:i:s');

        $reservation->save();

        return redirect()->route("reservations.index")->with('success', 'Updated Successfully.');
    }
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route("reservations.index")->with('success', 'Deleted Successfully.');
    }
}
