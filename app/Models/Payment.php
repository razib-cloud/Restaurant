<?php
/*
* ProBot Version: 4.0
* Laravel Version: 10x
* Description: This source file "app/Models/_Payment.php" was generated by ProBot AI.
* Date: 3/1/2025 9:37:43 AM
* Contact: towhid1@outlook.com
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function status()
    {
        return $this->belongsTo(PaymentStatu::class, 'payment_status_id');
    }



    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');

    }
    public function paymentStatus()
{
    return $this->belongsTo(PaymentStatu::class, 'payment_status_id');
}




}
