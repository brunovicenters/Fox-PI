<x-layout>

    <section class="flex flex-col space-y-2">
        <h1 class="text-6xl hanalei text-azul">FALE CONOSCO</h1>
        <div class="w-full flex justify-center items-right gap-5">
            <div class="flex flex-col w-4/6">
                <x-form.select label="Qual o assunto"  name="ASSUNTO" />
            </div>
            <div class="flex flex-col w-2/6">
                <x-form.input-group label="Qual o código do pedido" name="CODIGO_PEDIDO" placeholder="Código do pedido" title="Escreva o código do pedido"/>
            </div>
        </div>

        <div class="flex flex-col w-full">
            <label class="poppins text-laranja-escuro drop-shadow-md font-semibold">Descreva o problema:</label>
            <textarea name="desc" placeholder="Descreva o seu problema..." title="Descreva o problema"
                class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-full h-20"></textarea>
        </div>

        <div class="flex justify-center gap-10  w-full">
            <div class="flex flex-col w-full">
                <label class="poppins text-laranja-escuro drop-shadow-md font-semibold ">Possui imagens? Nos
                    envie:</label>
                <div
                    class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-11/12 bg-white flex  items-center justify-between">
                    <span>Insira imagens...</span>
                    <label for="input-file"
                        class="poppins text-white rounded-lg px-3  uppercase font-bold drop-shadow-md bg-btn-sign hover:scale-105 hover:drop-shadow-lg ease-linear h-6 cursor-pointer ">Anexar</button>
                </div>
                <input type="file" name="input-file" id="input-file" class="hidden"></input>
            </div>

            <div class="self-end">
                <x-form.button >Enviar</x-form.button>
            </div>
        </div>
    </section>

                <section class="mt-10 ">
                    <div class="flex flex-col space-y-2">
                        <h2 class=" text-4xl hanalei text-azul">PERGUNTAS FREQUENTES</h2>
                        <div class="flex gap-10">
                            <p class= "poppins"><strong class="text-laranja-escuro">Qual o telefone para
                                    contato?</strong> +55 11 5839-7006</p>
                            <p class="poppins"><strong class="text-laranja-escuro">Em até quantas vezes posso
                                    parcelar?</strong> 6x sem juros, 12x com juros</p>
                        </div>
                        <p class="poppins"><strong class="text-laranja-escuro">Como faço para trocar um
                                produto?</strong> Nos envie uma mensagem acima, fornecendo o código do produto</p>
                        <p class="poppins"><strong class="text-laranja-escuro">Caso o produto venha danificado, posso
                                receber reembolso? </strong> Sim, basta nos enviar uma mensagem acima com fotos </p>
                    </div>
                </section>
    </section>


    <script src="\scripts\module\select.js"></script>

</x-layout>
