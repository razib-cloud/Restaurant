<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'member' => 'required|integer|min:1',
        ]);

        // Create a new reservation record
        Reservation::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'time' => $request->time,
            'member' => $request->member,
        ]);

        // Flash success message to session
        return back()->with('success', 'Table reserved successfully!');
    }

}
