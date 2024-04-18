<x-layout>
    <x-navbar />
    <main class="max-w-5xl mx-auto mt-10 mb-3">
        <section class="max-w-8xl flex justify-center items-center flex-col">
            <div class="w-5/6 mt-10 flex justify-center items-center">
                <img src="images/Fox-Banner.png" alt="Banner do site">
            </div>

            <div class="w-5/6 mt-10 flex space-x-24 mt-14 justify-center items-center">
                <div class="border-4 border-solid border rounded-3xl border-verde w-48 h-24 flex justify-center items-center flex-col fundo-laranja hanalei  text-vermelho text-2xl">
                    <p>Sistema </p>
                    <p>de</p>
                    <p>Trocas</p>
                </div>
                <div class="border-4 border-solid border rounded-3xl border-verde w-48 h-24 flex justify-center items-center flex-col fundo-laranja hanalei  text-vermelho text-2xl">
                    <p>Variedade</p>
                    <p>de</p>
                    <p>Frete</p>
                </div>
                <div class="border-4 border-solid border rounded-3xl border-verde w-48 h-24 flex justify-center items-center flex-col fundo-laranja hanalei  text-vermelho text-2xl">
                    <p>6x</p>
                    <p>Sem Juros</p>
                </div>
                <div class="border-4 border-solid border rounded-3xl border-verde w-48 h-24 flex justify-center items-center flex-col fundo-laranja hanalei  text-vermelho text-2xl">
                    <p>Diversas</p>
                    <p>Promoções</p>
                </div>
            </div>

        </section>




        <section class="max-w-8xl flex justify-center items-center">
            <div class="w-5/6 mt-10 flex flex-col justify-center items-center gap-8">
                <h1 class="text-6xl hanalei text-roxo text-left">Mais Vendidos</h1>
                <div class="flex items-center justify-center gap-7">
                @foreach($produtos as $produto)
                    <div class="flex flex-col h-64 w-40 border-4 border-solid border rounded-3xl color-border">
                        <div class="h-1/2 bg-white rounded-t-3xl flex justify-center items-center">
                            @if($produto->Imagem->isNotEmpty())
                            <img src="{{$produto->Imagem->first()->IMAGEM_URL}}" alt="imagem dos produtos" class="w-28 h-28 ">
                            @else
                            <img src="..." alt="Imagem Padrão">
                            @endif
                        </div>
                        <div class="h-1/2 bg-color-amarelo rounded-b-3xl flex flex-col justify-center items-center">
                            <h1 class="text-xl hanalei text-laranja-claro">{{$produto->PRODUTO_NOME}}</h1>
                            <p>{{$produto->Categoria->CATEGORIA_NOME}}</p>
                            <p>R$ {{$produto->PRODUTO_PRECO}}</p>
                            <p>R$ 00,00</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>

        <section class="max-w-8xl flex justify-center items-center mt-10">
            <div class="w-5/6 flex flex-col justify-center items-center gap-8">
                <h1 class="text-6xl hanalei text-roxo text-left">Promoção</h1>
                <div class="flex items-center justify-center gap-7">
                    <div class="flex flex-col h-52 w-40 border-4 border-solid rounded-3xl color-border">
                        <div class="h-1/2 bg-white rounded-t-3xl"></div>
                        <div class="h-1/2 bg-color-amarelo rounded-b-3xl flex flex-col justify-center items-center">
                            <h1 class="text-xl hanalei text-laranja-claro">Nome</h1>
                            <p>Categoria</p>
                            <p>R$ 00,00</p>
                            <p>R$ 00,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <main>
</x-layout>