<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\SitiosTuristicosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PqrController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $lugares = DB::table('_sitio_turistico')
    ->join('categories', '_sitio_turistico.categoria_id', '=', 'categories.id')
    ->select('_sitio_turistico.*', 'categories.name as nombre_categoria')
    ->get();
    
    $restaurantes = DB::table('restaurantes')
    ->join('categories', 'restaurantes.categoria_id', '=', 'categories.id')
    ->select('restaurantes.*', 'categories.name as nombre_categoria')
    ->get();
    return view('welcome',['lugares' => $lugares, 'restaurantes'=>$restaurantes]);
});

Route::get('/dashboard', function () 
{
    $lugares = DB::table('_sitio_turistico')
    ->join('categories', '_sitio_turistico.categoria_id', '=', 'categories.id')
    ->select('_sitio_turistico.*', 'categories.name as nombre_categoria')
    ->get();
    
    $restaurantes = DB::table('restaurantes')
    ->join('categories', 'restaurantes.categoria_id', '=', 'categories.id')
    ->select('restaurantes.*', 'categories.name as nombre_categoria')
    ->get();

return view('dashboard', ['lugares' => $lugares, 'restaurantes'=>$restaurantes]);
    // return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/Categoria',[CategoriaController::class,'index'])->name('categoria.index');
    Route::post('/Categoria',[CategoriaController::class,'store'])->name('categoria.store');
    Route::get('/Categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
    Route::delete('/Categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
    Route::put('/Categoria/{categoria}',[CategoriaController::class,'update']) ->name('categoria.update');
    Route::get('/Categoria/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

    Route::get('/Restaurantes',[RestauranteController::class,'index'])->name('restaurante.index');
    Route::post('/Restaurantes',[RestauranteController::class,'store'])->name('restaurante.store');
    Route::get('/Restaurantes/create', [RestauranteController::class, 'create'])->name('restaurante.create');
    Route::delete('/Restaurantes/{restaurante}', [RestauranteController::class, 'destroy'])->name('restaurante.destroy');
    Route::put('/Restaurantes/{restaurante}',[RestauranteController::class,'update']) ->name('restaurante.update');
    Route::get('/Restaurantes/{restaurante}/edit', [RestauranteController::class, 'edit'])->name('restaurante.edit');
    Route::get('/Restaurantes/PDF',[RestauranteController::class,'pdf'])->name('restaurante.pdf');

    Route::get('/Lugares',[SitiosTuristicosController::class,'index'])->name('lugar.index');
    Route::post('/Lugares',[SitiosTuristicosController::class,'store'])->name('lugar.store');
    Route::get('/Lugares/create', [SitiosTuristicosController::class, 'create'])->name('lugar.create');
    Route::delete('/Lugares/{lugar}', [SitiosTuristicosController::class, 'destroy'])->name('lugar.destroy');
    Route::put('/Lugares/{lugar}', [SitiosTuristicosController::class,'update'])->name('lugar.update');
    Route::get('/Lugares/{lugar}/edit', [SitiosTuristicosController::class, 'edit'])->name('lugar.edit');
    Route::get('/Lugares/PDF',[SitiosTuristicosController::class,'pdf'])->name('lugar.pdf');


    Route::get('/Roles',[RolesController::class,'index'])->name('roles.index');
    Route::post('/Roles',[RolesController::class,'store'])->name('roles.store');
    Route::get('/Roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::delete('/Roles/{roles}', [RolesController::class, 'destroy'])->name('roles.destroy');
    Route::put('/Roles/{roles}', [RolesController::class,'update'])->name('roles.update');
    Route::get('/Roles/{roles}/edit', [RolesController::class, 'edit'])->name('roles.edit');

    Route::get('/PQR', [PqrController::class, 'index'])->name('pqr.index');
Route::post('/PQR', [PqrController::class, 'store'])->name('pqr.store');
Route::get('/PQR/create', [PqrController::class, 'create'])->name('pqr.create');
Route::delete('/PQR/{pqr}', [PqrController::class, 'destroy'])->name('pqr.destroy');
Route::put('/PQR/{pqr}', [PqrController::class, 'update'])->name('pqr.update');
Route::get('/PQR/{pqr}/edit', [PqrController::class, 'edit'])->name('pqr.edit');

});


require __DIR__.'/auth.php';
