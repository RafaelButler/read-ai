<div class="flex flex-col h-[18rem] overflow-auto gap-2">
    @foreach($notes as $note)
        <x-shared.card>
            <x-slot:title>
                {{ $note->created_at->format('d/m/Y') }} - {{ $note->user->name }}
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
</div>
