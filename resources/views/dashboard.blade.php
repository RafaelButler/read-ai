<x-app-layout>
    <div class="">
        <div class="grid items-start flex-1 gap-4 p-4 sm:px-6 sm:py-0 md:gap-8 lg:grid-cols-3 xl:grid-cols-3">
            <div class="lg:col-span-2">
                <livewire:create-reading/>
            </div>

            <div class="card">
                <div class="card-title p-4 border-b border-gray-300">
                    <h2 class="text-lg text-gray-900 dark:text-gray-400 font-bold">Anotações</h2>
                    <p>
                        <span class="text-gray-600">Criado em</span>
                        <span class="text-gray-400">12/12/2021</span>
                    </p>
                </div>

                <div class="card-body flex flex-col gap-3 py-4 text-gray-600 ">
                    {{--                    <p class="text-gray-500">--}}
                    {{--                        Nenhum anotação--}}
                    {{--                    </p>--}}

                    <x-shared.card>
                        <x-slot:title>
                            Card title
                        </x-slot>
                        
                        <x-slot:body>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </x-slot>

                        <x-slot:footer
                        >
                            Livro: O iluminado
                        </x-slot>
                    </x-shared.card>
                </div>
                <div class="border-separate pb-4"></div>
                <div class="card-footer pt-4 border-t border-gray-300">
                    <div class="flex items-center gap-3">

                        <x-secondary-button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-plus mr-2">
                                <path d="M5 12h14"/>
                                <path d="M12 5v14"/>
                            </svg>
                            Adicionar Tag
                        </x-secondary-button>
                        <x-secondary-button class="flex w-fite h-full">
                            <div
                                class="w-2 h-2 mr-2 bg-green-600 rounded-full"
                            ></div>
                            Add Tag
                        </x-secondary-button>
                        <x-secondary-button class="flex w-fite h-full">
                            <div
                                class="w-2 h-2 mr-2 bg-yellow-600 rounded-full"
                            ></div>
                            Add Tag
                        </x-secondary-button>
                        <x-secondary-button class="flex w-fite h-full">
                            <div
                                class="w-2 h-2 mr-2 bg-blue-600 rounded-full"
                            ></div>
                            Add Tag
                        </x-secondary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
