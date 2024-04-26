<x-layout>

    <form class="flex flex-col space-y-2" enctype="multipart/form-data" action="#" method="GET">
        <h1 class="text-6xl hanalei text-azul">FALE CONOSCO</h1>
        <div class="w-full flex justify-center items-right gap-5">
            <div class="flex flex-col w-4/6">
                <x-form.select label="Qual o assunto"  name="ASSUNTO" :options="$options" />
            </div>
            <div class="flex flex-col w-2/6">
                <x-form.input-group label="Qual o código do pedido" name="CODIGO_PEDIDO" placeholder="Código do pedido" title="Escreva o código do pedido"/>
            </div>
        </div>

        <div class="flex flex-col w-full">
            <x-form.textarea label="Descreva o problema" placeholder="Descreva o seu problema..."
                name="MENSAGEM" title="Escreva o seu problema" />
        </div>

        <div class="flex justify-center gap-10  w-full">
            <div class="flex flex-col w-full">
                <x-form.input-file label="Possui imagens? Nos envie" placeholder="Insira imagens..."
                    name="IMAGENS_PROBLEMA"/>
            </div>

            <div class="self-end">
                <x-form.button >Enviar</x-form.button>
            </div>
        </div>
    </form>

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


    <script src="\scripts\module\select.js"></script>
    <script src="\scripts\module\input-file.js"></script>

</x-layout>
