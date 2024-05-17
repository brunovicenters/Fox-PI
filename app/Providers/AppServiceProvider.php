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
        $produtosSemelhantes = Produto::with('Imagem', 'Categoria')->get();
        $produtosPromocao = Produto::with('Imagem', 'Categoria')->get();


        View::share([
            'categorias' => $categorias,
            'carouselCategorias' => $categorias->chunk(7),
            'carouselProdutosSemelhantes' => $produtosSemelhantes->chunk(10),
            'carouselprodutosPromocao' => $produtosPromocao->chunk(4),
        ]);
    }
}
