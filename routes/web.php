<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\WeeklyAppointmentController;
use App\Http\Controllers\CollectorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;


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
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest', 'PreventBackHistory'])->group(function(){
        Route::view('/login', 'dashboard.user.auth.login')->name('login');
        Route::get('/register', [RegisterController::class, 'index'])->name('register');
        Route::post('/register', [RegisterController::class, 'storeUser'])->name('create');
        Route::post('/login', [LoginController::class, 'storeUser']);
    });
    Route::middleware(['auth', 'PreventBackHistory'])->group(function(){
        Route::get('/home', [DashboardController::class, 'index'])->name('home');
        Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointments');
        Route::post('/appointment', [AppointmentController::class, 'store']);
        Route::get('/weeklyappointment', [WeeklyAppointmentController::class, 'index'])->name('weeklyappointments');
        Route::post('/weeklyappointment', [WeeklyAppointmentController::class, 'store']);
        Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
        Route::post('/report', [ReportController::class, 'store'])->name('report');
        Route::get('/profile', [UserController::class, 'index'])->name('profile');
        Route::post('/profile', [UserController::class, 'update']);
    });
});

Route::prefix('collector')->name('collector.')->group(function(){

    Route::middleware(['guest:collector', 'PreventBackHistory'])->group(function(){
        Route::view('/login', 'dashboard.collector.auth.login')->name('login');
        Route::get('/register', [RegisterController::class, 'Cindex'])->name('register');
        Route::post('/register', [RegisterController::class, 'storeCollector'])->name('create');
        Route::post('/login', [LoginController::class, 'storeCollector']);

    });

    Route::middleware(['auth:collector', 'PreventBackHistory'])->group(function(){
        Route::get('/home', [CollectorController::class, 'index'])->name('home');
        Route::post('/logout', [LogoutController::class, 'storeCollector'])->name('logout');
        Route::get('image/{filename}', [CollectorController::class, 'displayImages'])->name('image.displayImage');
        Route::get('/allWeekly', [CollectorController::class, 'allWeekly'])->name('allWeekly');
        Route::get('/alloneTime', [CollectorController::class, 'allOne'])->name('allOne');
        Route::get('/profile', [CollectorController::class, 'profile'])->name('profile');
        Route::post('/profile', [CollectorController::class, 'collectAreas']);
    });
});
