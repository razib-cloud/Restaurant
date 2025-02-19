<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/', function () {
//     return view('dashboard');

// });

Route::resource('menu', MenuController::class);

Route::resource('roles', RoleController::class);
Route::resource('categories', CategoryController::class);
// Route::resource('categories', CategoryController::class)->middleware("Manager");
Route::resource('orders', OrderController::class);
Route::resource('orderdetails', OrderDetailController::class);
Route::resource('customers', CustomerController::class);
Route::resource('menuitems', MenuItemController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('payments', PaymentController::class);


//Frontend Route
Route::resource('cart', );
Route::resource('reserve', );


require __DIR__ . '/auth.php';
