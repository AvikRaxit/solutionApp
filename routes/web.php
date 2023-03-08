<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'index'])->middleware('ifLoggedIn')->name('login');
Route::post('storelogin', [AuthController::class, 'successOrFailLogin'])->name('storeLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('forgot_password', [AuthController::class, 'forgotPassword'])->name('forgot_password');



/* Admin HR Dashboard Routes Start */
Route::prefix('dashboard')->middleware(['ifNotLoggedIn'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
/* Admin HR Dashboard Routes End */