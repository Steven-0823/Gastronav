<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\CategoriaController;
use App\Http\Controllers\api\RestauranteController;
use App\Http\Controllers\api\SitiosTuristicosController;
use App\Http\Controllers\api\PqrController;
use App\Http\Controllers\api\RolesController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('/Categoria')->group(function() {
    Route::get('/', [CategoriaController::class, 'index'])->name('categoria');
    Route::post('/', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::get('/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
    Route::put('/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
    Route::delete('/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
    
});

Route::prefix('/Restaurante')->group(function() {
    Route::get('/', [RestauranteController::class, 'index'])->name('restaurante');
    Route::post('/', [RestauranteController::class, 'store'])->name('restaurante.store');
    Route::get('/{id}', [RestauranteController::class, 'show'])->name('restaurante.show');
    Route::put('/{id}', [RestauranteController::class, 'update'])->name('restaurante.update');
    Route::delete('/{id}', [RestauranteController::class, 'destroy'])->name('restaurante.destroy');
    Route::get('/PDF',[RestauranteController::class,'pdf'])->name('restaurante.pdf');
});

Route::prefix('/Lugares')->group(function() {
    Route::get('/', [SitiosTuristicosController::class, 'index'])->name('lugar');
    Route::post('/', [SitiosTuristicosController::class, 'store'])->name('lugar.store');
    Route::get('/{id}', [SitiosTuristicosController::class, 'show'])->name('lugar.show');
    Route::put('/{id}', [SitiosTuristicosController::class, 'update'])->name('lugar.update');
    Route::delete('/{id}', [SitiosTuristicosController::class, 'destroy'])->name('lugar.destroy');
});



Route::get('/PQR', [PqrController::class, 'index'])->name('pqr');

Route::get('/Roles', [RolesController::class, 'index'])->name('roles');

