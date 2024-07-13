<x-chat-layout>
    <div
        class="max-w-[712px] mx-auto flex flex-col justify-between h-3/6/4 lg:h-screen overflow-hidden relative scrollbar-hide">
        <div class="flex-grow flex flex-col overflow-y-auto gap-8 h-auto overflow-auto scrollbar-hide">

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>
            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>

            <span class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae cupiditate excepturi facilis illum nihil, possimus quisquam ullam veniam voluptatibus. Amet at delectus esse expedita illum magnam nemo quaerat voluptates.
                </span>
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
