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

Route::get('/videos/{empid}', [VideoController::class, 'show'])->name('video.show');

Route::get('/videos/{id}/approve/{authorityid}',  [VideoController::class, 'approve']);
Route::get('/videos/{id}/reject/{authorityid}', [VideoController::class, 'reject']);
