<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Rota página principal
Route::get('/', [HomeController::class, 'index']);

Route::get('/produtos/{id}', [ProdutoController::class], 'show');
