<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Rota página principal
Route::get('/', [HomeController::class, 'index']);
Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');
Route::get('/produtos/{id}', [ProdutoController::class, 'detalhes_do_produto'])->name('detalhes');
Route::get('/categoria/{id}', [ProdutoController::class, 'all_produtos_categoria'])->name('categorias');
