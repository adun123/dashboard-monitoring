<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\SensorController;

Route::middleware(['log:requests'])->post('/sensors', [SensorController::class, 'store']);


Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/sensor-data', [SensorController::class, 'getSensorData']);
