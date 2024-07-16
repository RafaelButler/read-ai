<div
    class="max-w-[712px] mx-auto flex flex-col justify-between h-3/6/4 lg:h-screen overflow-hidden relative scrollbar-hide">
    <div id="conversation"
         class="flex-grow flex flex-col overflow-y-auto gap-1 h-auto overflow-auto scrollbar-hide my-12">

        <x-chat-greetings/>

    </div>


    <form
        wire:submit.prevent="create"
        class="flex bg-gray-100 sticky w-full bottom-0 items-center gap-4"
    >

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
