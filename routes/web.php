<?php

use App\Http\Controllers\front\CategoryController;
use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get("/", [HomeController::class, 'index'])->name('home');

})->name('front.');
