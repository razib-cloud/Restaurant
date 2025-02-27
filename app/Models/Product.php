<?php
/*
* ProBot Version: 4.0
* Laravel Version: 10x
* Description: This source file "app/Models/_Product.php" was generated by ProBot AI.
* Date: 2/23/2025 10:15:46 AM
* Contact: towhid1@outlook.com
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillables=[
        'menu_id',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
