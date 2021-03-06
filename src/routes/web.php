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

Route::controller(UsuarioController::class)->group(
    function () {
        Route::get('/usuario', 'index');
        Route::get('/usuario/{id}', 'show');
    }
);

Route::controller(VueloController::class)->group(
    function () {
        Route::get('/vuelo', 'index');
        Route::get('/vuelo/{id}', 'show');
    }
);
