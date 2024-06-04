@section('script')
    <script src="\scripts\module\cep.js" defer></script>
    <script src="\scripts\module\select.js" defer></script>
@endsection

<x-layout>

    <div class="flex">
        <a href="{{ url()->previous() }}" class="bg-btn-sign p-1 rounded-lg mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </a>
    </div>

    <x-card-horizontal>
        <form action="{{ route('endereco.update', $endereco->ENDERECO_ID) }}" method="POST" class="w-full flex flex-col p-1">
            @csrf
            @method('PUT')

            <div class="flex justify-between">
                <div class="w-3/12">
                    <x-form.input-group label="CEP" name="ENDERECO_CEP" type="text" maxlength="9"
                        value="{{ substr($endereco->ENDERECO_CEP, 0, 5) . '-' . substr($endereco->ENDERECO_CEP, 5, 3) }}"
                        oninput="mascaraCEP(this)" placeholder="00000-000" title="Escreva somente números"
                        onblur="pesquisacep(this.value);" />
                </div>
                <div class="w-6/12">
                    <x-form.input-group label="Rua" name="ENDERECO_LOGRADOURO" placeholder="Rua Lugar Algum"
                        value="{{ $endereco->ENDERECO_LOGRADOURO }}"
                        title="Escreva o nome da sua rua" />
                </div>
                <div class="w-2/12">
                    <x-form.input-group label="Número" name="ENDERECO_NUMERO" placeholder="Número" type="number"
                        value="{{ $endereco->ENDERECO_NUMERO }}"
                        title="Escreva o número do seu endereço" />
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-8/12">
                    <x-form.input-group label="Cidade" name="ENDERECO_CIDADE" placeholder="Cidade"
                        value="{{ $endereco->ENDERECO_CIDADE }}"
                        title="Escreva a sua cidade" />
                </div>
                <div class="w-3/12">
                    <x-form.input-group label="Estado" name="ENDERECO_ESTADO"
                        value="{{ $endereco->ENDERECO_ESTADO }}"
                        onkeydown="return /[A-Z]/i.test(event.key)" oninput="this.value = this.value.toUpperCase()"
                        maxlength="2" placeholder="Estado" title="Escreva o seu estado" />
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-6/12">
                    <x-form.input-group label="Nome do endereço" name="ENDERECO_NOME"
                        value="{{ $endereco->ENDERECO_NOME }}"
                        placeholder="Casa, Trabalho, Casa da praia..." title="Escreva o nome do endereço" />
                </div>
                <div class="w-5/12">
                    <x-form.input-group label="Complemento" name="ENDERECO_COMPLEMENTO" placeholder="Bl 01, apto 01"
                        value="{{ $endereco->ENDERECO_COMPLEMENTO }}"
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
