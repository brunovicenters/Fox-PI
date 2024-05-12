<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MinhaContaController;

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
// FALLBACK ROUTE
Route::fallback(function () {
    return to_route('home');
});

Route::get('/home', [HomeController::class, 'MostrarProduto'])->name('home');
Route::get('/home/produto/{produto}', [HomeController::class, 'index'])->name('page.produto');

Route::get('/fale-conosco', function () {
    return view('fale-conosco/index');
});

Route::get('/pesquisa', [PesquisaController::class, 'index'])->name('pesquisa.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/meus-pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
    Route::get('/pedido', [PedidoController::class, 'show'])->name('pedidos.show');
    Route::get('/carrinho', function () {
        return view('carrinho/index');
    });
    Route::post('/produto/carrinho', [ProdutoController::class, 'addToCarrinho'])->name('produto.carrinho');
});

require __DIR__ . '/auth.php';


Route::get('/produto', function () {
    return view('produto/produto');
});




Route::get('/minha-conta', [MinhaContaController::class, 'index'])->name('page.minha-conta');
Route::put('/minha-conta', [MinhaContaController::class, 'update'])->name('update.minha-conta');

