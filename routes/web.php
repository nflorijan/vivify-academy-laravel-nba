<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [TeamsController::class, 'index']);

Route::get('/teams/{team}', [TeamsController::class, 'show'])->name('team');

Route::get('/players/{player}', [PlayersController::class, 'show'])->name('player');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'getRegisterForm']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'getLoginForm']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware(('auth'));