<div class="text-sm relative" id="{{ $id }}">
    <button class="rounded-md px-2 border border-gray-300 bg-white text-left h-9 w-full appearance-none" type="button"
        id="toggler">{{ $text }}</button>

    <div class="hidden absolute z-10 mt-1 bg-white border border-gray-300 rounded-md w-full px-1 py-1 text-xs max-w-52"
        id="options-container">
        <template id="option-template">
            <li class="px-2 py-1 hover:bg-gray-100 rounded-md transition-colors">
                <label class="flex items-center">
                    <input type="checkbox" name="{{ $name }}[]" class="mr-2 text-sm accent-indigo-600">

                    <span id="text">
                    </span>
                </label>
            </li>
        </template>

        <ul id="options">
        </ul>
    </div>
</div>
