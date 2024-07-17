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
                            {{--                            <span class="text-xs text-end text-gray-500">4 min atrás</span>--}}
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
                            {{--                            <span class="text-xs text-gray-500">2 min atrás</span>--}}
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
            <x-chat-greetings/>
        @endforelse

    </div>

    <form
        class="flex bg-gray-100 sticky w-full bottom-0 items-center gap-4" wire:submit.prevent="sendMessage">
        {{-- textarea --}}

        @if($number_chat <= 0)
            <x-input
                placeholder="Digite sua mensagem"
                class="py-4 pointer-events-none opacity-35"
            />

            <button class="bg-indigo-500 text-white p-3 rounded-full pointer-events-none opacity-35" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-send-horizontal">
                    <path d="m3 3 3 9-3 9 19-9Z"/>
                    <path d="M6 12h16"/>
                </svg>
            </button>
        @else
            <x-input
                class="py-4"
                placeholder="Digite sua mensagem"
                wire:model="prompt"
                wire:loading.class="pointer-events-none opacity-35"
            />

            <button class="bg-indigo-500 text-white p-3 rounded-full" type="submit" wire:loading.remove>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-send-horizontal">
                    <path d="m3 3 3 9-3 9 19-9Z"/>
                    <path d="M6 12h16"/>
                </svg>
            </button>
        @endif

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
