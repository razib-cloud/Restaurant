<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\ResTable;
use App\Models\Table;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::paginate(10);
        return view('pages.erp.reservation.index', compact('reservations'));
    }

    public function create()
    {
        return view("pages.erp.reservation.create", ["tables" => ResTable::all()]);
    }
    public function store(Request $request)
    {
        //Reservation::create($request->all());
        $reservation = new Reservation;
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

        return back()->with('success', 'Created Successfully.');
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
