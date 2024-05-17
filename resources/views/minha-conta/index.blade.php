@section('script')
    <script src="\scripts\layout\conta.js" defer></script>
@endsection

<x-layout>
    <div class="flex w-full justify-between">

        <div class="w-2/5">
            <div class="flex justify-between">
                <h2 class="hanalei text-5xl drop-shadow-md mb-5 text-azul">Minha Conta</h2>
                <button id="editar" onclick="edit()" type="submit" class=" flex items center poppins text-white rounded-lg  px-1  drop-shadow-md bg-btn-sign hover:scale-105 hover:drop-shadow-lg ease-linear h-11 w-11 mt-3 fields">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-11 h-11">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </button>
            </div>
            <form class="flex items-right flex-col w-full text-laranja-escuro drop-shadow-md space-y-1" action="{{ route('update.minha-conta') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="flex flex-col">
                    <x-form.input-group class="hidden fields" label="Nome" name="USUARIO_NOME" placeholder="Nome" title="Escreva o seu nome" value="{{ $user->USUARIO_NOME }}"/>

                    <p class="pl-5 values">{{$user->USUARIO_NOME}}</p>
                </div>
                <div class="flex flex-col">
                    <x-form.input-group
                        class="hidden fields"
                        label="CPF"
                        name="USUARIO_CPF"
                        maxlength="14"
                        oninput="mascaraCPF(this)"
                        placeholder="000.000.000-00"
                        title="Escreva o seu cpf"
                        value="{{ $user->USUARIO_CPF }}"/>

                    <p class="pl-5 values">{{$user->USUARIO_CPF[0] . $user->USUARIO_CPF[1] . $user->USUARIO_CPF[2] . "." . $user->USUARIO_CPF[3] . $user->USUARIO_CPF[4] . $user->USUARIO_CPF[5] . "." . $user->USUARIO_CPF[6] . $user->USUARIO_CPF[7] . $user->USUARIO_CPF[8] . "-" . $user->USUARIO_CPF[9] . $user->USUARIO_CPF[10]}}</p>
                </div>
                <div class="flex flex-col">
                    <x-form.input-group class="hidden fields" type="email" label="E-mail" name="USUARIO_EMAIL" placeholder="seuemail@gmail.com" title="Escreva o seu e-mail" value="{{ $user->USUARIO_EMAIL }}"/>

                    <p class="pl-5 values">{{ $user->USUARIO_EMAIL }}</p>
                </div>
                <div class="flex justify-between">
                    <div class="flex flex-col w-2/5">
                        <x-form.input-group class="hidden fields" type="password" label="Senha" name="USUARIO_SENHA" placeholder="********" title="Escreva a sua senha" />

                        <p class="pl-5 values">******</p>
                    </div>
                    <div class="hidden new-password w-2/5">
                        <x-form.input-group class="hidden fields" required="{{false}}" type="password" label="Nova senha" name="NOVA_SENHA" placeholder="********" title="Escreva a sua nova senha" />
                    </div>
                </div>
                <div class="w-full justify-end space-x-3 flex drop-shadow-md">
                    <a onclick="edit()" class="hidden cursor-pointer fields bg-vermelho poppins text-white rounded-lg px-3 py-2 uppercase font-bold drop-shadow-md hover:scale-105 hover:drop-shadow-lg ease-linear h-11 mt-2">Cancelar</a>
                    <p class="values"><p>
                    <button class="hidden fields poppins text-white rounded-lg px-7 py-2 uppercase font-bold drop-shadow-md bg-btn-sign hover:scale-105 hover:drop-shadow-lg ease-linear h-11 mt-2" type="submit">Editar</button>
                </div>
            </form>
        </div>

        <div class="w-2/5">
            <h2 class="hanalei text-5xl drop-shadow-md mb-5 text-azul">Meus endereços</h2>

            <div class="w-full box-border h-64 bg-amarelo border-8 border-laranja-escuro rounded-lg flex flex-col items-center {{ $enderecos->count() < 1 ? 'justify-center' : '' }}">
                @if ($enderecos->count() > 0)
                    @foreach ($enderecos as $endereco)
                        <p>oi</p>
                    @endforeach
                @else
                    <p class="hanalei text-vermelho text-2xl">Nenhum endereço cadastrado</p>
                @endif
            </div>
        </div>

    </div>
</x-layout>
