<div
    class="p-4 border-l h-fit bg-gray-50 rounded-lg hover:bg-white hover:cursor-pointer border-l-green-600"
>

    <div
        class="flex items-center justify-between"
    >
        <h4 class="text-sm font-semibold text-gray-500">
            {{ $title }}
        </h4>

        <div>
            <x-dropdown>
                <x-slot name="trigger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-ellipsis">
                        <circle cx="12" cy="12" r="1"/>
                        <circle cx="19" cy="12" r="1"/>
                        <circle cx="5" cy="12" r="1"/>
                    </svg>
                </x-slot>

                <x-slot:content>
                    <button
                        class="w-full text-gray-800 text-xs flex items-center gap-1 px-4 py-2 hover:bg-red-200 rounded-md hover:text-red-500"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-trash">
                            <path d="M3 6h18"/>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                        </svg>
                        Excluir
                    </button>
                </x-slot:content>
            </x-dropdown>

        </div>

    </div>


    <p class="text-xs mt-2">
        {{ $body }}
    </p>

    <div class="flex items-center gap-2 mt-2">
        <p class="text-xs font-medium text-indigo-500">
            Comentario (0)
        </p>

        <p class="text-xs text-foreground">
            {{ $footer }}
        </p>
    </div>
</div>
