<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Notifications\Notification;

class AdminController extends Controller
{
    // Show all notifications (index)
    public function index()
{
    // Get the admin user (assuming 'role' column identifies admin)
    $admin = User::where('role', 'admin')->first();  // Find admin user
    $notifications = $admin->notifications;  // Fetch all notifications for the admin

    return view('admin.notifications', compact('notifications'));  // Pass notifications to the view
}

// app/Http/Controllers/AdminController.php

public function markAsRead($id)
{
    $notification = Notification::findOrFail($id);
    $notification->update(['is_read' => true]);

    return redirect()->route('admin.notifications'); // or wherever your notifications are listed
}


    // Create a new notification (create)
    public function create()
    {

    }


    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $notification = Notification::find($id);
        return view('admin.show_notification', compact('notification'));
    }


    public function edit($id)
    {
        $notification = Notification::find($id);
        return view('admin.edit_notification', compact('notification'));
    }

    public function update(Request $request, $id)
    {
        $notification = Notification::find($id);
        $notification->data = $request->input('message');
        $notification->save();

        return redirect()->route('admin.index');
    }



    public function destroy($id)
    {
        $notification = Notification::find($id);
        $notification->delete();

        return redirect()->route('admin.index');
    }

}
