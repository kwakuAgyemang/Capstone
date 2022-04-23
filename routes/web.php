<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\WeeklyAppointmentController;
use App\Http\Controllers\CollectorController;
use App\Http\Controllers\User\UserController;

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

Route::get('/', function () {
    return view('index');
})->name('home');


Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest', 'PreventBackHistory'])->group(function(){
        Route::view('/login', 'dashboard.user.auth.login')->name('login');
        Route::get('/register', [RegisterController::class, 'index'])->name('register');
        Route::post('/register', [RegisterController::class, 'storeUser'])->name('create');
        Route::post('/login', [LoginController::class, 'storeUser']);
    });
    Route::middleware(['auth', 'PreventBackHistory'])->group(function(){
        Route::view('/home', 'dashboard.user.home')->name('home');
        Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointments');
        Route::post('/appointment', [AppointmentController::class, 'store']);
        Route::get('/weeklyappointment', [WeeklyAppointmentController::class, 'index'])->name('weeklyappointments');
        Route::post('/weeklyappointment', [WeeklyAppointmentController::class, 'store']);
        Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
    });
});

Route::prefix('collector')->name('collector.')->group(function(){

    Route::middleware(['guest:collector', 'PreventBackHistory'])->group(function(){
        Route::view('/login', 'dashboard.collector.auth.login')->name('login');
        Route::view('/register', 'dashboard.collector.auth.register')->name('register');
        Route::post('/register', [RegisterController::class, 'storeCollector'])->name('create');
        Route::post('/login', [LoginController::class, 'storeCollector']);

    });

    Route::middleware(['auth:collector', 'PreventBackHistory'])->group(function(){
        Route::get('/home', [CollectorController::class, 'index'])->name('home');
        Route::post('/logout', [LogoutController::class, 'storeCollector'])->name('logout');
        Route::get('image/{filename}', [CollectorController::class, 'displayImages'])->name('image.displayImage');
        Route::get('/allWeekly', [CollectorController::class, 'allWeekly'])->name('allWeekly');
        Route::get('/alloneTime', [CollectorController::class, 'allOne'])->name('allOne');
    });
});
