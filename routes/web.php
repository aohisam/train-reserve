<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {
    return view('users.index');
});
Route::post('/users', [RegisterController::class, 'store']);
Route::post('/users', [LoginController::class, 'store']);


Route::resource('users/login', LoginController::class);
Route::resource('users/register', RegisterController::class);
