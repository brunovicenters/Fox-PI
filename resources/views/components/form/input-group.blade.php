@props(['label' => '', 'placeholder' => '', 'name' => '', 'type' => 'text'])

<div class="flex flex-col mb-3">
    <label for="{{ $name }}" class="poppins text-laranja-escuro drop-shadow-md font-semibold">{{ $label }}:</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        class="p-2 rounded-lg drop-shadow-md text-laranja-escuro"
        required
        {{ $attributes(['value' => old($name)]) }}>
</div>