<x-layout>

    <x-navbar.navbar />

    <main class="max-w-5xl mx-auto mt-10 mb-3">
        <h1 class="hanalei text-6xl drop-shadow-md uppercase mb-5 text-azul">Endereço de Entrega</h1>
        <x-card-horizontal>
            <form action="#" method="POST">
                @csrf
                <div>
                    <label for="">CEP:</label>
                    <input type="text">
                </div>
            </form>
        </x-card-horizontal>
    </main>

    <x-footer.footer />
</x-layout>
