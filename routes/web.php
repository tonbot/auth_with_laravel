<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


//login group route
Route::prefix('/login')->group(function () {
    Route::get('/',  [LoginController::class, 'index'])->name("login.index");
    Route::post('/auth',  [LoginController::class, 'auth']);
});

//register group route
Route::prefix('/register')->group(function () {
    Route::get('/',  [RegisterController::class, 'index'])->name("register.index");
    Route::post('/user',  [RegisterController::class, 'create_user']);
});

//dashboard group route
Route::prefix('/dashboard')->group(function () {
    Route::get('/',  [DashboardController::class, 'index'])->name("dashboard.index")->middleware("checkSession");
    Route::post('/logout',  [DashboardController::class, 'logout'])->name("dashboard.logout");

});




