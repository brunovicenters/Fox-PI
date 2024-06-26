@props(['label' => '', 'placeholder' => '', 'name' => '', 'type' => 'text', 'id' => $name, 'required' => true])

<div class="flex flex-col mb-3">
    <label for="{{ $name }}" class="poppins text-laranja-escuro drop-shadow-md font-semibold">{{ $label }}:{{$required ? '*' : ''}}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        {{$required ? 'required' : ''}}
        {{ $attributes(['value' => old($name), 'class' => "p-2 rounded-lg drop-shadow-md bg-white text-laranja-escuro input-form"]) }}>
</div>
