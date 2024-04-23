@props(['label' => '', 'placeholder' => '', 'name' => '', 'id' => $name, 'required' => true])

<div class="flex flex-col mb-3">
    <label for="{{ $name }}" class="poppins text-laranja-escuro drop-shadow-md font-semibold">{{ $label }}:{{$required ? '*' : ''}}</label>
    <textarea
        name="{{ $name }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        class="p-2 rounded-lg drop-shadow-md text-laranja-escuro input-form w-full h-20"
        {{$required ? 'required' : ''}}
        {{ $attributes(['value' => old($name)]) }}></textarea>
</div>
