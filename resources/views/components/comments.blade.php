@props(['comments' => []])

<div
    class="flex flex-col gap-8 bg-gray-50 md:w-[40rem] h-[14rem] rounded-lg p-4 overflow-auto"
>
    @foreach($comments as $comment)
        <div class="flex flex-col justify-start border-t pt-4 gap-1">
            <div class="flex justify-between">
                            <span
                                class="text-xs font-bold">{{ $comment['user'] }} - {{ $comment['created_at'] }}</span>
                <x-dropdown align="right">
                    <x-slot name="trigger">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-ellipsis">
                                <circle cx="12" cy="12" r="1"/>
                                <circle cx="19" cy="12" r="1"/>
                                <circle cx="5" cy="12" r="1"/>
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <button
                            wire:click="selectCommentEdit(`{{ $comment['id'] }}`)"
                            class="w-full text-gray-800 hover:bg-gray-100 text-xs px-4 py-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-square-pen">
                                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                <path
                                    d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"/>
                            </svg>
                            Editar
                        </button>
                        <button
                            wire:click="deleteComment(` {{ $comment['id'] }}`)"
                            class="w-full text-gray-800 text-xs flex items-center gap-1 px-4 py-2 hover:bg-red-200 rounded-md hover:text-red-500"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-trash">
                                <path d="M3 6h18"/>
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                            </svg>
                            Excluir
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <pre
                class="font-normal text-xs">{{ $comment['text'] }}</pre>
        </div>
    @endforeach

</div>
