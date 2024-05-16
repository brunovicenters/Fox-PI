<div class="divisoria-footer h-36"></div>
<footer class="footer w-full p-10">
    <div class="max-w-5xl mx-auto flex flex-col space-y-12">
        <div class="footer-top flex justify-between">
            <div class="footer-logo flex items-center">
                <div>
                    <a href="/">
                        <img class="w-48" src="\images\fox.svg" alt="Logo do site">
                    </a>
                </div>
            </div>

            <div class="footer-conta">
                {{-- Carrinho / Minha Conta / Meus Pedidos --}}
                <h3 class="text-laranja-claro text-2xl hanalei">Minha conta</h3>
                <ul>
                    <li class="poppins text-verde">
                        <a href="/minha-conta" class="hover:underline">Minha conta</a>
                    </li>
                    <li class="poppins text-verde">
                        <a href="/carrinho" class="hover:underline">Meu carrinho</a>
                    </li>
                    <li class="poppins text-verde">
                        <a href="/meus-pedidos" class="hover:underline">Meus pedidos</a>
                    </li>
                    <li class="poppins text-verde">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="hover:text-decoration-underline hover:text-black">Sair</button>
                        </form>
                    </li>
                </ul>
            </div>

            {{-- <div class="footer-mais-vendidos">
                <h3 class="text-laranja-claro text-2xl hanalei">Mais vendidos</h3>
                <ul>
                    <li class="poppins text-verde">
                        <a href="/minha-conta" class="hover:underline">Categoria</a>
                    </li>
                    <li class="poppins text-verde">
                        <a href="/carrinho" class="hover:underline">Categoria</a>
                    </li>
                    <li class="poppins text-verde">
                        <a href="/meus-pedidos" class="hover:underline">Categoria</a>
                    </li>
                    <li class="poppins text-verde">
                        <a href="/meus-pedidos" class="hover:underline">Categoria</a>
                    </li>
                </ul>
            </div> --}}
            <div class="span"></div>

            <div id="footer-cards" class="footer-cards flex flex-col space-y-5">
                {{-- Loja --}}
                <div>
                    <h3 class="text-laranja-claro text-2xl hanalei">Loja</h3>
                    <div class="footer-card rounded-lg flex space-x-2 py-2 px-3">
                        <div class="footer-card-icon flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#B20D30" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                            </svg>
                        </div>
                        <div class="footer-card-text flex flex-col">
                            <p class="text-vermelho hanalei">Rua Lugar Algum, 761, SP</p>
                            <p class="text-verde poppins text-xs">04562-708</p>
                            <p class="text-verde poppins uppercase text-xs">Seg a Sex - 08h a 18h</p>
                            <p class="text-verde poppins text-xs uppercase">&#40;Exceto feriado e emenda de feriado&#41;
                            </p>
                        </div>
                    </div>
                </div>
                {{-- SAC --}}
                <div>
                    <h3 class="text-laranja-claro text-2xl hanalei">Central de Atendimento</h3>
                    <div class="footer-card rounded-lg flex space-x-2 py-2 px-3">
                        <div class="footer-card-icon flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#B20D30" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                        </div>
                        <div class="footer-card-text flex flex-col">
                            <a href="{{ route('fale-conosco.create') }}" class="hanalei text-vermelho hover:underline">Fale Conosco</a>
                            <p class="text-verde poppins text-xs">+55 11 5839-7006</p>
                            <p class="text-verde poppins uppercase text-xs">Seg a Sex - 08h a 18h</p>
                            <p class="text-verde poppins text-xs uppercase">&#40;Exceto feriado e emenda de feriado&#41;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom flex justify-center items-center space-x-8">
            <div class="flex flex-col">
                <h3 class="text-laranja-claro text-2xl hanalei">Métodos de Pagamento</h3>
                <div class="footer-payment flex space-x-4">
                    {{-- Formas de pagamento --}}
                    <div class="footer-card rounded-lg flex items-center flex-col px-4 py-1 w-20 h-16">
                        <p class="poppins text-vermelho text-center">Pix</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6" fill="#B20D30">
                            <path
                                d="M242.4 292.5C247.8 287.1 257.1 287.1 262.5 292.5L339.5 369.5C353.7 383.7 372.6 391.5 392.6 391.5H407.7L310.6 488.6C280.3 518.1 231.1 518.1 200.8 488.6L103.3 391.2H112.6C132.6 391.2 151.5 383.4 165.7 369.2L242.4 292.5zM262.5 218.9C256.1 224.4 247.9 224.5 242.4 218.9L165.7 142.2C151.5 127.1 132.6 120.2 112.6 120.2H103.3L200.7 22.8C231.1-7.6 280.3-7.6 310.6 22.8L407.8 119.9H392.6C372.6 119.9 353.7 127.7 339.5 141.9L262.5 218.9zM112.6 142.7C126.4 142.7 139.1 148.3 149.7 158.1L226.4 234.8C233.6 241.1 243 245.6 252.5 245.6C261.9 245.6 271.3 241.1 278.5 234.8L355.5 157.8C365.3 148.1 378.8 142.5 392.6 142.5H430.3L488.6 200.8C518.9 231.1 518.9 280.3 488.6 310.6L430.3 368.9H392.6C378.8 368.9 365.3 363.3 355.5 353.5L278.5 276.5C264.6 262.6 240.3 262.6 226.4 276.6L149.7 353.2C139.1 363 126.4 368.6 112.6 368.6H80.8L22.8 310.6C-7.6 280.3-7.6 231.1 22.8 200.8L80.8 142.7H112.6z" />
                        </svg>
                    </div>
                    <div class="footer-card rounded-lg flex items-center flex-col px-4 py-1 w-20 h-16">
                        <p class="poppins text-vermelho text-center">Boleto</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6" fill="#B20D30">
                            <path
                                d="M24 32C10.7 32 0 42.7 0 56V456c0 13.3 10.7 24 24 24H40c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H24zm88 0c-8.8 0-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16zm72 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H184zm96 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H280zM448 56V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H472c-13.3 0-24 10.7-24 24zm-64-8V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16s-16 7.2-16 16z" />
                        </svg>
                    </div>
                    <div class="footer-card rounded-lg flex items-center flex-col px-4 py-1 w-20 h-16">
                        <p class="poppins text-vermelho text-center">Crédito</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#B20D30" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="footer-social">
                <h3 class="text-laranja-claro text-2xl hanalei">Redes Sociais</h3>
                {{-- Redes --}}
                <div class="flex space-x-4">
                    <a href="#"
                        class="footer-card rounded-lg flex items-center justify-center w-16 h-16 hover:scale-105">
                        <p class="menu-nav">
                            <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#B20D30">
                                <path
                                    d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                            </svg>
                        </p>
                    </a>
                    <a href="#"
                        class="footer-card rounded-lg flex items-center justify-center w-16 h-16 hover:scale-105">
                        <p class="menu-nav">
                            <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                fill="#B20D30">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </p>
                    </a>
                    <a href="#"
                        class="footer-card rounded-lg flex items-center justify-center w-16 h-16 hover:scale-105">
                        <p class="menu-nav">
                            <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                fill="#B20D30">
                                <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <p class="poppins text-verde text-center uppercase text-xs">&#169; 2024 FOX. TODOS OS DIREITOS RESERVADOS</p>
    </div>
</footer>
