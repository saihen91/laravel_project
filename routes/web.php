<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


// user related route
Route::get('/', [UserController::class, 'index']);
Route::get('/daftar-pengguna', [UserController::class, 'daftar_pengguna']);
Route::get('/daftar-bahagian', [UserController::class, 'daftar_bahagian']);
Route::post('/add-pengguna', [UserController::class, 'add_pengguna']);