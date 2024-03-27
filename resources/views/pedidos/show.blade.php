<x-layout>
    {{-- APAGAR DEPOIS --}}
    @php
        $status = 2
    @endphp
    <x-navbar.navbar />

    <main class="max-w-5xl mx-auto mt-10 mb-3 flex gap-16">
        {{-- Pedido --}}
        <div class="w-3/4">
            {{-- Cabeçalho --}}
            <div class="flex justify-between" >
                <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-laranja-claro">Pedido - Nº031</h1>
                <div class="flex flex-col relative self-end">
                    <p>
                        <span class="absolute top-2 -left-5">
                            <svg class="inline-block w-6 h-6">
                                <circle cx="8" cy="8" r="8" fill="{{ $status == 1 ? '#EA760F' : ($status == 2 ? '#283618' : ($status == 3 ? '#B20D30' : ''))  }}"/>
                            </svg>
                        </span>
                        <span class="{{ $status == 1 ? 'text-laranja-claro' : ($status == 2 ? 'text-verde' : ($status == 3 ? 'text-vermelho' : ''))  }} hanalei text-3xl">{{ $status == 1 ? 'A caminho' : ($status == 2 ? 'Entregue' : ($status == 3 ? 'Cancelado' : ''))  }}</span>
                    </p>
                    <p class="text-verde text-xs">Código de rastreio:</p>
                    <p class="text-verde text-xs">12KHG65</p>
                </div>
            </div>

            {{-- Valor e data --}}
            <div class="mb-3">
                <p class="text-vermelho poppins text-4xl font-semibold">R$ 1.000,00</p>
                <p class="text-verde">16/02/2024</p>
            </div>

            {{-- Produtos --}}
            <div class="flex flex-col space-y-3">
                @for ($i = 1; $i <= 2; $i++)
                    <x-card-horizontal>
                        <div class="pl-2">
                            <img class="w-24 h-32" src="https://img.freepik.com/fotos-gratis/fundo_53876-32170.jpg?w=740&t=st=1710889922~exp=1710890522~hmac=7a5a91fb224ef325005348cdd768218cbc50b49696db300ff345702f6d7b06d6" alt="">
                        </div>
                        <div class="w-3/4 px-3">
                            <h2 class="hanalei text-laranja-escuro text-2xl">Nome</h2>
                            <p class="text-verde uppercase text-sm">16/02/2024</p>
                            <p class="text-vermelho poppins text-xl font-semibold">R$ 000,00</p>
                            <p class="truncate max-w-xs">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil veritatis odio quasi praesentium! Voluptates distinctio veritatis nesciunt consequatur fugiat molestiae, fuga blanditiis vel hic quis commodi doloribus. Nulla, culpa necessitatibus!
                            </p>
                        </div>
                        <div class="px-3">
                            <span class="text-azul text-3xl">{{ $i }}x</span>
                        </div>
                    </x-card-horizontal>
                @endfor
            </div>
        </div>

        {{-- Fale Conosco --}}
        <div class="w-1/4 flex flex-col items-center">
            <p class="poppins text-vermelho text-xs">Enfrentando algum problema?</p>
            <x-button-amarelo href="fale-conosco" text="Fale conosco" />
        </div>
    </main>
</x-layout>
