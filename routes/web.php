<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZgloszeniaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ChuckController;


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

Route::get('admin', ['middleware'=>'auth', function () {
    return view('admin');
}]);

Route::get('user',['middleware'=>'auth', function () {
    return view('user');
}]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/zapisz-zgloszenie', [ZgloszeniaController::class, 'zapiszZgloszenie'])->name('zapisz.zgloszenie');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

//Route::get('/', [ChuckController::class, 'getRandomJoke'])->name('chuck.getRadnomJoke');

