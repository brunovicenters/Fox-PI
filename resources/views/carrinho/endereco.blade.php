<x-layout>

    <x-navbar.navbar />

    <main class="max-w-5xl mx-auto mt-10 mb-3">
        <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-azul">Endereço de Entrega</h1>
        <x-card-horizontal>
            <form action="#" method="POST w-full" class="w-full flex flex-col p1">
                @csrf
                <div class="flex justify-between">
                    <div class="w-3/12">
                        <x-form.input-group label="CEP" name="cep"
                            type="text"
                            maxlength="9"
                            oninput="mascaraCEP(this)"
                            placeholder="00000-000"
                            title="Escreva somente números"/>
                    </div>
                    <div class="w-6/12">
                        <x-form.input-group label="Rua" name="ENDERECO_LOGRADOURO" placeholder="Rua Lugar Algum" title="Escreva o nome da sua rua"/>
                    </div>
                    <div class="w-2/12">
                        <x-form.input-group label="Número" name="ENDERECO_NUMERO" placeholder="Número" type="number" title="Escreva o número do seu endereço"/>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="w-4/12">
                        <x-form.input-group label="Bairro" name="ENDERECO_BAIRRO" placeholder="Bairro" type="number" title="Escreva o seu bairro"/>
                    </div>
                    <div class="w-5/12">
                        <x-form.input-group label="Cidade" name="ENDERECO_CIDADE" placeholder="Cidade" title="Escreva a sua cidade"/>
                    </div>
                    <div class="w-2/12">
                        <x-form.input-group label="Estado" name="ENDERECO_ESTADO" placeholder="Estado" title="Escreva o seu estado"/>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="w-6/12">
                        <x-form.input-group label="Logradouro" name="ENDERECO_NOME" placeholder="Casa, Trabalho, Casa da praia..." title="Escreva o nome do endereço"/>
                    </div>
                    <div class="w-5/12">
                        <x-form.input-group label="Complemento" name="ENDERECO_COMPLEMENTO" placeholder="Bl 01, apto 01" title="Escreva o complemento do endereço"/>
                    </div>
                </div>
                <div class="flex justify-between items-center my-1 ">
                    <a onclick="limparCampos()" class="poppins text-azul text-xs hover:underline cursor-pointer">
                        Limpar campos
                    </a>
                    <x-form.button href="carrinho/pagamento" text="Continuar">
                        Finalizar
                    </x-form.button>
                </div>
            </form>
        </x-card-horizontal>
    </main>

    <x-footer.footer />

    <script src="scripts\layout\carrinho.js"></script>
</x-layout>
