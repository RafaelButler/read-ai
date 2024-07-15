<div
    class="max-w-[712px] mx-auto flex flex-col justify-between h-3/6/4 lg:h-screen overflow-hidden relative scrollbar-hide">
    <div id="conversation"
         class="flex-grow flex flex-col overflow-y-auto gap-1 h-auto overflow-auto scrollbar-hide my-12">

        @forelse($messages as $message)

            <div class="mt-4 md:min-w-[700px] border-t border-t-gray-300 py-4">
                @if($message['role'] === 'user')
                    <div class="w-full flex justify-end gap-3">
                        <div class="flex flex-col">
                            <span class="text-xs text-end font-bold">Eu</span>
                            <span class="text-xs text-end text-gray-500">4 min atrás</span>
                            <p class="text-xs mt-2">
                                {{ $message['content'] }}
                            </p>
                        </div>
                        <div class="bg-indigo-500 p-2 h-fit text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-user">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </div>
                    </div>
                @endif

                @if($message['role'] === 'assistant')
                    <div class="flex items-start gap-3 mt-4">
                        <div>
                            <x-application-mark class="block h-8 w-auto"/>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold">ApolloAI</span>
                            <span class="text-xs text-gray-500">2 min atrás</span>
                            @if($message['content'])
                                {{-- convert markdown to html --}}
                                <pre
                                    class="text-xs mt-2">{!! \Illuminate\Support\Str::markdown($message['content'])  !!}</pre>

                            @else
                                <span class="text-xs mt-2">Carregando...</span>
                            @endif
                        </div>
                    </div>
                @endif

            </div>

        @empty
            <div class="flex flex-col gap-4 md:mt-12">
                <div class="flex items-center gap-3">
                    <div>
                        <x-application-mark class="w-8 h-8"/>
                    </div>
                    <h2 class="text-3xl font-bold">ApolloAI</h2>
                </div>

                <div class="bg-white p-4 rounded-lg mt-3">
                    <h3 class="flex items-center gap-2 text-gray-500 font-bold">
                        <x-application-mark class="w-4 h-4"/>
                        Recomendações
                    </h3>

                    <span class="text-xs text-gray-500">
                                ApolloAI é uma plataforma de leitura que tem como objetivo ajudar você a se tornar um leitor mais
                                eficiente.
                            </span>

                </div>

                <div class="bg-white p-4 rounded-lg mt-1">
                    <h3 class="text-gray-500 font-bold">
                        Recomendações
                    </h3>

                    <span class="text-xs text-gray-500">
                                ApolloAI é uma plataforma de leitura que tem como objetivo ajudar você a se tornar um leitor mais
                                eficiente.
                            </span>

                </div>

                <div class="bg-white p-4 rounded-lg mt-1">
                    <h3 class="text-gray-500 font-bold">
                        Recomendações
                    </h3>

                    <span class="text-xs text-gray-500">
                                ApolloAI é uma plataforma de leitura que tem como objetivo ajudar você a se tornar um leitor mais
                                eficiente.
                            </span>

                </div>
            </div>
        @endforelse

    </div>


    <form
        class="flex bg-gray-100 sticky w-full bottom-0 items-center gap-4" wire:submit.prevent="sendMessage">
        {{-- textarea --}}

        <input
            class="w-full p-4 text-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            placeholder="Digite sua mensagem"
            wire:model="prompt"
            wire:loading.class="pointer-events-none"
        />
        <button class="bg-indigo-500 text-white p-3 rounded-full" type="submit" wire:loading.remove>
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-send-horizontal">
                <path d="m3 3 3 9-3 9 19-9Z"/>
                <path d="M6 12h16"/>
            </svg>
        </button>

        <button class="bg-indigo-500 text-white p-3 rounded-full pointer-events-none" type="button"
                wire:loading>
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-loader animate-spin">
                <path d="M12 2v4"/>
                <path d="m16.2 7.8 2.9-2.9"/>
                <path d="M18 12h4"/>
                <path d="m16.2 16.2 2.9 2.9"/>
                <path d="M12 18v4"/>
                <path d="m4.9 19.1 2.9-2.9"/>
                <path d="M2 12h4"/>
                <path d="m4.9 4.9 2.9 2.9"/>
            </svg>
        </button>

    </form>
</div>
