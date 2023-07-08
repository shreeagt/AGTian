<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\VideoController;
use App\Http\Controllers\api\Status2Controller;
use App\Http\Controllers\api\Status3Controller;



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

Route::get('/videos/{id}', [VideoController::class, 'show'])->name('video.show');

Route::get('/videos/{id}/approve/{authorityid}',  [VideoController::class, 'approve']);
Route::get('/videos/{id}/reject/{authorityid}', [VideoController::class, 'reject']);
Route::get('/status2/{id}/approve/{authorityid}', [Status2Controller::class, 'approvevideo'])->name('status2.approve');
Route::get('/status2/{id}/reject/{authorityid}', [Status2Controller::class, 'rejectvideo'])->name('status2.reject');
Route::get('/status3/{id}/approve/{authorityid}', [Status3Controller::class, 'statusapprove'])->name('status3.approve');
Route::get('/status3/{id}/reject/{authorityid}', [Status3Controller::class, 'statusreject'])->name('status3.reject');
