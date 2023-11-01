<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaklarController;
use App\Http\Controllers\DhtController;
use App\Http\Controllers\Esp32Controller;
use App\Http\Controllers\ServoController;
use App\Http\Controllers\LdrController;
use App\Http\Controllers\RtcController;

use App\Http\Controllers\AyamController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/saklars', [SaklarController::class, 'index']);
Route::get('/saklar', [SaklarController::class, 'index2']);
Route::get('/dht', [DhtController::class, 'index2']);
Route::get('/esp32', [Esp32Controller::class, 'index2']);
Route::get('/ldr', [LdrController::class, 'index2']);
Route::get('/servo', [ServoController::class, 'index2']);
Route::get('/rtc', [RtcController::class, 'index2']);
Route::get('/servos', [ServoController::class, 'index']);

Route::get('/ayams', [AyamController::class, 'index']);
Route::get('/ayams/create', [AyamController::class, 'create']);
Route::post('/ayams', [AyamController::class, 'store']);
Route::get('/ayams/{id}', [AyamController::class, 'show']);
Route::put('/ayams/{id}', [AyamController::class, 'update']);
Route::delete('/ayams/{id}', [AyamController::class, 'destroy']);
