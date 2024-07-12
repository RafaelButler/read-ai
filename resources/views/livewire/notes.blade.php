<div class="flex flex-col h-[18rem] overflow-auto gap-2">
    @foreach($notes as $note)
        <div wire:click="showModalAdd">
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
        </div>
    @endforeach

    <x-dialog-modal wire:model="showModal">
        <x-slot name="title">
            {{ __('Adicionar Anotação') }}
        </x-slot>

        <x-slot name="content">
            <div class="flex flex-col gap-8 bg-gray-50 rounded-lg p-4 h-[9rem] overflow-auto ">
                <div class="flex flex-col justify-start gap-1">
                    <div class="flex justify-between">
                        <span class="text-xs font-bold">Rafael Butler - 15:30 (You)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-ellipsis">
                            <circle cx="12" cy="12" r="1"/>
                            <circle cx="19" cy="12" r="1"/>
                            <circle cx="5" cy="12" r="1"/>
                        </svg>
                    </div>
                    <span class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at atque, aut cumque.</span>
                </div>

                <div class="flex flex-col gap-1">
                    <div class="flex rtl:flex-row-reverse justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-ellipsis">
                            <circle cx="12" cy="12" r="1"/>
                            <circle cx="19" cy="12" r="1"/>
                            <circle cx="5" cy="12" r="1"/>
                        </svg>
                        <span class="text-xs font-bold">Rafael Butler - 15:30</span>
                    </div>
                    <span class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at atque, aut cumque.</span>
                </div>

                <div class="flex flex-col gap-1">
                    <div class="flex justify-between">
                        <span class="text-xs font-bold">Rafael Butler - 15:30</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-ellipsis">
                            <circle cx="12" cy="12" r="1"/>
                            <circle cx="19" cy="12" r="1"/>
                            <circle cx="5" cy="12" r="1"/>
                        </svg>
                    </div>
                    <span class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at atque, aut cumque.</span>
                </div>

            </div>

        </x-slot>

        <x-slot name="footer">
            <div class="flex items-center justify-between w-full gap-4 ">

                <div class="w-full">
                    <textarea type="text" wire:model="text" id="text" class="block text-sm rounded-lg w-full mt-1"
                              placeholder="Digite..."
                              rows="1" cols="3"></textarea>
                    <x-input-error for="text" class="mt-2"/>
                </div>

                <button class="bg-indigo-500 text-white p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-send-horizontal">
                        <path d="m3 3 3 9-3 9 19-9Z"/>
                        <path d="M6 12h16"/>
                    </svg>
                </button>
            </div>

            {{--                    <x-secondary-button wire:click="$set('showModalAdd', false)">--}}
            {{--                        {{ __('Cancelar') }}--}}
            {{--                    </x-secondary-button>--}}

            {{--                    <x-button class="ml-2" wire:click="createNote">--}}
            {{--                        {{ __('Salvar') }}--}}
            {{--                    </x-button>--}}
        </x-slot>
    </x-dialog-modal>
</div>
