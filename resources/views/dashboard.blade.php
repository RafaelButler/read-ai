<x-app-layout>
    <div class="">
        <div class="grid items-start flex-1 gap-4 p-4 sm:px-6 sm:py-0 md:gap-8 lg:grid-cols-3 xl:grid-cols-3">
            <div class="lg:col-span-2">
                <livewire:create-reading/>
            </div>

            <div class="card mb-4">
                <div class="card-title p-4 border-b border-gray-300">
                    <h2 class="text-lg text-gray-900 dark:text-gray-400 font-bold">Anotações</h2>
                    <p>
                        <span class="text-gray-600"></span>
                    </p>
                </div>

                <div class="card-body flex flex-col gap-3 py-4 text-gray-600 ">
                    <div class="text-right">
                        <x-secondary-button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-list-filte mr-1">
                                <path d="M3 6h18"/>
                                <path d="M7 12h10"/>
                                <path d="M10 18h4"/>
                            </svg>
                            Filtrar
                        </x-secondary-button>
                        <x-button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-plus mr-1">
                                <path d="M5 12h14"/>
                                <path d="M12 5v14"/>
                            </svg>
                            Nova anotação
                        </x-button>
                    </div>
                    {{--                    <p class="text-gray-500">--}}
                    {{--                        Nenhum anotação--}}
                    {{--                    </p>--}}

                    <livewire:notes/>
                </div>
                <div class="border-separate pb-4"></div>
                <div class="card-footer pt-4 border-t border-gray-300">
                    <livewire:tags/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
