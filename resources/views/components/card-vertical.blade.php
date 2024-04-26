@props(['href'])

<a href="{{ $href }}" class="border-vermelho rounded-xl bg-amarelo w-44 ease-in-out duration-200 hover:scale-105">
    {{ $slot }}
</a>
