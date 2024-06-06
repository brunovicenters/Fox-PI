@section('script')
    <script src="\scripts\module\cep.js" defer></script>
    <script src="\scripts\module\select.js" defer></script>
@endsection

<x-layout>

    @if ($screen === 'minha-conta')
        <div class="flex">
            <a href="{{ route('page.minha-conta') }}" class="bg-btn-sign p-1 rounded-lg mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white"
                    class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </a>
        </div>
    @elseif ($screen === 'carrinho')
        <div class="flex w-full">
            <a href="{{ route('carrinho.index') }}" class="bg-btn-sign p-1 rounded-lg mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="white" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </a>
        </div>

        <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-azul">Endereço de Entrega</h1>

        @if ($enderecos && $enderecos->count())
            <x-card-horizontal>
                <form action="{{ route('endereco.store', 'carrinho') }}" method="POST"
                    class="w-full flex flex-col p-1 relative">
                    @csrf
                    <x-form.select label="Endereços salvos" name="ENDERECO_SALVO" :options="$enderecos" type="1" />
                    <div class="flex items-center justify-end mt-3">
                        <x-form.button>
                            Continuar
                        </x-form.button>
                    </div>
                </form>
            </x-card-horizontal>

            <h2 class="hanalei text-center text-azul drop-shadow-md uppercase my-2 text-4xl">OU</h2>
        @endif

    @endif

    <x-card-horizontal>
        <form action="{{ route('endereco.store', $screen) }}" method="POST" class="w-full flex flex-col p-1">
            @csrf

            <div class="flex justify-between">
                <div class="w-3/12">
                    <x-form.input-group label="CEP" name="ENDERECO_CEP" type="text" maxlength="9"
                        oninput="mascaraCEP(this)" placeholder="00000-000" title="Escreva somente números"
                        onblur="pesquisacep(this.value);" />
                </div>
                <div class="w-6/12">
                    <x-form.input-group label="Rua" name="ENDERECO_LOGRADOURO" placeholder="Rua Lugar Algum"
                        title="Escreva o nome da sua rua" />
                </div>
                <div class="w-2/12">
                    <x-form.input-group label="Número" name="ENDERECO_NUMERO" placeholder="Número" type="number"
                        min="1" title="Escreva o número do seu endereço" />
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-8/12">
                    <x-form.input-group label="Cidade" name="ENDERECO_CIDADE" placeholder="Cidade"
                        title="Escreva a sua cidade" />
                </div>
                <div class="w-3/12">
                    <x-form.input-group label="Estado" name="ENDERECO_ESTADO"
                        onkeydown="return /[A-Z]/i.test(event.key)" oninput="this.value = this.value.toUpperCase()"
                        maxlength="2" placeholder="Estado" title="Escreva o seu estado" />
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-6/12">
                    <x-form.input-group label="Nome do endereço" name="ENDERECO_NOME"
                        placeholder="Casa, Trabalho, Casa da praia..." title="Escreva o nome do endereço" />
                </div>
                <div class="w-5/12">
                    <x-form.input-group label="Complemento" name="ENDERECO_COMPLEMENTO" placeholder="Bl 01, apto 01"
                        title="Escreva o complemento do endereço" required="{{ false }}" />
                </div>
            </div>
            <div class="flex justify-between items-center my-1 ">
                <p id="limpar" class="poppins text-azul text-xs hover:underline cursor-pointer">
                    Limpar campos
                </p>
                <x-form.button>
                    Continuar
                </x-form.button>
            </div>
        </form>
    </x-card-horizontal>

</x-layout>
