<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    // Define the relationship between Notification and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
