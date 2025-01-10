<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\LinkController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('/api/profile', [AuthController::class, 'updateProfile'])->middleware('auth:sanctum');
Route::post('/api/profile-photo', [AuthController::class, 'updateProfilePhoto'])->middleware('auth:sanctum');

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

    Route::post('/tags', [TagController::class, 'store']);
    Route::put('/tags/{id}', [TagController::class, 'update']);
    Route::delete('/tags/{id}', [TagController::class, 'destroy']);
    Route::get('/tags/{id}/links', [TagController::class, 'links_by_tag']);
    Route::get('/tags', [TagController::class, 'index']);
});


