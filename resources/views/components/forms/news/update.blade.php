<form {{ $attributes->merge(['class' => 'grid grid-cols-12 gap-2', 'id' => 'update-form']) }}>
    <input type="hidden" name="uuid" id="uuid" />
    @csrf

    <div class="col-span-12">
        <h2 class="text-black text-lg">Dados básicos</h2>

        <hr class="text-gray-300" />
    </div>

    <div class="col-span-2 xl:col-span-1">
        <x-inputs.label for="status" required>Status</x-inputs-label>
            <x-inputs.select id="status" name="status">
                <option value="9">Inativo</option>
                <option value="1">Ativo</option>
            </x-inputs.select>
            <p class="text-red-500 text-sm" id="status-error"></p>
    </div>

    <div class="col-span-10 xl:col-span-11">
        <x-inputs.label for="title" required>Título</x-inputs-label>
            <x-inputs.input type="text" name="title" id="title" placeholder="Título da notícia" />
            <p class="text-red-500 text-sm" id="title-error"></p>
    </div>

    <div class="col-span-2">
        <x-inputs.label for="categories[]">Categorias</x-inputs-label>
            <x-inputs.dropdown text="Selecione aqui" name="categories" id="category-dropdown"></x-inputs.dropdown>
            <p class="text-red-500 text-sm" id="categories-error"></p>
    </div>

    <div class="col-span-10">
        <x-inputs.label for="slug" required>Slug</x-inputs-label>
            <x-inputs.input type="text" name="slug" id="slug" placeholder="slug-da-categoria" />
            <p class="text-red-500 text-sm" id="slug-error"></p>
    </div>

    <div class="col-span-12">
        <x-inputs.label for="description">Conteúdo</x-inputs-label>
            <input type="hidden" name="content" id="content">
            <div class="max-h-96 overflow-y-auto">
                <div id="editor-edit" class="min-h-64">
                </div>
            </div>
    </div>

    <div class="col-span-12 mt-2 flex">
        <x-buttons.indigo class="w-36 text-center text-sm ml-auto font-semibold"
            type="submit">Atualizar</x-buttons.indigo-button>
    </div>
</form>
