<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NagadController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/nagad/pay',[NagadController::class,'pay'])->name('nagad.pay');
Route::get('/nagad/callback', [NagadController::class,'callback']);
Route::get('/nagad/refund/{paymentRefId}', [NagadController::class,'refund']);
