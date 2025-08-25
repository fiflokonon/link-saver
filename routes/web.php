<?php

use App\Http\Controllers\Dashboard\CountryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']] ,
    function() {
        Route::get('countries', [CountryController::class, 'index'])->name('countries');
    }
);
