<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', [ProdutoController::class, 'index']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::get('produtos/create', [ProdutoController::class, 'create']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::post('produtos', [ProdutoController::class, 'store']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::get('produtos/{id}/edit', [ProdutoController::class, 'edit']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::put('produtos/{id}', [ProdutoController::class, 'update']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::delete('produtos/{id}', [ProdutoController::class, 'destroy']->middleware(['auth', 'verified'])->name('index-pokemon)'));

Route::get('categorias', [CategoriaController::class, 'index']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::get('categorias/create', [CategoriaController::class, 'create']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::post('categorias', [CategoriaController::class, 'store']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::get('categorias/{id}/edit', [CategoriaController::class, 'edit']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::put('categorias/{id}', [CategoriaController::class, 'update']->middleware(['auth', 'verified'])->name('index-pokemon)'));
Route::delete('categorias/{id}', [CategoriaController::class, 'destroy']->middleware(['auth', 'verified'])->name('index-pokemon)'));

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
