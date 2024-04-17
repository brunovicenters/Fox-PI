<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entrar', function () {
    return view('auth.login');
})->name('sign.index');

Route::get('/fale-conosco', function () {
    return view('fale-conosco/index');
});

Route::get('/pesquisa', function () {
    return view('search/index');
});

Route::get('/carrinho', function () {
    return view('carrinho/index');
});

Route::get('/meus-pedidos', function () {
    return view('pedidos/index');
})->name('pedidos.index');

Route::get('/pedido', function () {
    return view('pedidos/show');
})->name('pedidos.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


