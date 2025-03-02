<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerReviewController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PaymentStatuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StatuController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
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
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
// Route::resource('categories', CategoryController::class)->middleware("Manager");
Route::resource('orders', OrderController::class);
Route::resource('orderitems', OrderItemController::class);
Route::resource('customers', CustomerController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('payments', PaymentController::class);

Route::resource('paymentstatus', PaymentStatuController::class);
Route::resource('status', StatuController::class);
Route::resource('customerreviews', CustomerReviewController::class);
Route::resource('inventorys', InventoryController::class);
Route::resource('menus', MenuController::class);
Route::resource('staffs', StaffController::class);

Route::resource('erp_products', ProductController::class);






//frontend route

Route::prefix('res')->group(function () {
    Route::view('/', 'pages.frontend.index')->name('res.index');
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
    Route::view('cart', 'pages.frontend.cart')->name('res.cart',);
    Route::view('menu', 'pages.frontend.menu')->name('res.menu');
    Route::view('about', 'pages.frontend.about')->name('res.about');
    Route::view('contact', 'pages.frontend.contact')->name('res.contact');
    Route::view('checkout', 'pages.frontend.checkout')->name('res.checkout');
    Route::view('productdetails', 'pages.frontend.productdetails')->name('res.productdetails');
    Route::post('/reserve-table', [ReservationController::class, 'store'])->name('res.reserve.store');
    Route::get('/reservations', [ReservationController::class, 'index'])->name('res.reservations');






});






require __DIR__ . '/auth.php';
