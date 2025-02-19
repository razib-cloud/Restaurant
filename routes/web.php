<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\RoleController;

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

Route::resource('role', RoleController::class);
Route::resource('categories', CategoryController::class);
// Route::resource('categories', CategoryController::class)->middleware("Manager");
Route::resource('orders', OrderController::class);
Route::resource('customers', CustomerController::class);


require __DIR__ . '/auth.php';
