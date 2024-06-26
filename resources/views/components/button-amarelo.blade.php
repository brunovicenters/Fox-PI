@props(['text', 'href'])

<a href="{{ $href }}"
    class="text-laranja-escuro bg-amarelo poppins
    px-3 py-1 uppercase rounded-lg text-xl drop-shadow-md font-semibold text-center
    hover:scale-105 hover:drop-shadow-lg ease-linear"
    >
    <span class="drop-shadow-md">
        {{ $text }}
    </span>
</a>
