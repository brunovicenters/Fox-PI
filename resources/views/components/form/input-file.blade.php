@props(['label' => '', 'placeholder' => '', 'name' => '', 'id' => $name,'required' => false])

<label for="{{ $id }}" class="poppins text-laranja-escuro drop-shadow-md font-semibold">{{ $label }}:{{ $required ? '*' : '' }}</label>
<label for="{{ $id }}" class="poppins text-laranja-escuro drop-shadow-md
            w-full bg-white p-2 rounded-lg flex justify-between">
    <span id="labelQtyImgs" class="drop-shadow-md text-gray-400">{{ $placeholder }}</span>
    <span class="poppins text-white rounded-lg px-2 py-1 uppercase text-sm drop-shadow-md
        bg-btn-sign font-semibold hover:drop-shadow-lg ease-linear">
        Anexar
    </span>
</label>

<input {{$required ? 'required' : ''}} accept="image/*" multiple="multiple" type="file" name="{{ $name }}[]" id="{{ $id }}" onchange="qtyImgs(this.id)" class="hidden"></input>
