<?php

use App\Http\Controllers\FaleConoscoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\EnderecoController;
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

Route::get('/pesquisa', [PesquisaController::class, 'index'])->name('pesquisa.index');

Route::get('/produto', function () {
    return view('produto/produto');
});

Route::middleware('auth')->group(function () {
    Route::get('/meus-pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
    Route::get('/pedido', [PedidoController::class, 'show'])->name('pedidos.show');

    Route::get('/fale-conosco', [FaleConoscoController::class, 'create'])->name('fale-conosco.create');
    Route::post('/fale-conosco', [FaleConoscoController::class, 'store'])->name('fale-conosco.store');

    Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');
    Route::get('/carrinho/finalizar', [CarrinhoController::class, 'create'])->name('carrinho.create');

    Route::get('/carrinho/endereco', [CarrinhoController::class, 'endereco'])->name('carrinho.endereco');
    Route::post('/carrinho/endereco', [CarrinhoController::class, 'addEndereco'])->name('carrinho.addEndereco');

    Route::put('/carrinho/{produto}', [CarrinhoController::class, 'update'])->name('carrinho.update');

    Route::post('/produto/carrinho', [ProdutoController::class, 'addToCarrinho'])->name('produto.carrinho');

    Route::get('/minha-conta', [MinhaContaController::class, 'index'])->name('page.minha-conta');
    Route::put('/minha-conta', [MinhaContaController::class, 'update'])->name('update.minha-conta');

    // Depending on the screen that is doing the request, it will show different things -
    // carrinho - show existing enderecos
    // minha-conta - only the form for a new endereco
    Route::get('/endereco/criar/{screen}', [EnderecoController::class, 'create'])->name('endereco.create');
    Route::post('/endereco/{screen}', [EnderecoController::class, 'store'])->name('endereco.store');
    Route::get('/endereco/{endereco}', [EnderecoController::class, 'edit'])->name('endereco.edit');
    Route::put('/endereco/{endereco}', [EnderecoController::class, 'update'])->name('endereco.update');
    Route::delete('/endereco/{endereco}', [EnderecoController::class, 'destroy'])->name('endereco.destroy');
});

require __DIR__ . '/auth.php';
