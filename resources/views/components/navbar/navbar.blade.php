@props(['categorias'])

<main class="navbar w-full h-28 relative flex gap-16">
    <img class="absolute right-0 top-0" src="\images\nav-desenho1.png" alt="Enfeite da Navbar">
    <img class="absolute -left-1 bottom-0" src="\images\nav-desenho2.png" alt="Enfeite da Navbar">

    <div>
        <a href="{{ route('home') }}">
            <img class="mt-2 ml-24 w-24" src="\images\fox.svg" alt="Logo do site">
        </a>
    </div>

    <div class="w-3/4 mt-3">
        <nav class="flex items-center gap-3 text-white">
            <a href="/" class="hanalei uppercase menu-nav">
                Início
            </a>
            |
            <a href="/quem-somos" class="hanalei uppercase menu-nav">
                Quem somos
            </a>
            |
            <a href="#footer-cards" class="hanalei uppercase menu-nav text-lg">
                Rua Lugar Algum, 761 - 04562-708
            </a>
            |
            <a href="{{ route('fale-conosco.create') }}" class="hanalei uppercase menu-nav">Fale conosco</a>
            |
            <div class="flex gap-2 justify-center items-center">
                <a href="#" class="menu-nav">
                    <svg class="w-5 icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white">
                        <path
                            d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                    </svg>
                </a>
                <a href="#" class="menu-nav">
                    <svg class="w-5 icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="white">
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </a>
                <a href="#" class="menu-nav">
                    <svg class="w-5 icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="white">
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                </a>
            </div>
        </nav>

        <form action="{{ route('pesquisa.index') }}" method="GET" class="mt-3 relative" id="search">
            <div class="w-full relative">

                <input placeholder="Digite o nome do produto" type="text" name="termoPesquisa" id="search" old="{{ old('termoPesquisa') }}"
                    value="{{ request('termoPesquisa') }}"
                    class="w-full h-10 rounded-full input-form pl-3 pr-10 py-2 drop-shadow-md text-laranja-escuro">
                <button type="submit" class="lupa absolute right-3 top-1 rotate-90 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="#D36411" class="w-8 h-8 rounded-full p-1 search">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>

    <div class="flex gap-10 justify-center items-center pr-20">
        <a class="relative pointer" href="/carrinho">
            <span
                class="absolute -top-3 -left-2 text-xl rounded-full flex justify-center items-center w-8 h-8 p-1 z-50 text-amarelo shopcart-icon-number">
                @auth
                    {{ App\Models\Carrinho::where('USUARIO_ID', '=', Auth::user()->USUARIO_ID)->where('ITEM_QTD', '>', 0)->count() }}
                @else
                    0
                @endauth
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
                class="w-16 h-16 -scale-x-100 icon-stroke">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
        </a>
        <div class="relative">
            <div class="relative">
                <button id="menu-btn" onclick="toggleMenu()" class="absolute w-full h-full">
                </button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="w-20 h-20 icon-stroke">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>

            <div id="menu" class="absolute z-50 top-50 -right-10 rounded-lg hidden menu">
                <ul class="hanalei text-xl text-white text-center w-36 flex flex-col space-y-1 px-3 py-1">
                    @auth

                        <li><a class="menu-item" href="/meus-pedidos">Meus pedidos</a></li>
                        <li class="w-full h-1 bg-white"></li>
                        <li><a class="menu-item" href="/minha-conta">Minha conta</a></li>
                        <li class="w-full h-1 bg-white"></li>

                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="menu-item">Sair</button>
                            </form>
                        </li>
                    @else
                        <li><a class="menu-item" href="{{ route('sign.index') }}">Entrar</a></li>
                        <li class="w-full h-1 bg-white"></li>
                        <li><a class="menu-item" href="{{ route('sign.index', ['cadastrar' => 'true']) }}">Criar conta</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</main>

@isset($categorias)
    <aside class="categorias-container">

        <div id="controls-carousel" class="relative w-full" data-carousel="static">

            <div class="relative overflow-hidden rounded-lg h-8">
                @foreach ($carouselCategorias as $i => $chunk)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item{{ $i == 0 ? ' active' : '' }}>

                        <div class="flex justify-around items-center w-full px-5">
                            @foreach ($chunk as $loop => $categoria)
                                @if ($loop->index != 0)
                                    <span id="{{ $loop->index }}_{{ $i }}"
                                        class="text-vermelho bg-vermelho divisor h-6 w-1"></span>
                                @endif
                                <x-navbar.categoria :categoria="$categoria" />
                            @endforeach

                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-0.5 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-7 h-7 rounded-full group-hover:bg-orange-500/50 group-focus:ring-2 group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-vermelho rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Anterior</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-0.5 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-7 h-7 rounded-full group-hover:bg-orange-500/50 group-focus:ring-2 group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-vermelho rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Próximo</span>
                </span>
            </button>
        </div>
    </aside>
@endisset
