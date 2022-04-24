<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\HomePageEtcController;

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
Route::post('/contactsend', [ContactController::class, 'onContactSend']);

//Video All Routes
Route::get('/coursehome', [CoursesController::class, 'onSelectFour']);
Route::get('/courseall', [CoursesController::class, 'onSelectAll']);
Route::post('/coursedetails', [CoursesController::class, 'onSelectDetails']);

//Footer Route
Route::get('/footerdata', [FooterController::class, 'onSelectAll']);

//Information Route
Route::get('/information', [InformationController::class, 'onSelectAll']);

//Services Route
Route::get('/services', [ServiceController::class, 'ServiceView']);

//Project All Routes
Route::get('/projecthome', [ProjectController::class, 'onSelectThree']);
Route::get('/projectall', [ProjectController::class, 'onSelectAll']);
Route::post('/projectdetails', [ProjectController::class, 'ProjectDetails']);

//Services Route
Route::get('/home/video', [HomePageEtcController::class, 'SelectVideo']);
Route::get('/totalhome', [HomePageEtcController::class, 'SelectTotalHome']);
Route::get('/techhome', [HomePageEtcController::class, 'SelectTechHome']);
Route::get('/homepage/title', [HomePageEtcController::class, 'SelectHomeTitle']);