<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/phones', [PhoneController::class, 'index'])->name('phones');
Route::post('/phones', [PhoneController::class, 'store']);
Route::delete('/phones/{phone}', [PhoneController::class, 'destroy'])->name('phone.destroy');
Route::get('/phones/{phone}/edit', [PhoneController::class, 'edit']);
Route::put('/phones/{phone}', [PhoneController::class, 'update']);
