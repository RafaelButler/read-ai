<div>
    
    <x-dialog-modal wire:model="modalRecommendation">
        <x-slot name="title">
            {{ __('Recomendações') }}
        </x-slot>

        <x-slot name="content">
            <div class="text-center md:w-[40rem] text-gray-500 dark:text-gray-400">
                Nenhuma recomendação encontrada.
            </div>
        </x-slot>

        <x-slot name="footer">
            <div class="flex items-center">
            </div>
        </x-slot>
    </x-dialog-modal>

</div>
