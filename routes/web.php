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
Route::get('/lampu', [App\Http\Controllers\LampuController::class, 'index'])->name('index')->middleware('auth');
Route::get('/lampu/setel-waktu/{id}', [App\Http\Controllers\LampuController::class, 'editLamp'])->name('editLamp')->middleware('auth');
Route::put('/lampu/setel-waktu/{id}', [App\Http\Controllers\LampuController::class, 'updateLamp'])->name('updateLamp')->middleware('auth');

//Dashboard
Route::get('/dashboard', function () { return view('pages.dashboard'); })->middleware('auth');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');