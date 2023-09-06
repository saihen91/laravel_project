<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\AnggotaController;

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

// Route::get('/', function () {
//     return view('index');
// });


// user route
Route::get('/', [UserController::class, 'index']);
Route::get('/daftar-pengguna', [UserController::class, 'daftar_pengguna']);
Route::get('/daftar-bahagian', [UserController::class, 'daftar_bahagian']);
Route::post('/add-pengguna', [UserController::class, 'add_pengguna']);

// keanggotaan route
Route::get('/daftar-list', [AnggotaController::class, 'daftar_list']);
Route::get('/daftar-mohon', [AnggotaController::class, 'daftar_mohon']);

// code_config route
Route::get('/majikan-list', [ConfigController::class, 'majikan_list']);
Route::post('/tambah-majikan', [ConfigController::class, 'tambah_majikan']);