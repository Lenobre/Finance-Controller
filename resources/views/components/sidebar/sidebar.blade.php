<nav class="@container/sidebar transition-all duration-700 bg-gray-50 dark:bg-zinc-900 border-r border-gray-300 dark:border-zinc-700 top-0 h-screen fixed py-4 px-2 w-64 flex flex-col gap-2 z-20"
    id="sidebar">
    <h1 class="font-bold text-4xl text-center textblack dark:text-white mb-4">LOGO</h1>

    <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.index') }}">
        <x-icons.home-fill class="mr-2 transition-colors duration-150 w-5" />

        <span class="@max-[100px]/sidebar:hidden">
            Home
        </span>
    </x-sidebar.link>

    <x-sidebar.menu title="Cursos" icon="graduation-cap-fill">
        <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.courses.index') }}">
            <x-icons.list-fill class="mr-2 transition-colors duration-150 w-5" />

            Listar
        </x-sidebar.link>

        <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.courses.speciality.index') }}">
            <x-icons.tag-fill class="mr-2 transition-colors duration-150 w-5" />

            Especialidades
        </x-sidebar.link>
    </x-sidebar.menu>

    <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.coordinators.index') }}">
        <x-icons.user-graduate-fill class="mr-2 transition-colors duration-150 w-5" />

        <span class="@max-[100px]/sidebar:hidden">
            Coordenadores
        </span>
    </x-sidebar.link>

    <x-sidebar.menu title="Notícias" icon="newspaper-fill">
        <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.news.index') }}">
            <x-icons.list-fill class="mr-2 transition-colors duration-150 w-5" />

            Listar
        </x-sidebar.link>

        <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.news.categories.index') }}">
            <x-icons.tag-fill class="mr-2 transition-colors duration-150 w-5" />

            Categorias
        </x-sidebar.link>
    </x-sidebar.menu>

    <x-sidebar.link class="mt-auto hover:text-indigo-500" href="{{ route('dashboard.settings.index') }}">
        <x-icons.gear-fill class="mr-2 transition-colors duration-150 w-5" />

        <span class="@max-[100px]/sidebar:hidden">
            Configurações
        </span>
    </x-sidebar.link>
</nav>
