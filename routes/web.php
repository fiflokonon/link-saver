<?php

use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\GenericCategoryController;
use App\Http\Controllers\Dashboard\GenericLinkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test-payment', [\App\Http\Controllers\Controller::class, 'sendPaiement']);

Route::group(['middleware' => ['auth']] , function() {
        Route::get('countries', [CountryController::class, 'index'])->name('countries');
        Route::resource('generic-categories', GenericCategoryController::class);
        Route::resource('generic-links', GenericLinkController::class);
    }
);
