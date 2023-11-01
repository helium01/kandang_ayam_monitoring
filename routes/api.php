<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\SaklarController;

Route::post('/saklars', [SaklarController::class, 'store']);
Route::post('/saklars/front', [SaklarController::class, 'store2']);
Route::get('/saklars/{id}', [SaklarController::class, 'show']);
Route::put('/saklars/{id}', [SaklarController::class, 'update']);
Route::delete('/saklars/{id}', [SaklarController::class, 'destroy']);



use App\Http\Controllers\DhtController;

Route::get('/dhts', [DhtController::class, 'index']);
Route::post('/dhts', [DhtController::class, 'store']);
Route::get('/dhts/{id}', [DhtController::class, 'show']);
Route::put('/dhts/{id}', [DhtController::class, 'update']);
Route::delete('/dhts/{id}', [DhtController::class, 'destroy']);

use App\Http\Controllers\Esp32Controller;

Route::get('/esp32s', [Esp32Controller::class, 'index']);
Route::post('/esp32s', [Esp32Controller::class, 'store']);
Route::get('/esp32s/{id}', [Esp32Controller::class, 'show']);
Route::put('/esp32s/{id}', [Esp32Controller::class, 'update']);
Route::delete('/esp32s/{id}', [Esp32Controller::class, 'destroy']);

use App\Http\Controllers\LdrController;

Route::get('/ldrs', [LdrController::class, 'index']);
Route::post('/ldrs', [LdrController::class, 'store']);
Route::get('/ldrs/{id}', [LdrController::class, 'show']);
Route::put('/ldrs/{id}', [LdrController::class, 'update']);
Route::delete('/ldrs/{id}', [LdrController::class, 'destroy']);

use App\Http\Controllers\RtcController;

Route::get('/rtcs', [RtcController::class, 'index']);
Route::post('/rtcs', [RtcController::class, 'store']);
Route::get('/rtcs/{id}', [RtcController::class, 'show']);
Route::put('/rtcs/{id}', [RtcController::class, 'update']);
Route::delete('/rtcs/{id}', [RtcController::class, 'destroy']);

use App\Http\Controllers\ServoController;

Route::post('/servos', [ServoController::class, 'store']);
Route::post('/servos/front', [ServoController::class, 'store2']);
Route::get('/servos/{id}', [ServoController::class, 'show']);
Route::put('/servos/{id}', [ServoController::class, 'update']);
Route::delete('/servos/{id}', [ServoController::class, 'destroy']);
