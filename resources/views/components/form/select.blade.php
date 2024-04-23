@props([
    'label' => '',
    'name' => '',
    'options' => [],
    'endereco' => false,
])

<label class="poppins text-laranja-escuro drop-shadow-md font-semibold">
    {{ $label }}:*
</label>
<select name="{{ $name }}" id="select-container"
    class="hidden" required
>
    {{-- @foreach ($options as $option)
        @if (endereco)
            <option value="{{ $option->ENDERECO_ID }}">{{ $option->ENDERECO_NOME }}</option>
        @else
            <option value="{{ $option }}">{{ $option }}</option>
        @endif
    @endforeach --}}
    @for ($i = 0; $i < 10; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
</select>
<div id="select-bar" class="select-open p-2 rounded-lg drop-shadow-md text-laranja-escuro bg-white h-12 relative flex items-center">
    <p id="selected" class=" poppins">0 {{-- {{ $endereco ? $options[0]->ENDERECO_NOME : $options[0] }} --}}</p>
    <div class="absolute inset-y-0 right-3 flex items-center">
        <div id="select-arrow" class="h-full w-full absolute z-50"></div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#D36411" class="w-6 h-6 -rotate-90">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </div>
</div>
<div id="select-options" class="relative hidden">
    <div class="absolute bg-white w-full z-50 top-2 rounded-xl py-1
        border-laranja-escuro">
        {{-- @foreach ($options as $option)
            @if (endereco)
                <p id="{{ $option->ENDERECO_ID }}"
                    onclick="selectOption(event)"
                    class="truncate px-2 poppins text-laranja-escuro select-option ease-in-out duration-150">
                    {{ $option->ENDERECO_NOME }}
                </p>
            @else
                <p id="{{ $option }}"
                onclick="selectOption(event)"
                class="truncate px-2 poppins text-laranja-escuro select-option ease-in-out duration-150">
                    {{ $option }}
                </p>
            @endif
        @endforeach --}}
        @for ($i = 0; $i < 10; $i++)
            <p id="{{ $i }}" onclick="selectOption(event)" class="truncate px-2 poppins text-laranja-escuro select-option ease-in-out duration-150">
                {{ $i }}
            </p>
        @endfor
    </div>
</div>
