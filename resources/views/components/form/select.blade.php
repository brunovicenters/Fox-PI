@props([
    'label' => '',
    'name' => '',
    'options' => [],
    'type' => 0,
    'required' => true,
])

{{-- type: 0 = simple array, 1 = address, 2 = category --}}

<label class="poppins text-laranja-escuro drop-shadow-md font-semibold">
    {{ $label }}:{{$required ? '*' : ''}}
</label>
<select name="{{ $name }}" id="select-container"
    class="hidden" {{$required ? 'required' : ''}}
>
    @if ($type == 2)
        <option value="todas">Todas</option>
    @endif
    @foreach ($options as $option)
        @if ($type == 0)
            <option value="{{ $option }}">{{ $option }}</option>
        @elseif ($type == 1)
            <option value="{{ $option->ENDERECO_ID }}">{{ $option->ENDERECO_NOME }}</option>
        @elseif ($type == 2)
            <option value="{{ $option->CATEGORIA_ID }}">{{ $option->CATEGORIA_NOME }}</option>
        @endif
    @endforeach
</select>
<div id="select-bar" class="select-open p-2 rounded-lg drop-shadow-md text-laranja-escuro bg-white h-12 relative flex items-center">
    <p id="selected" class=" poppins">{{ $type == 0 ? $options[0] : ($type == 1 ? $options[0]->ENDERECO_NOME : "Todas") }}</p>
    <div class="absolute inset-y-0 right-3 flex items-center">
        <div id="select-arrow" class="h-full w-full absolute z-50"></div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="#D36411" class="w-6 h-6 -rotate-90">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </div>
</div>
<div id="select-options" class="relative hidden">
    <div class="absolute bg-white w-full z-50 top-2 rounded-xl py-1 max-h-56 overflow-y-auto
        border-laranja-escuro">
        @if ($type == 2)
            <p id="todas"
                onclick="selectOption(event)"
                class="truncate px-2 poppins text-laranja-escuro select-option ease-in-out duration-150">
                Todas
            </p>
        @endif
        @foreach ($options as $option)
            @if ($type == 0)
                <p id="{{ $option }}"
                onclick="selectOption(event)"
                class="truncate px-2 poppins text-laranja-escuro select-option ease-in-out duration-150">
                    {{ $option }}
                </p>
            @elseif ($type == 1)
                <p id="{{ $option->ENDERECO_ID }}"
                    onclick="selectOption(event)"
                    class="truncate px-2 poppins text-laranja-escuro select-option ease-in-out duration-150">
                    {{ $option->ENDERECO_NOME }}
                </p>
            @elseif ($type == 2)
                <p id="{{ $option->CATEGORIA_ID }}"
                    onclick="selectOption(event)"
                    class="truncate px-2 poppins text-laranja-escuro select-option ease-in-out duration-150">
                    {{ $option->CATEGORIA_NOME }}
                </p>
            @endif
        @endforeach
    </div>
</div>
