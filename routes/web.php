<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/home', [ChatController::class, 'index'])
    ->middleware('auth')->name('home');
Route::get('/messages', [ChatController::class, 'messages']);
Route::post('/send', [ChatController::class, 'send']);


Route::get('register', [RegisterController::class, 'index'])
    ->middleware('guest')
    ->name('register');
Route::post('register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('login', [LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('login', [LoginController::class, 'store'])
    ->name('login.store');

Route::get('login/logout', [LoginController::class, 'logout'])
    ->name('login.logout');



