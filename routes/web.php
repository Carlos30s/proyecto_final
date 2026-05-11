<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DocsEmpleadoController;
use Illuminate\Support\Facades\Route;

    Route::view('/', 'welcome')->name('home');

    Route::middleware(['auth', 'verified'])->group(function () {

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::resource('empleados', EmpleadoController::class);

    Route::post('/empleados/{empleado}/archivos', [DocsEmpleadoController::class, 'store'])
        ->name('archivos.store');
});

require __DIR__.'/settings.php';
