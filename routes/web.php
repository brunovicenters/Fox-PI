<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/entrar', function () {
    return view('session/create');
})->name('sign.index');

Route::get('/fale-conosco', function () {
    return view('fale-conosco/fale-conosco');
});

Route::get('/meus-pedidos', function () {
    return view('pedidos/index');
})->name('pedidos.index');

Route::get('/pedido', function () {
    return view('pedidos/show');
})->name('pedidos.show');

Route::get('/home', [HomeController::class, 'MostrarProduto']);
