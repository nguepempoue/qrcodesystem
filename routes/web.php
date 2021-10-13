<?php

use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\TraderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/traders', TraderController::class);

Route::resource('/qrcodes', QrcodeController::class);

Route::resource('/user', UserController::class);

Route::get('/users', [UserController::class, 'index'])->name("user.get");

Route::get('viewmore/{id}', [QrcodeController::class, "viewmore"])->name("qrcodes.viewmore");



