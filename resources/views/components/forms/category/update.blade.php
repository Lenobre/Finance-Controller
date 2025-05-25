<form {{ $attributes->merge(['class' => 'grid grid-cols-12 gap-2', 'id' => 'update-form']) }}>
    <input type="hidden" name="uuid" id="uuid" />
    @csrf

    <div class="col-span-12">
        <h2 class="text-black text-lg">Dados básicos</h2>

        <hr class="text-gray-300" />
    </div>

    <div class="col-span-2">
        <x-inputs.label for="status" required>Status</x-inputs-label>
            <x-inputs.select id="status" name="status">
                <option value="9">Inativo</option>
                <option value="1">Ativo</option>
            </x-inputs.select>
            <p class="text-red-500 text-sm" id="status-error"></p>
    </div>

    <div class="col-span-10">
        <x-inputs.label for="name" required>Nome</x-inputs-label>
            <x-inputs.input type="text" name="name" id="name" placeholder="Nome da categoria" />
            <p class="text-red-500 text-sm" id="name-error"></p>
    </div>

    <div class="col-span-12">
        <x-inputs.label for="slug" required>Slug</x-inputs-label>
            <x-inputs.input type="text" name="slug" id="slug" placeholder="slug-da-categoria" />
            <p class="text-red-500 text-sm" id="slug-error"></p>
    </div>

    <div class="col-span-12 mt-2 flex">
        <x-buttons.indigo class="w-36 text-center text-sm ml-auto font-semibold"
            type="submit">Atualizar</x-buttons.indigo-button>
    </div>
</form>
