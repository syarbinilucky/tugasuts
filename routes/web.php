<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\JadwalkuliahController;

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
    return view('login');
});

Auth::routes();
Route::group(['middleware' => ['auth', 'hakakses:admin']], function(){
    Route::get('/tambahdata', [JadwalkuliahController::class, 'tambahdata'])->name('tambahdata');
    Route::post('/createdata', [JadwalkuliahController::class, 'createdata'])->name('createdata');
    Route::get('/tampilkandata/{id}', [JadwalkuliahController::class, 'tampilkandata'])->name('tampilkandata');
    Route::post('/updatedata/{id}', [JadwalkuliahController::class, 'updatedata'])->name('updatedata');
    Route::get('/delete/{id}', [JadwalkuliahController::class, 'delete'])->name('delete');
    Route::get('/register', [loginController::class, 'register'])->name('register');
    Route::post('/registeruser', [loginController::class, 'registeruser'])->name('registeruser');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/daftarmatkul', [JadwalkuliahController::class, 'daftarmatkul'])->name('daftarmatkul');
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/loginuser', [loginController::class, 'loginuser'])->name('loginuser');
Route::get('/logoutuser', [loginController::class, 'logoutuser'])->name('logoutuser');





