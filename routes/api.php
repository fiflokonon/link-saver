<?php

use App\Http\Controllers\Api\AlertController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\GenericLinkController;
use App\Http\Controllers\Api\LinkController;
use App\Http\Controllers\Api\CountryController;
use App\Models\GenericCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get("/countries", [CountryController::class, 'index']);
Route::get("/countries/{id}/links", [GenericLinkController::class, 'links_by_country']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::post('/api/profile', [AuthController::class, 'updateProfile']);
    Route::post('/api/profile-photo', [AuthController::class, 'updateProfilePhoto']);

    Route::get('/links', [LinkController::class, 'user_links']);
    Route::get('/links/{id}', [LinkController::class, 'get_link']);
    Route::post('/links', [LinkController::class, 'store']);
    Route::put('/links/{id}', [LinkController::class, 'update']);
    Route::delete('/links/{id}', [LinkController::class, 'destroy']);

    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);
    Route::get('/categories/{id}/links', [CategoryController::class, 'links_by_category']);

    Route::get('/alerts', [AlertController::class, 'index']);
    Route::post('/alerts', [AlertController::class, 'store']);
    Route::put('/alerts/{id}', [AlertController::class, 'update']);
    Route::delete('/alerts/{id}', [AlertController::class, 'destroy']);
    Route::get('/alerts/{id}/change-status', [AlertController::class, 'change_status']);

});


