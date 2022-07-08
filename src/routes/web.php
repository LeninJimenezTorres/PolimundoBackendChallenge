<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VueloController;

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

Route::get('/', HomeController::class);

Route::get('/usuario', [UsuarioController::class,'index']);
Route::get('/usuario/{id}', [UsuarioController::class,'show']);

Route::get('/vuelo', [VueloController::class,'index']);
Route::get('/vuelo/{id}', [VueloController::class,'show']);
