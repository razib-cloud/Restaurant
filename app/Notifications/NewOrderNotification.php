<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Notifications\Notification;

class NewOrderNotification extends Notification
{
    // Determine the channels for the notification
    public function via($notifiable)
    {
        return ['database'];  // Use database channel for storing notifications
    }

    // Define the structure of the notification data to be stored in the database
    public function toDatabase($notifiable)
    {
        return [
            'message' => 'New order placed!'  // The message for the admin or user
        ];
    }
}
