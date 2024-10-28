<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// FAKULTAS
Route::get('/fakultas', [FakultasController::class, 'index']);
Route::post('/fakultas_add', [FakultasController::class, 'store']);
Route::patch('/fakultas_update/{id}', [FakultasController::class, 'update']);
Route::delete('/fakultas_delete/{id}', [FakultasController::class, 'destroy']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
