<?php

namespace App\Providers;

use App\Models\Carrinho;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Categoria;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $categorias = Categoria::orderBy('CATEGORIA_NOME')->get();
        $qtdProdutosCarrinho = Carrinho::count();

        View::share([
            'categorias' => $categorias,
            'carouselCategorias' => $categorias->chunk(7),
            'qtdProdutosCarrinho' => $qtdProdutosCarrinho,
        ]);
    }
}
