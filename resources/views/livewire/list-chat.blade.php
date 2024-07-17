<div>
    <div class="my-8">
        <x-input type="text" placeholder="Buscar" class="bg-transparent w-full"/>
    </div>

    @forelse($chats as $chat)
        <div class="flex flex-col text-gray-500 gap-4">
            <button
                wire:click="selectChat('{{ $chat->id }}')"
                {{--                href="{{ route('chat.show', $chat->id) }}"--}}

                class="flex hover:bg-gray-100 rounded-lg p-2 w-full items-center gap-1"
                :class="{'bg-gray-100': '{{ $chat->id }}' === '{{ $selectedChat }}'}"
                wire:navigate>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-messages-square">
                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"/>
                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/>
                </svg>

                <span class="text-sm ml-2">{{ $chat->name }}</span>
            </button>
        </div>
    @empty
        <div class="text-center mt-4 p-4">
            <span class="text-center text-xs text-gray-400 mt-4">
                    Não ha registros de leituras
            </span>
        </div>
    @endforelse

</div>

@script
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Livewire.on('leavePage', () => {
            alert('test');
            document.querySelector('input').value = '';
        });
    });
</script>
@endscript
