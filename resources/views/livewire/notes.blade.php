<div class="flex flex-col overflow-auto gap-2"
    @class([
        'h-[18rem]' => count($comments) > 3,
    ])
>
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
        <x-button wire:click="showAddFormNotes">
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

    @if($showAdd)
        <div class="px-2 mb-4">
            <div class="mb-4">
                <x-label for="readings" value="{{ __('Leituras') }}"/>
                <x-select wire:model="reading" class="w-full mt-2 bg-transparent" id="readings">
                    <option class="bg-gray-400" value=" ">Selecione...</option>
                    @foreach($readings as $reading)
                        <option class="bg-gray-400" wire:key="{{ $reading->id }}"
                                value="{{ $reading->id }}">{{ $reading->title }}</option>
                    @endforeach
                </x-select>
                <x-input-error for="reading"/>
            </div>
            <x-secondary-button wire:click="showAddFormNotes">Fechar</x-secondary-button>
            <x-button wire:click="crateNote">Salvar</x-button>
        </div>
        <div class="border-separate pb-4"></div>

    @endif

    @if(count($notes) <= 0)
        <p class="text-sm text-gray-500">
            Nenhum anotação
        </p>
    @endif

    @foreach($notes as $note)
        <x-shared.card>
            <x-slot:title>
                <button class="hover:cursor-pointer hover:underline"
                        wire:click="showModalAdd('{{ $note->id }}')">
                    {{ $note->created_at->format('d/m/Y') }} - {{ $note->user->name }}
                </button>
            </x-slot>

            <x-slot:actions>
                <x-dropdown>
                    <x-slot name="trigger">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-ellipsis">
                                <circle cx="12" cy="12" r="1"/>
                                <circle cx="19" cy="12" r="1"/>
                                <circle cx="5" cy="12" r="1"/>
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot:content>
                        <button
                            wire:click="deleteNote('{{ $note->id  }}')"
                            class="w-full text-gray-800 text-xs flex items-center gap-1 px-4 py-2 hover:bg-red-200 rounded-md hover:text-red-500"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-trash">
                                <path d="M3 6h18"/>
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                            </svg>
                            Excluir
                        </button>
                    </x-slot:content>
                </x-dropdown>
            </x-slot:actions>

            <x-slot:body>
                {{ $note->text }}
            </x-slot>

            <x-slot:footer>
                <button class="text-xs font-medium hover:underline text-indigo-500"
                        wire:click="showModalAdd('{{ $note->id }}')"
                >
                    Comentario ({{ $note->comments?->count() }})
                </button>
                <p class="text-xs text-foreground">
                    Livro: {{ $note->reading?->title }}
                </p>
            </x-slot>
        </x-shared.card>
    @endforeach

    <x-dialog-modal wire:model="showModal">
        <x-slot name="title">
            {{ __('Comentários') }}
        </x-slot>

        <x-slot name="content">
            @if(count($comments) <= 0)
                <div class="text-center md:w-[40rem] text-gray-500 dark:text-gray-400">
                    Nenhum comentário encontrado.
                </div>
            @else
                <x-comments :comments="$comments"/>
            @endif
        </x-slot>

        <x-slot name="footer">
            <div class="flex items-center justify-between w-full gap-4 ">

                <div class="w-full">
                    <textarea type="text" wire:model="comment" id="text" class="block text-sm rounded-lg w-full mt-1"
                              placeholder="Digite..."
                              rows="1" cols="3"></textarea>
                    <x-input-error for="comment" class="mt-2"/>
                </div>

                @if(!$selectedComment)
                    <button class="bg-indigo-500 text-white p-3 rounded-full" wire:click.prevent="createComment">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-send-horizontal">
                            <path d="m3 3 3 9-3 9 19-9Z"/>
                            <path d="M6 12h16"/>
                        </svg>
                    </button>
                @else
                    <button class="bg-indigo-500 text-white p-3 rounded-full" wire:click.prevent="updateComment">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-send-horizontal">
                            <path d="m3 3 3 9-3 9 19-9Z"/>
                            <path d="M6 12h16"/>
                        </svg>
                    </button>
                @endif
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
