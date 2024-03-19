<x-layout>
    <section class="max-w-5xl mx-auto flex flex-col justify-center items-right h-screen">
        <h1 class="text-6xl titulos">FALE CONOSCO</h1>
        <div class="w-full flex justify-center items-right gap-5">
            <div class="flex flex-col w-5/6"><!-- Alteração aqui -->
                <label class="poppins text-laranja-escuro drop-shadow-md font-semibold">Qual o assunto?</label>
                <input name="assunto" placeholder="Selecione..." title="Qual o assunto" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-full"></input><!-- Alteração aqui -->
            </div>
            <div class="flex flex-col w-5/6"><!-- Alteração aqui -->
                <label class="poppins text-laranja-escuro drop-shadow-md font-semibold">Qual o código do pedido?</label>
                <input name="codigo pedido" placeholder="Código do pedido" title="Qual o código do pedido" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-full"></input><!-- Alteração aqui -->
            </div>
        </div>

        <div class="flex flex-col w-full">
            <label class="poppins text-laranja-escuro drop-shadow-md font-semibold">Descreva o problema:</label>
            <input type="text" name="Descreva o problema" placeholder="Descreva o seu problema..." title="Descreva o problema" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-full"></input>
        </div>

        <div class="flex justify-center px-20 gap-10  w-full">
            <div class="flex flex-col w-full ">
                <label class="poppins text-laranja-escuro drop-shadow-md font-semibold">Possui imagens? Nos envie:</label>
                <input name="Descreva o problema" placeholder="Insira imagens..." title="Descreva o problema" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-11/12"></input>
            </div>
            <div class=flex>
                <button type="submit" class="poppins text-white rounded-lg px-6 py-2 uppercase font-bold drop-shadow-md bg-btn-sign hover:scale-105 hover:drop-shadow-lg ease-linear h-11 mt-5 ">Anexar</button>
            </div>
            <button type="submit" class="poppins text-white rounded-lg px-10 py-2 uppercase font-bold drop-shadow-md bg-btn-sign hover:scale-105 hover:drop-shadow-lg ease-linear h-11 mt-5 ">Enviar</button>
            
        </div>

        <section >  
            <h2 class=" text-4xl titulos ">PERGUNTAS FREQUENTES</h2>
            <div class="flex gap-10">
            <p class= ""><strong class="cor-fonte">Qual o telefone para contato?</strong> +55 11 5839-7006</p>
            <p><strong class="cor-fonte">Em até quantas vezes posso parcelar?</strong> 6x sem juros, 12x com juros</p>
            </div>
            <p><strong class="cor-fonte">Como faço para trocar um produto?</strong> Nos envie uma mensagem acima, fornecendo o código do produto</p>
            <p><strong class="cor-fonte">Caso o produto venha danificado, posso receber reembolso? </strong> Sim, basta nos enviar uma mensagem acima com fotos </p>
        </section>

    </section>
    
</x-layout>
