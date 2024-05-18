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
            <div class="flex w-full justify-between items-center mb-5">
                <h2 class="hanalei text-5xl drop-shadow-md text-azul">Meus endereços</h2>

                <a title="Adicione um endereço" href="{{ route("endereco.create") }}" class="bg-green-600 rounded-lg p-1 hover:bg-green-800 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </a>
            </div>
            <div class="w-full py-2 px-4 box-border overflow-y-auto max-h-64 bg-amarelo border-8 border-laranja-escuro rounded-lg flex flex-col items-center {{ $enderecos->count() < 1 ? 'justify-center' : '' }}">
                @if ($enderecos->count() > 0)
                    @foreach ($enderecos as $loop => $endereco)
                        @if ($loop->index > 0)
                        <span
                        class="text-vermelho bg-vermelho divisor h-1 w-full"></span>
                        @endif
                        <div class="flex flex-col w-full py-2 space-y-1">
                            <div class="flex justify-between w-full">
                                <h3 class="text-vermelho hanalei text-4xl">{{ $endereco->ENDERECO_NOME }}</h3>
                                <div class="flex space-x-2">
                                    <a class="cursor-pointer hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#F9A80C" class="w-9 h-9">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </a>
                                    <form method="POST" action="{{ route('endereco.destroy', $endereco->ENDERECO_ID) }}">
                                        @csrf

                                        <button class="hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#B20D30" class="w-9 h-9">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="w-full flex flex-wrap text-azul">
                                <p class="w-2/3">{{ $endereco->ENDERECO_LOGRADOURO }}, {{ $endereco->ENDERECO_NUMERO }} {{ $endereco->ENDERECO_COMPLEMENTO ? ",". $endereco->ENDERECO_COMPLEMENTO : ''}}</p>
                                <p class="w-1/3 text-end">{{ $endereco->ENDERECO_CIDADE }}, {{ $endereco->ENDERECO_ESTADO }}</p>
                                <p class="w-2/3">- {{ substr($endereco->ENDERECO_CEP, 0, 5) . '-' . substr($endereco->ENDERECO_CEP, 5, 3) }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="hanalei text-vermelho text-2xl">Nenhum endereço cadastrado</p>
                @endif
            </div>
        </div>

    </div>
</x-layout>
