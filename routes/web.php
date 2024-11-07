<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//Lampu
Route::get('/lampu', [App\Http\Controllers\LampuController::class, 'index'])->name('indexLamp')->middleware('auth');
Route::get('/lampu/setel-waktu/{id}', [App\Http\Controllers\LampuController::class, 'editLamp'])->name('editLamp')->middleware('auth');
Route::put('/lampu/setel-waktu/{id}', [App\Http\Controllers\LampuController::class, 'updateLamp'])->name('updateLamp')->middleware('auth');
Route::get('/get_lamp_schedule', [App\Http\Controllers\LampuController::class, 'getLampSchedule'])->middleware('auth');
Route::get('/update_lamp_status', [App\Http\Controllers\LampuController::class, 'updateLampStatus'])->middleware('auth');

//Dashboard
Route::get('/dashboard', function () { return view('pages.dashboard'); })->middleware('auth');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');