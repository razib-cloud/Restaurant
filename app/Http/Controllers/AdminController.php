<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Notification List Show
    public function index()
    {
        // Assuming the admin is determined by 'role_id' or 'role'
        // Adjust according to your application logic (e.g., checking for 'role_id' or 'role')
        $admin = User::where('role_id', 1)->first(); // Adjust column name if necessary

        // Fetch notifications for the admin user
        $notifications = DB::table('notifications')
                            ->where('user_id', $admin->id)
                            ->orderBy('created_at', 'desc')
                            ->get();

        // Pass notifications to the view
        return view('pages.erp.notification.notifications', compact('notifications'));
    }

    // Mark Notification as Read
    public function markAsRead($id)
    {
        DB::table('notifications')->where('id', $id)->update(['is_read' => true]);

        // Redirect back to notifications page
        return redirect()->route('admin.notifications');
    }

    // Delete Notification
    public function destroy($id)
    {
        DB::table('notifications')->where('id', $id)->delete();

        // Redirect back to notifications page
        return redirect()->route('admin.notifications');
    }
}
