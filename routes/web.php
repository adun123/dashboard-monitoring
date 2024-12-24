<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard-sensor2', function () {
    return view('dashboard-sensor2');
})->middleware(['auth', 'verified'])->name('dashboard-sensor2');

Route::get('/dashboard-sensor3', function () {
    return view('dashboard-sensor3');
})->middleware(['auth', 'verified'])->name('dashboard-sensor3');


Route::get('/health-sensor', function () {
    return view('health-sensor');
})->middleware(['auth', 'verified'])->name('health-sensor');


Route::get('/location', function () {
    return view('location');
})->middleware(['auth', 'verified'])->name('location');

Route::get('/location-sensor2', function () {
    return view('location-sensor2');
})->middleware(['auth', 'verified'])->name('location-sensor2');


Route::get('/location-sensor3', function () {
    return view('location-sensor3');
})->middleware(['auth', 'verified'])->name('location-sensor3');

//DETAIL SENSORS 1
Route::get('/detail-sensordo', function () {
    return view('detail-grafik.detail-sensordo');
})->middleware(['auth', 'verified'])->name('/detail-sensordo');

Route::get('/detail-sensorpH', function () {
    return view('detail-grafik.detail-sensorpH');
})->middleware(['auth', 'verified'])->name('/detail-sensorpH');

Route::get('/detail-sensorkedalaman', function () {
    return view('detail-grafik.detail-sensorkedalaman');
})->middleware(['auth', 'verified'])->name('/detail-sensorkedalaman');

Route::get('/detail-sensorpermukaan', function () {
    return view('detail-grafik.detail-sensorpermukaan');
})->middleware(['auth', 'verified'])->name('/detail-sensorpermukaan');


Route::get('/sensor-create', function () {
    return view('sensor-create');
})->middleware(['auth', 'verified'])->name('sensor-create');



Route::get('/setting', function () {
    return view('setting');
})->middleware(['auth', 'verified'])->name('setting');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
