@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <x-broadcrumb />

    <h1 class="text-xl font-semibold mt-4 text-black dark:text-white">Coordenadores</h1>

    <div class="flex mt-2">
        <form id="search-form" class="flex items-center">
            <x-inputs.input type="search" name="search" placeholder="Pesquise aqui..." class="text-sm mr-2 w-sm" />
            <x-buttons.indigo type="submit" class="text-sm">Pesquisar</x-buttons.indigo>
        </form>

        <x-buttons.indigo class="text-sm w-24 ml-2" id="filter-button">Filtros</x-buttons.indigo>

        <x-buttons.indigo class="text-sm w-32 ml-auto" id="create-button">Cadastrar</x-buttons.indigo>
    </div>

    <template id="status-1">
        <x-status.active />
    </template>
    <template id="status-9">
        <x-status.inactive />
    </template>
    <x-tables.table headerComponent="tables.coordinator.header" rowComponent="tables.coordinator.row" class="mt-4"
        id="table" />

    <x-modal.overlay id="overlay" class="hidden" />
    <x-modal.modal-sidebar-right id="filter-modal" class="hidden" title="Filtros"
        description="Filtre de forma mais eficiente">
        <form class="grid grid-cols-12 gap-2" id="filter-form">
            <div class="col-span-12">
                <x-inputs.label for="name">Nome</x-inputs.label>
                <x-inputs.input name="name" type="text" placeholder="Nome" class="w-full" />
            </div>

            <div class="col-span-12">
                <x-inputs.label for="email">E-mail</x-inputs.label>
                <x-inputs.input name="email" type="text" placeholder="joao@gmail.com" class="w-full" />
            </div>

            <div class="col-span-12">
                <x-inputs.label for="telephone">Telefone</x-inputs.label>
                <x-inputs.input name="telephone" type="text" placeholder="(11) 11111-1111" class="w-full" />
            </div>

            <div class="col-span-12">
                <x-inputs.label for="status">Status</x-inputs.label>
                <x-inputs.select name="status">
                    <option value="">Todos</option>
                    <option value="1">Ativo</option>
                    <option value="9">Inativo</option>
                </x-inputs.select>
            </div>

            <div class="col-span-12">
                <x-buttons.indigo class="w-full">Filtrar</x-buttons.indigo>
            </div>
        </form>
    </x-modal.modal-sidebar-right>

    <x-modal.modal class="hidden w-4xl" id="create-modal" title="Cadastrar Coordenador"
        description="Preencha os campos para cadastrar um novo coordenador">
        <x-forms.coordinator.create id="create-form" />
    </x-modal.modal>

    <x-modal.modal class="hidden w-4xl" id="update-modal" title="Atualizar Coordenador"
        description="Preencha os campos para cadastrar um novo hóspede">
        <x-forms.coordinator.update id="update-form" />
    </x-modal.modal>

    <x-modal.modal class="hidden w-xl" id="delete-modal" title="Deletar Coordenador">
        <x-forms.coordinator.delete id="delete-form" />
    </x-modal.modal>

    <x-toasts.container id="toast-container">
    </x-toasts.container>

    <x-toasts.success title="Sucesso" message="Login realizado com sucesso!" />
    <x-toasts.error message="Login realizado com sucesso!" />
    <x-toasts.info message="Login realizado com sucesso!" />
@endsection

@section('scripts')
    @vite('resources/js/pages/coordinators/index.js')
    @vite('resources/js/pages/coordinators/table.js')
    @vite('resources/js/pages/coordinators/create.js')
    @vite('resources/js/pages/coordinators/edit.js')
    @vite('resources/js/pages/coordinators/delete.js')
    @vite('resources/js/pages/coordinators/filter.js')
@endsection
