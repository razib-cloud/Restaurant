<?php

use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\ReactapiController;
use App\Http\Controllers\api\ReactOrderController;
use App\Http\Controllers\api\ReactProductController;
use App\Http\Controllers\api\ReservationController;
use App\Http\Controllers\api\vue\MenusController;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('order', [OrderController::class, 'index']);
Route::get('tables', [ReservationController::class, 'getTables']);
Route::post('tableReserve', [ReservationController::class, 'store']);

//for React
Route::get('customers', [ReactapiController::class, 'index']);
Route::get('tables', [ReactapiController::class, 'tables']);
Route::get('resarvation', [ReactapiController::class, 'reservedtables']);

Route::post('resarvations', [ReactapiController::class, 'resarvation']);


Route::get('orders', [ReactOrderController::class, 'order']);
Route::get('products', [ReactProductController::class, 'index']);
Route::get('stock', [ReactOrderController::class, 'stock']);


//for vue

Route::apiResource("roles", RoleController::class);
Route::apiResource("menus", MenusController::class);
