<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenjadwalanController;
use App\Models\Penjadwalan;
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

Route::get('/penjadwalan',[PenjadwalanController::class,'index']);
Route::get('/penjadwalan/create',[PenjadwalanController::class,'create']);
Route::get('/penjadwalan/store',[PenjadwalanController::class,'store']);
Route::get('penjadwalan/{id}/edit',[PenjadwalanController::class,'edit']);
Route::post('penjadwalan/{id}/update',[PenjadwalanController::class,'update']);
Route::get('penjadwalan/{id}/delete',[PenjadwalanController::class,'delete']);

Route::get('/login',[AuthController::class,'login']);
Route::post('/postlogin',[AuthController::class,'authenticate'] );
Route::get('/logout',[AuthController::class,'logout'] );

