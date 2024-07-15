<x-chat-layout>
    <div
        class="max-w-[712px] mx-auto flex flex-col justify-between h-3/6/4 lg:h-screen overflow-hidden relative scrollbar-hide">
        <div class="flex-grow flex flex-col overflow-y-auto gap-8 h-auto overflow-auto scrollbar-hide">

            {{--            <span class="text-sm text-gray-500">--}}
            {{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.--}}
            {{--                </span>--}}

            {{--            <div class="flex flex-col gap-4 md:mt-12">--}}
            {{--                <div class="flex items-center gap-3">--}}
            {{--                    <div>--}}
            {{--                        <x-application-mark class="w-8 h-8"/>--}}
            {{--                    </div>--}}
            {{--                    <h2 class="text-3xl font-bold">ApolloAI</h2>--}}
            {{--                </div>--}}

            {{--                <div class="bg-white p-4 rounded-lg mt-3">--}}
            {{--                    <h3 class="flex items-center gap-2 text-gray-500 font-bold">--}}
            {{--                        <x-application-mark class="w-4 h-4"/>--}}
            {{--                        Recomendações--}}
            {{--                    </h3>--}}

            {{--                    <span class="text-xs text-gray-500">--}}
            {{--                        ApolloAI é uma plataforma de leitura que tem como objetivo ajudar você a se tornar um leitor mais--}}
            {{--                        eficiente.--}}
            {{--                    </span>--}}

            {{--                </div>--}}

            {{--                <div class="bg-white p-4 rounded-lg mt-1">--}}
            {{--                    <h3 class="text-gray-500 font-bold">--}}
            {{--                        Recomendações--}}
            {{--                    </h3>--}}

            {{--                    <span class="text-xs text-gray-500">--}}
            {{--                        ApolloAI é uma plataforma de leitura que tem como objetivo ajudar você a se tornar um leitor mais--}}
            {{--                        eficiente.--}}
            {{--                    </span>--}}

            {{--                </div>--}}

            {{--                <div class="bg-white p-4 rounded-lg mt-1">--}}
            {{--                    <h3 class="text-gray-500 font-bold">--}}
            {{--                        Recomendações--}}
            {{--                    </h3>--}}

            {{--                    <span class="text-xs text-gray-500">--}}
            {{--                        ApolloAI é uma plataforma de leitura que tem como objetivo ajudar você a se tornar um leitor mais--}}
            {{--                        eficiente.--}}
            {{--                    </span>--}}

            {{--                </div>--}}
            {{--            </div>--}}

            <div class="mt-12">

                <div class="flex items-start gap-3">
                    <x-application-mark class="w-8 h-8"/>
                    <div class="flex flex-col">
                        <span class="text-xs font-bold">ApolloAI</span>
                        <span class="text-xs text-gray-500">2 min atrás</span>
                        <span class="text-xs mt-2">
                       Olá, eu sou o ApolloAI, seu assistente! Estou aqui para te ajudar...
                    </span>
                    </div>
                </div>

                <div class="w-full flex justify-end gap-3 mt-16">
                    <div class="flex flex-col">
                        <span class="text-xs text-end font-bold">Eu</span>
                        <span class="text-xs text-end text-gray-500">4 min atrás</span>
                        <p class="text-xs mt-2">
                            Gostaria de saber mais sobre o que você faz. Estou interessado em saber mais sobre a
                            ApolloAI.
                        </p>
                    </div>
                    <div class="bg-indigo-500 p-2 h-fit text-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-user">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                </div>
            </div>


        </div>


        <div
            class="flex bg-gray-100 sticky w-full bottom-0 items-center gap-4">
            {{-- textarea --}}
            <input
                class="w-full p-4 text-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                placeholder="Digite sua mensagem"/>
            <button class="bg-indigo-500 text-white p-3 rounded-full" wire:click.prevent="createComment">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-send-horizontal">
                    <path d="m3 3 3 9-3 9 19-9Z"/>
                    <path d="M6 12h16"/>
                </svg>
            </button>
        </div>
    </div>
</x-chat-layout>
