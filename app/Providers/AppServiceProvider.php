<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Categoria;
use App\Models\Produto;

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



        $produtosMaisVendidos = Produto::withCount("PedidosItem")->orderBy('pedidos_item_count', 'desc')->having('pedidos_item_count', '>', '0')->get();

        View::share([
            'categorias' => $categorias,
            'carouselCategorias' => $categorias->chunk(7),
            'produtosMaisVendidos' => $produtosMaisVendidos,
        ]);
    }
}
