<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', function(){
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'store']);

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/dashboard', [ServiceController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
