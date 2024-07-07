<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="grid items-start flex-1 gap-4 p-4 sm:px-6 sm:py-0 md:gap-8 lg:grid-cols-3 xl:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="w-full flex flex-1 gap-2 justify-end mb-4 text-right">
                    <x-secondary-button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-list-filte mr-1">
                            <path d="M3 6h18"/>
                            <path d="M7 12h10"/>
                            <path d="M10 18h4"/>
                        </svg>
                        Filtrar
                    </x-secondary-button>
                    <x-secondary-button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-file mr-2">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/>
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"/>
                        </svg>
                        Exportar
                    </x-secondary-button>
                    <x-button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-plus mr-2">
                            <path d="M5 12h14"/>
                            <path d="M12 5v14"/>
                        </svg>
                        Adicionar
                    </x-button>
                </div>
                <div class="max-h-[38.5rem] overflow-y-auto">

                    <div class="relative overflow-x-auto">
                        <table
                            class="w-full rounded-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-sm text-gray-500  bg-transparent dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 font-medium text-gray-500">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                            </tr>
                            <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 font-medium text-gray-500">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                            </tr>
                            <tr class="bg-transparent dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-500 ">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-title p-4 border-b border-gray-300">
                    <h2 class="text-lg text-gray-900 dark:text-gray-400 font-bold">Anotações</h2>
                    <p>
                        <span class="text-gray-600">Criado em</span>
                        <span class="text-gray-400">12/12/2021</span>
                    </p>
                </div>

                <div class="card-body flex flex-col gap-3 p-4 text-gray-600 ">
                    {{--                    <p class="text-gray-500">--}}
                    {{--                        Nenhum anotação--}}
                    {{--                    </p>--}}

                    <div
                        class="p-4 border-l rounded-lg h-fit bg-white hover:bg-white hover:cursor-pointer border-l-green-600 bg-secondary"
                    >

                        <h3 class="font-semibold text-gray-500">
                            Card title
                        </h3>

                        <p class="mt-4">
                            lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        </p>

                        <div class="flex items-center gap-2 mt-4">
                            <p class="text-xs font-medium text-blue-500">
                                Comentario (0)
                            </p>

                            <p class="text-xs text-foreground">
                                Livro: Guia do Mochileiro das Galáxias
                            </p>
                        </div>


                    </div>
                    <div
                        class="p-4 border-l rounded-lg h-fit bg-white hover:bg-white hover:cursor-pointer border-l-green-600 bg-secondary"
                    >

                        <h3 class="font-semibold text-gray-500">
                            Card title
                        </h3>

                        <p class="mt-4">
                            lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        </p>

                        <div class="flex items-center gap-2 mt-4">
                            <p class="text-xs font-medium text-blue-500">
                                Comentario (0)
                            </p>

                            <p class="text-xs text-foreground">
                                Livro: Guia do Mochileiro das Galáxias
                            </p>
                        </div>


                    </div>
                    <div
                        class="p-4 border-l rounded-lg h-fit bg-white hover:bg-white hover:cursor-pointer border-l-green-600 bg-secondary"
                    >

                        <h3 class="font-semibold text-gray-500">
                            Card title
                        </h3>

                        <p class="mt-4">
                            lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        </p>

                        <div class="flex items-center gap-2 mt-4">
                            <p class="text-xs font-medium text-blue-500">
                                Comentario (0)
                            </p>

                            <p class="text-xs text-foreground">
                                Livro: Guia do Mochileiro das Galáxias
                            </p>
                        </div>


                    </div>
                    <div
                        class="p-4 border-l rounded-lg h-fit bg-white hover:bg-white hover:cursor-pointer border-l-green-600 bg-secondary"
                    >

                        <h3 class="font-semibold text-gray-500">
                            Card title
                        </h3>

                        <p class="mt-4">
                            lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        </p>

                        <div class="flex items-center gap-2 mt-4">
                            <p class="text-xs font-medium text-blue-500">
                                Comentario (0)
                            </p>

                            <p class="text-xs text-foreground">
                                Livro: Guia do Mochileiro das Galáxias
                            </p>
                        </div>


                    </div>
                    <div
                        class="p-4 border-l rounded-lg h-fit bg-white hover:bg-white hover:cursor-pointer border-l-green-600 bg-secondary"
                    >

                        <h3 class="font-semibold text-gray-500">
                            Card title
                        </h3>

                        <p class="mt-4">
                            lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        </p>

                        <div class="flex items-center gap-2 mt-4">
                            <p class="text-xs font-medium text-blue-500">
                                Comentario (0)
                            </p>

                            <p class="text-xs text-foreground">
                                Livro: Guia do Mochileiro das Galáxias
                            </p>
                        </div>


                    </div>


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
