<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;

// Ruta principal opcional
Route::get('/', function () {
    return redirect()->route('proveedores.index');
});

// Genera todas las rutas REST: index, create, store, show, edit, update, destroy
Route::resource('proveedores', ProveedorController::class);
