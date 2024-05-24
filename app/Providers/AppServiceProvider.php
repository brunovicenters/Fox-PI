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
        $categorias = Categoria::orderBy('CATEGORIA_NOME')->get()->where('CATEGORIA_ATIVO', '=', 1);



        $produtosMaisVendidos = Produto::withCount("PedidosItem")
            ->orderBy('pedidos_item_count', 'desc')
            ->having('pedidos_item_count', '>', '0')
            ->where('PRODUTO_ATIVO', '=', 1)
            ->join('CATEGORIA', 'PRODUTO.CATEGORIA_ID', '=', 'CATEGORIA.CATEGORIA_ID')
            ->where('CATEGORIA_ATIVO', '=', 1)
            ->get();

        View::share([
            'categorias' => $categorias,
            'carouselCategorias' => $categorias->chunk(7),
            'produtosMaisVendidos' => $produtosMaisVendidos,
        ]);
    }
}
