<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZgloszeniaController;

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

Route::get('/', function () {
    return view('strona');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/zapisz-zgloszenie', [ZgloszeniaController::class, 'zapiszZgloszenie'])->name('zapisz.zgloszenie');

Route::get('/admin', [ZgloszeniaController::class, 'index']);