<form {{ $attributes->merge(['id' => 'delete-form']) }}>
    @csrf
    <input type="hidden" name="uuid" id="uuid" />

    <p class="text-base">Tem certeza que deseja deletar o coordenador?</p>

    <div class="flex gap-2 mt-4">
        <x-buttons.red class="w-full" type="submit">Sim</x-buttons.indigo>
            <x-buttons.indigo class="w-full" id="cancel-delete-user-button">Não</x-buttons.indigo>
    </div>
</form>
