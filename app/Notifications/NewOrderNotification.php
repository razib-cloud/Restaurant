<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\DatabaseMessage;

class NewOrderNotification extends Notification
{
    use Queueable;
    protected $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['database']; // Database e store korbo
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'New order received! Order ID: ' . $this->order->id,
            'order_id' => $this->order->id
        ];
    }
}
