<?php
/*
* ProBot Version: 4.0
* Laravel Version: 10x
* Description: This source file "app/Models/_Menu.php" was generated by ProBot AI.
* Date: 2/21/2025 1:14:58 AM
* Contact: towhid1@outlook.com
*/
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Menu extends Model{
    public function menu(){
        return $this->hasMany(Product::class);
    }


}
?>
