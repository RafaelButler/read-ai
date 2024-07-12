<div class="flex flex-col h-[18rem] overflow-auto gap-2">
    @foreach($notes as $note)
        <x-shared.card>
            <x-slot:title>
                <div class="hover:cursor-pointer hover:underline"
                     wire:click="showModalAdd('{{ $note->id }}')">
                    {{ $note->created_at->format('d/m/Y') }} - {{ $note->user->name }}
                </div>
            </x-slot>

            <x-slot:body>
                {{ $note->text }}
            </x-slot>

            <x-slot:footer>
                <p class="text-xs font-medium text-indigo-500">
                    Comentario ({{ $note->comments?->count() }})
                </p>
                <p class="text-xs text-foreground">
                    Livro: {{ $note->reading->title }}
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
                <div class="text-center md:w-[38rem] text-gray-500 dark:text-gray-400">
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

                <button class="bg-indigo-500 text-white p-3 rounded-full" wire:click.prevent="createComment">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-send-horizontal">
                        <path d="m3 3 3 9-3 9 19-9Z"/>
                        <path d="M6 12h16"/>
                    </svg>
                </button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
