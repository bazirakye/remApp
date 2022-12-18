<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/update-database', [App\Http\Controllers\HomeController::class, 'updateDB'])->name('update-db');

Route::get('/list-patients', [App\Http\Controllers\HomeController::class, 'listPatients'])->name('list-patient');

Route::get('/upcoming-appointments', [App\Http\Controllers\HomeController::class, 'upComingAppointments'])->name('upcoming-appointments');

Route::get('/custom-sms', [App\Http\Controllers\HomeController::class, 'sendCustomSms'])->name('custom-sms');
