<x-layout>

        <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-azul">Endereço de Entrega</h1>

        @if (1 == 1)
        <x-card-horizontal>
            <form action="#" method="POST" class="w-full flex flex-col p-1 relative">
                @csrf
                <label for="ENDERECO_SALVO" class="poppins text-laranja-escuro drop-shadow-md font-semibold">
                    Endereços salvos:
                </label>
                <select name="ENDERECO_SALVO" id="endereco-salvo"
                class="hidden"
                >
                    @for ($i = 0; $i < 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <div id="select-bar" class="select-open p-2 rounded-lg drop-shadow-md text-laranja-escuro bg-white h-12 relative flex items-center">
                    <p id="selected-end" class=" poppins">0</p>
                    <div class="absolute inset-y-0 right-3 flex items-center">
                        <div id="select-arrow" class="h-full w-full absolute z-50"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#D36411" class="w-6 h-6 -rotate-90">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </div>
                </div>
                <div id="select-options" class="relative hidden">
                    <div class="absolute bg-white w-full z-50 top-2 rounded-xl py-1
                        border-laranja-escuro">
                        @for ($i = 0; $i < 10; $i++)
                            <p id="{{ $i }}" onclick="selectOption(event)" class="truncate px-2 poppins text-laranja-escuro select-option ease-in-out duration-150">
                                {{ $i }}
                            </p>
                        @endfor
                    </div>
                </div>
                <div class="flex items-center justify-end mt-3">
                    <x-form.button>
                        Continuar
                    </x-form.button>
                </div>
            </form>
        </x-card-horizontal>

        <h2 class="hanalei text-center text-azul drop-shadow-md uppercase my-2 text-4xl">OU</h2>
        @endif

        <x-card-horizontal>
            <form action="#" method="POST" class="w-full flex flex-col p-1">
                @csrf
                <div class="flex justify-between">
                    <div class="w-3/12">
                        <x-form.input-group label="CEP" name="cep" id="cep"
                            type="text"
                            maxlength="9"
                            oninput="mascaraCEP(this)"
                            placeholder="00000-000"
                            title="Escreva somente números"
                            onblur="pesquisacep(this.value);"/>
                    </div>
                    <div class="w-6/12">
                        <x-form.input-group id="rua" label="Rua" name="ENDERECO_LOGRADOURO" placeholder="Rua Lugar Algum" title="Escreva o nome da sua rua"/>
                    </div>
                    <div class="w-2/12">
                        <x-form.input-group id="numero" label="Número" name="ENDERECO_NUMERO" placeholder="Número" type="number" title="Escreva o número do seu endereço"/>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="w-4/12">
                        <x-form.input-group id="bairro" label="Bairro" name="ENDERECO_BAIRRO" placeholder="Bairro" title="Escreva o seu bairro"/>
                    </div>
                    <div class="w-5/12">
                        <x-form.input-group id="cidade" label="Cidade" name="ENDERECO_CIDADE" placeholder="Cidade" title="Escreva a sua cidade"/>
                    </div>
                    <div class="w-2/12">
                        <x-form.input-group id="estado" label="Estado" name="ENDERECO_ESTADO"
                            onkeydown="return /[A-Z]/i.test(event.key)"
                            oninput="this.value = this.value.toUpperCase()"
                            maxlength="2"
                            placeholder="Estado"
                            title="Escreva o seu estado"/>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="w-6/12">
                        <x-form.input-group id="nome_end" label="Nome do endereço" name="ENDERECO_NOME" placeholder="Casa, Trabalho, Casa da praia..." title="Escreva o nome do endereço"/>
                    </div>
                    <div class="w-5/12">
                        <x-form.input-group id="complemento" label="Complemento" name="ENDERECO_COMPLEMENTO" placeholder="Bl 01, apto 01" title="Escreva o complemento do endereço" required="{{false}}"/>
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

    <script src="\scripts\module\cep.js"></script>
    <script src="\scripts\module\select.js"></script>
</x-layout>
