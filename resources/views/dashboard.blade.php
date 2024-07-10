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
                    <livewire:tags/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
