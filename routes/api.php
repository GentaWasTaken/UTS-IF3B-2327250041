<?php

use App\Http\Controllers\DataKehadiranKaryawanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/attendance', [DataKehadiranKaryawanController::class, 'index']);
Route::post('/attendance', [DataKehadiranKaryawanController::class, 'store']);