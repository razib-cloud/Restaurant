<?php

use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\ReactapiController;
use App\Http\Controllers\api\ReservationController;
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

Route::get('customers', [ReactapiController::class, 'index']);
Route::get('tables', [ReactapiController::class, 'tables']);
Route::post('resarvation', [ReactapiController::class, 'resarvation']);
