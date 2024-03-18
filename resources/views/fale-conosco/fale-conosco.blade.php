<x-layout>
    <main class="max-w-5xl mx-auto flex justify-center items-center h-screen">
        <section>
            <h1 class="text-5xl titulos">FALE CONOSCO</h1>
            <div class="w-1/2 flex justify-center gap-5">
                <x-form.input-group label="Nome" name="nome" placeholder="Nome" title="Escreva seu nome" class=""/>
                <x-form.input-group label="CPF" name="cpf" type="number" placeholder="00000000000" title="Escreva somente números"/>
            </div>
            <x-form.input-group label="E-mail" name="email" type="email" placeholder="E-mail" />
            <div class="w-1/2 flex justify-center px-20 gap-10 ">
                <x-form.input-group label="Senha" name="senha" type="password" placeholder="Senha" title="Escreva uma senha segura e anote-a" />
                <x-form.button>Entrar</x-form.button>
            </div>
        </section>
        
    </main>


</x-layout>