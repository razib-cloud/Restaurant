<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'price', 'stock', 'menu_id'];


    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menus_id');
    }

    public function product()
    {
        return $this->hasMany(OrderItem::class);
    }

}
