<?php

use App\Http\Controllers\FaleConoscoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProfileController;
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
// FALLBACK ROUTE
Route::fallback(function () {
    return to_route('index');
});

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/fale-conosco', [FaleConoscoController::class, 'index'])->name('fale-conosco.index');

Route::get('/pesquisa', function () {
    return view('pesquisa/index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/meus-pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
    Route::get('/pedido', [PedidoController::class, 'show'])->name('pedidos.show');
    Route::get('/carrinho', function () {
        return view('carrinho/index');
    });
    Route::get('/carrinho/endereco', function () {
        return view('carrinho/endereco');
    });
    Route::get('/carrinho/finalizar', function () {
        return view('carrinho/create');
    });
});

require __DIR__ . '/auth.php';
