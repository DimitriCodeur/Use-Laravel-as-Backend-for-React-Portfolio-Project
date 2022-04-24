<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;

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

//Chart Data Route
Route::get('/chartdata', [ChartController::class, 'onAllSelect']);

//Client Review Route
Route::get('/clientreview', [ClientReviewController::class, 'onAllSelect']);

//Contact Route
Route::get('/contact', [ContactController::class, 'onAllSelect']);