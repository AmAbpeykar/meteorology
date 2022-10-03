<?php

use App\Http\Controllers\API\ResultController;
use App\Http\Controllers\API\WeatherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/' , [HomeController::class , 'home'])->name('home');

Route::post('/city' , [WeatherController::class , 'getStatusByCity'])->name('City-Status');

Route::post('/coordinates' , [WeatherController::class , 'getStatusByCoord'])->name('Crood-Status');

Route::get('/login' , [AuthController::class , 'loginPage'])->name('login-page');

Route::get('/register' , [AuthController::class , 'registerPage'])->name('register-page');

Route::post('/register' , [AuthController::class , 'register'])->name('register');

Route::post('/login' , [AuthController::class , 'login'])->name('login');

