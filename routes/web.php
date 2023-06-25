<?php

use App\Http\Controllers\RouteController;
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

Route::get('/', function () {
    return view('welcome');
});

//運行情報作成用の下記コードは、運行情報作成に伴い下記コメントアウト
// Route::get('/add-routes', [RouteController::class, 'addRoutes']);


