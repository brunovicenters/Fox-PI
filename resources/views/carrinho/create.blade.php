@section('script')
    <script src="\scripts\layout\finalizar.js" defer></script>
@endsection

<x-layout>
    <div class="flex w-full">
        <a href="{{ route('endereco.create', 'carrinho') }}" class="bg-btn-sign p-1 rounded-lg mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white"
                class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </a>
    </div>

    <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-azul">Finalizar Compra</h1>
    <div class="flex space-x-5">
        <form action="{{ route('carrinho.store') }}" method="POST" class="flex flex-col space-y-4 w-9/12"
            id="form-finalizar">
            <input type="hidden" name="endereco" value="{{ $endereco->ENDERECO_ID }}">
            @csrf
            {{-- Revisar Itens --}}
            <x-card-horizontal>
                <div class="w-3/5 px-3">
                    <h2 class="hanalei text-laranja-escuro text-4xl">Revisar Itens</h2>
                    <div id="itens-resumo" class="max-w-xs">
                        @foreach ($itens as $item)
                            <p class="truncate max-w-full text-xs">
                                {{ $item->Produto->PRODUTO_NOME }} - R$ {{ number_format($item->Produto->PRODUTO_PRECO-$item->Produto->PRODUTO_DESCONTO, 2, ',', '.') }} -
                                {{ $item->Produto->PRODUTO_DESC }}
                            </p>
                        @endforeach
                    </div>
                </div>
                <div class="w-2/5 flex justify-between items-center">
                    <div class="px-3 text-vermelho text-3xl">
                        <p>R$ <span id="precoTotal">{{ number_format($valorTotal, 2, ',', '.') }}</span></p>
                    </div>
                    <div id="mais-itens" class="pointer p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="#43ADDA" id="itens-down-arrow" class="w-10 h-10 -rotate-90">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="#43ADDA" id="itens-up-arrow" class="w-10 h-10 rotate-90 hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </div>
                </div>


                <div id="itens-desc" class="hidden w-full">

                    <div class="my-3 w-full h-1 bg-verde"></div>

                    <div class="flex flex-col space-y-5 mb-2">
                        @foreach ($itens as $item)
                            <div class="flex items-center ">
                                <div class="pl-2 w-2/12">
                                    <img class="w-24 h-32" src="{{ $item->Produto->Imagem[0]->IMAGEM_URL }}"
                                        alt="">
                                </div>
                                <div class="w-6/12">
                                    <h2 class="hanalei text-laranja-escuro text-2xl">{{ $item->Produto->PRODUTO_NOME }}
                                    </h2>
                                    <p class="text-verde uppercase text-sm">
                                        {{ $item->Produto->Categoria->CATEGORIA_NOME }}</p>
                                    <p class="text-vermelho poppins text-xl font-semibold">R$
                                        {{ number_format($item->Produto->PRODUTO_PRECO-$item->Produto->PRODUTO_DESCONTO, 2, ',', '.') }}</p>
                                    <p class="truncate max-w-xs">
                                        {{ $item->Produto->PRODUTO_DESC }}
                                    </p>
                                </div>
                                <div class="ml-8 w-3/12 flex items-center justify-evenly space-x-3">
                                    <span class="text-azul text-3xl">{{ $item->ITEM_QTD }}x</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </x-card-horizontal>

            {{-- Frete --}}
            <x-card-horizontal>
                <div class="w-3/5 px-3">
                    <h2 class="hanalei text-laranja-escuro text-4xl">Frete</h2>
                    <p class="truncate max-w-xs text-xs">

                        {{ ucfirst($endereco->ENDERECO_NOME) }}, {{ $endereco->ENDERECO_NUMERO }} -
                        {{ $endereco->ENDERECO_CEP }}
                        {{ $endereco->ENDERECO_COMPLEMENTO ? '- ' . $endereco->ENDERECO_COMPLEMENTO : '' }}


                    </p>
                    <p id="frete-resumo" class="truncate max-w-xs text-xs italic">
                        Escolha uma empresa
                    </p>
                </div>
                <div class="w-2/5 flex justify-between items-center">
                    <div class="px-3 text-vermelho text-3xl">
                        <p>R$ <span id="preco-frete">00,00</span></p>
                    </div>
                    <div id="mais-frete" class="pointer p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="#43ADDA" id="frete-down-arrow" class="w-10 h-10 -rotate-90">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="#43ADDA" id="frete-up-arrow" class="w-10 h-10 rotate-90 hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </div>
                </div>

                <div id="frete-desc" class="hidden w-full">

                    <div class="my-3 w-full h-1 bg-verde"></div>

                    <div class="flex flex-col space-y-5 mb-2">

                        {{-- Azul Entregas --}}
                        <div class="flex items-center justify-between">
                            <div class="w-10/12 flex items-center justify-between">
                                <div>
                                    <h2 class="hanalei text-laranja-escuro text-2xl">Azul Entregas</h2>
                                    <p class="truncate max-w-xs">
                                        Entrega de 2 a 5 dias
                                    </p>
                                </div>
                                <div class="px-3 text-vermelho text-3xl">
                                    <p>R$ <span id="azulFrete">{{ number_format(($valorTotal) *0.19, '2', ',', '.') }}</span></p>
                                </div>
                            </div>
                            <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                <input type="radio" required name="frete" class="w-5 h-5" value="azul"
                                    onclick="setFrete('azul', {{ $valorTotal *0.19 }})">
                            </div>
                        </div>

                        {{-- Viagens Express --}}
                        <div class="flex items-center justify-between">
                            <div class="w-10/12 flex items-center justify-between">
                                <div>
                                    <h2 class="hanalei text-laranja-escuro text-2xl">Viagens Express</h2>
                                    <p class="truncate max-w-xs">
                                        Entrega de 1 a 3 dias
                                    </p>
                                </div>
                                <div class="px-3 text-vermelho text-3xl">
                                    <p>R$ <span id="azulFrete">{{ number_format(($valorTotal) *0.27, '2', ',', '.') }}</span></p>
                                </div>
                            </div>
                            <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                <input type="radio" required name="frete" class="w-5 h-5" value="express"
                                    onclick="setFrete('express', {{$valorTotal*0.27}})">
                            </div>
                        </div>

                        {{-- Touro Ltda --}}
                        <div class="flex items-center justify-between">
                            <div class="w-10/12 flex items-center justify-between">
                                <div>
                                    <h2 class="hanalei text-laranja-escuro text-2xl">Touro Ltda</h2>
                                    <p class="truncate max-w-xs">
                                        Entrega de 4 a 8 dias
                                    </p>
                                </div>
                                <div class="px-3 text-vermelho text-3xl">
                                    <p>R$ <span id="azulFrete">{{ number_format(($valorTotal) *0.13, '2', ',', '.') }}</span></p>
                                </div>
                            </div>
                            <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                <input type="radio" required name="frete" class="w-5 h-5" value="touro"
                                    onclick="setFrete('touro', $valorTotal*0.13)">
                            </div>
                        </div>

                        {{-- Entregas Cometa --}}
                        <div class="flex items-center justify-between">
                            <div class="w-10/12 flex items-center justify-between">
                                <div>
                                    <h2 class="hanalei text-laranja-escuro text-2xl">Entregas Cometa</h2>
                                    <p class="truncate max-w-xs">
                                        Entrega de 7 a 13 dias
                                    </p>
                                </div>
                                <div class="px-3 text-vermelho text-3xl">
                                    <p>R$ <span id="azulFrete">{{ number_format(($valorTotal) *0.02, '2', ',', '.') }}</span></p>
                                </div>
                            </div>
                            <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                <input type="radio" required name="frete" class="w-5 h-5" value="azul"
                                    onclick="setFrete('cometa', {{$valorTotal*0.02}})">
                            </div>
                        </div>

                    </div>
                </div>


            </x-card-horizontal>

            {{-- Método de Pagamento --}}
            <x-card-horizontal>
                <div class="w-3/5 px-3">
                    <h2 class="hanalei text-laranja-escuro text-4xl">Método de pagamento</h2>
                    <p class="truncate max-w-xs text-xs">
                    <p id="pagamento-resumo" class="truncate max-w-xs text-xs italic">
                        Escolha um método
                    </p>
                </div>
                <div class="w-2/5 flex justify-end items-center">
                    <div id="mais-pagamento" class="pointer p-2 rounded-full hover:bg-slate-100 hover:bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="#43ADDA" id="pagamento-down-arrow" class="w-10 h-10 -rotate-90">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="#43ADDA" id="pagamento-up-arrow" class="w-10 h-10 rotate-90 hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </div>
                </div>

                <div id="pagamento-desc" class="hidden w-full">

                    <div class="my-3 w-full h-1 bg-verde"></div>

                    <div class="flex flex-col space-y-5 mb-2">

                        {{-- Pix --}}
                        <div class="flex items-center justify-between">
                            <div class="w-10/12 flex items-center">
                                <div>
                                    <h2 class="hanalei text-laranja-escuro text-2xl">Pix</h2>
                                    <p class="truncate max-w-xs">
                                        O QR Code aparecerá na tela e estará disponível por 30 minutos.
                                    </p>
                                </div>
                            </div>
                            <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                <input type="radio" required name="pagamento" class="w-5 h-5" value="pix"
                                    onclick="setPagamento('pix')">
                            </div>
                        </div>

                        {{-- Boleto --}}
                        <div class="flex items-center justify-between">
                            <div class="w-10/12 flex items-center">
                                <div>
                                    <h2 class="hanalei text-laranja-escuro text-2xl">Boleto</h2>
                                    <p class="truncate max-w-xs">
                                        O boleto aparecerá na tela e terá 3 dias para ser pago.
                                    </p>
                                </div>
                            </div>
                            <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                <input type="radio" required name="pagamento" class="w-5 h-5" value="boleto"
                                    onclick="setPagamento('boleto')">
                            </div>
                        </div>

                        {{-- Crédito --}}
                        <div class="flex items-center justify-between">
                            <div class="w-10/12 flex items-center">
                                <div>
                                    <h2 class="hanalei text-laranja-escuro text-2xl">Cŕedito</h2>
                                    <p class="truncate max-w-xs">
                                        Até 6x sem juros e 12x com juros.
                                    </p>
                                </div>
                            </div>
                            <div class="ml-8 w-2/12 flex items-center justify-evenly space-x-3">
                                <input type="radio" required name="pagamento" class="w-5 h-5" value="credito"
                                    onclick="setPagamento('credito')">
                            </div>
                        </div>

                    </div>
                </div>

            </x-card-horizontal>

            <button class="hidden" id="btn-interno-form"></button>
        </form>

        <div class="w-3/12 flex flex-col space-y-4">
            <x-card-horizontal>
                <div class="w-full flex flex-col justify-between items-center space-y-2 text-lg">
                    <div class="w-full flex justify-around items-center">
                        <span class="hanalei text-laranja-escuro text-xl">Itens</span>
                        <p class="poppins text-vermelho">
                            R$ <span id="itens-final">{{ number_format($valorTotal, 2, ',', '.') }}</span>
                        </p>
                    </div>
                    <div class="w-full flex justify-around items-center relative">
                        <span class="absolute poppins text-azul font-bold -left-3">+</span>
                        <span class="hanalei text-laranja-escuro text-xl">Frete</span>
                        <p class="poppins text-vermelho">
                            R$ <span id="frete-final">00,00</span>
                        </p>
                    </div>

                    <div class="w-full h-1 bg-verde"></div>

                    <div class="w-full flex justify-around items-center">
                        <span class="hanalei text-laranja-escuro text-2xl">Total</span>
                        <p class="poppins text-vermelho text-lg">
                            R$ <span id="total-final">00,00</span>
                        </p>
                    </div>

                </div>
            </x-card-horizontal>

            <x-form.button id="btn-finalizar">
                Comprar
            </x-form.button>
        </div>
    </div>

</x-layout>
