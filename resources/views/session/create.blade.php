<x-layout>

    <main class="max-w-5xl mx-auto bg-red-500 flex justify-center items-center h-screen">
        <section class="w-full h-4/5 bg-blue-300 flex relative rounded-3xl">
            <div class="w-1/2 flex flex-col justify-center items-center bg-green-300 rounded-l-3xl">
                <p>Hello World</p>
                <button class="text-blue-700 signinBtn">switch</button>
            </div>
            <div class="w-1/2 flex flex-col justify-center items-center bg-purple-300 rounded-r-3xl">
                <p>Hello World</p>
                <button class="text-blue-700 signupBtn">switch</button>
            </div>
            <div class="banner-login absolute w-1/2 h-full z-50 rounded-l-3xl">

            </div>
        </section>
    </main>

    <script src="scripts/modules/session.js"></script>
</x-layout>