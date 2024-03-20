<x-layout>
    <section class="max-w-5xl mx-auto flex flex-col h-screen mt-10 poppins">
        <main>
            <div class="flex flex-col space-y-2">
                <h1 class="text-6xl titulos">FALE CONOSCO</h1>
                <div class="w-full flex justify-center items-right gap-5">
                    <div class="flex flex-col w-5/6">
                        <label class="poppins text-laranja-escuro drop-shadow-md font-semibold">Qual o assunto?</label>
                        <select name="assunto" class="p-2 rounded-lg drop-shadow-md  w-full poppins">
                            <option value="valor1">Valor 1</option>    
                            <option value="valor2">Valor 2</option>
                            <option value="valor3">Valor 3</option>
                        </select>
                        <!-- <input name="assunto" placeholder="Selecione..." title="Qual o assunto" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-full"></input> -->
                    </div>
                    <div class="flex flex-col w-5/6">
                        <label class="poppins text-laranja-escuro drop-shadow-md font-semibold">Qual o código do pedido?</label>
                        <input name="codigo" placeholder="Código do pedido" title="Qual o código do pedido" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-full"></input>    
                    </div>
                </div>

                <div class="flex flex-col w-full">
                    <label class="poppins text-laranja-escuro drop-shadow-md font-semibold">Descreva o problema:</label>
                    <textarea  name="desc" placeholder="Descreva o seu problema..." title="Descreva o problema" class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-full h-20"></textarea>
                </div>

                <div class="flex justify-center gap-10  w-full">
                    <div class="flex flex-col w-full ">
                        <label class="poppins text-laranja-escuro drop-shadow-md font-semibold ">Possui imagens? Nos envie:</label>  
                        <div class="p-2 rounded-lg drop-shadow-md text-laranja-escuro w-11/12 bg-white flex  items-center justify-between">
                            <span>Insira imagens...</span>
                            <label for="input-file" class="poppins text-white rounded-lg px-3  uppercase font-bold drop-shadow-md bg-btn-sign hover:scale-105 hover:drop-shadow-lg ease-linear h-6 cursor-pointer ">Anexar</button>
                        </div>
                        <input type="file" name="input-file" id="input-file" class="hidden"></input>
                    </div>
                    <button type="submit" class="poppins text-white rounded-lg px-10 py-2 uppercase font-bold drop-shadow-md bg-btn-sign hover:scale-105 hover:drop-shadow-lg ease-linear h-11 mt-6 ">Enviar</button>
                    
                </div>
            </div>
        <main>

        <section class="mt-10 "> 
            <div class="flex flex-col space-y-2">
                <h2 class=" text-4xl titulos ">PERGUNTAS FREQUENTES</h2>
                <div class="flex gap-10">
                    <p class= "poppins"><strong class="cor-fonte">Qual o telefone para contato?</strong> +55 11 5839-7006</p>
                    <p class="poppins"><strong class="cor-fonte">Em até quantas vezes posso parcelar?</strong> 6x sem juros, 12x com juros</p>
                </div>
                <p class="poppins"><strong class="cor-fonte">Como faço para trocar um produto?</strong> Nos envie uma mensagem acima, fornecendo o código do produto</p>
                <p class="poppins"><strong class="cor-fonte">Caso o produto venha danificado, posso receber reembolso? </strong> Sim, basta nos enviar uma mensagem acima com fotos </p>
            </div>    
        </section>

    </section>
    
</x-layout>
