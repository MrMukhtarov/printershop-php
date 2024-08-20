<?php

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get("/", [HomeController::class, 'index'])->name('home');
    Route::get("/register", [UserController::class, 'register_view'])->name('client.register');
    Route::post("/sign-up", [UserController::class, 'register'])->name('client.signup');
    Route::get("/login", [UserController::class, 'login_view'])->name('client.login');
    Route::post("/sign-in", [UserController::class, 'login'])->name('client.signin');
    Route::get("/log-out", [UserController::class, 'logout'])->name('client.logout');

})->name('front.');
