<div
    {{ $attributes->merge(['class' => 'bg-white shadow-lg dark:bg-zinc-800 border dark:border-zinc-700 border-none rounded-lg shadow-md p-2']) }}>
    <div class="flex items-center gap-3">
        <x-dynamic-component :component="'icons.' . $icon" class="bg-indigo-500/20 p-4 text-xl text-indigo-500 rounded-lg" />
        <h2 class="text-base text-black dark:text-white">{{ $title ?? 'Sem título' }}</h2>
    </div>

    <div class="mt-4 flex gap-2 text-sm">
        <label class="cursor-pointer group">
            <input type="checkbox" class="hidden peer" name="modulos[{{ $name }}][editar]" />
            <div
                class="w-24 h-16 flex items-center justify-center rounded-md border-2 border-gray-300 
                          hover:border-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900/20
                          peer-checked:bg-blue-500 peer-checked:border-blue-600 
                          text-gray-700 dark:text-gray-300 peer-checked:text-white 
                          transition-all duration-200 ease-in-out">
                <span class="flex items-center gap-2">
                    <x-icons.edit-fill class="w-4 h-4" />
                    Editar
                </span>
            </div>
        </label>

        <label class="cursor-pointer group">
            <input type="checkbox" class="hidden peer" name="modulos[{{ $name }}][deletar]" />
            <div
                class="w-24 h-16 flex items-center justify-center rounded-md border-2 border-gray-300
                          hover:border-red-400 hover:bg-red-50 dark:hover:bg-red-900/20
                          peer-checked:bg-red-500 peer-checked:border-red-600
                          text-gray-700 dark:text-gray-300 peer-checked:text-white
                          transition-all duration-200 ease-in-out">
                <span class="flex items-center gap-2">
                    <x-icons.trash-fill class="w-4 h-4" />
                    Apagar
                </span>
            </div>
        </label>

        <label class="cursor-pointer group">
            <input type="checkbox" class="hidden peer" name="modulos[{{ $name }}][visualizar]" />
            <div
                class="w-24 h-16 flex items-center justify-center rounded-md border-2 border-gray-300
                          hover:border-green-400 hover:bg-green-50 dark:hover:bg-green-900/20
                          peer-checked:bg-green-500 peer-checked:border-green-600
                          text-gray-700 dark:text-gray-300 peer-checked:text-white
                          transition-all duration-200 ease-in-out">
                <span class="flex items-center gap-2">
                    <x-icons.eye-fill class="w-4 h-4" />
                    Ver
                </span>
            </div>
        </label>

        <label class="cursor-pointer group">
            <input type="checkbox" class="hidden peer" name="modulos[{{ $name }}][criar]" />
            <div
                class="w-24 h-16 flex items-center justify-center rounded-md border-2 border-gray-300
                          hover:border-yellow-400 hover:bg-yellow-50 dark:hover:bg-yellow-900/20
                          peer-checked:bg-yellow-500 peer-checked:border-yellow-600
                          text-gray-700 dark:text-gray-300 peer-checked:text-white
                          transition-all duration-200 ease-in-out">
                <span class="flex items-center gap-2">
                    <x-icons.plus-fill class="w-4 h-4" />
                    Criar
                </span>
            </div>
        </label>
    </div>
</div>
