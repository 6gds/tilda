<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\TelController;
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

Route::get('/', [MainPageController::class, 'index'])
    ->name('main');

Route::post('/api/tel', [TelController::class, 'getTel'])
    ->name('getTel');
