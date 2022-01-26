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


Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/postlogin',[AuthController::class,'authenticate'] )->name('postlogin');
Route::get('/logout',[AuthController::class,'logout'] );


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:6']], function () {
        Route::get('/penjadwalan',[PenjadwalanController::class,'index']);
        Route::get('/penjadwalan/create',[PenjadwalanController::class,'create']);
        Route::get('/penjadwalan/store',[PenjadwalanController::class,'store']);
        Route::get('penjadwalan/{id}/edit',[PenjadwalanController::class,'edit']);
        Route::post('penjadwalan/{id}/update',[PenjadwalanController::class,'update']);
        Route::get('penjadwalan/{id}/delete',[PenjadwalanController::class,'delete']);

        
 
    });
    Route::group(['middleware' => ['cek_login:4']], function () {
        Route::get('/penjadwalanMahasiswa',[PenjadwalanController::class,'jadwalMahasiswa']);
    });

    Route::group(['middleware' => ['cek_login:5']], function () {
        Route::get('/penjadwalanDosen',[PenjadwalanController::class,'jadwalDosen']);
    });
});



// Route::group(['middleware' => ['auth','cek_login:4']], function(){
//     Route::get('/penjadwalan/mahasiswa',[PenjadwalanController::class,'jadwalMahasiswa']);
    
// });

