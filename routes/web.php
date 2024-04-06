<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entrar', function () {
    return view('session/create');
})->name('sign.index');

Route::get('/fale-conosco', function () {
    return view('fale-conosco/index');
});

Route::get('/pesquisa', function () {
    return view('pesquisa/index');
});

Route::get('/carrinho', function () {
    return view('carrinho/index');
});

Route::get('/endereco', function () {
    return view('carrinho/endereco');
});

Route::get('carrinho/finalizar', function () {
    return view('carrinho/create');
});

Route::get('/meus-pedidos', function () {
    return view('pedidos/index');
})->name('pedidos.index');

Route::get('/pedido', function () {
    return view('pedidos/show');
})->name('pedidos.show');
