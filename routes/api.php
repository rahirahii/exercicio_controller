<?php

use App\Http\Controllers\CarrosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/carros/1',[CarrosController::class, 'store']);

Route::get('/carros/2',[CarrosController::class, 'index']);

Route::put('/carros/3',[CarrosController::class, 'update']);