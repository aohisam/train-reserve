<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchTrainController;
use App\Http\Controllers\TrainResultController;
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
Route::post('users/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('users/register', RegisterController::class);

Route::get('users/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/train', SearchTrainController::class);

Route::post('train/result', [TrainResultController::class, 'trainResult'])->name('trainResult');
Route::post('train/result-fare', [TrainResultController::class, 'trainResultFare'])->name('trainResultFare');

Route::post('train/seating-chart');