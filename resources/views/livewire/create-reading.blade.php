<div>
    <div class="w-full flex flex-1 gap-2 justify-end mb-4 text-right">
        <x-secondary-button>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-list-filte mr-1">
                <path d="M3 6h18"/>
                <path d="M7 12h10"/>
                <path d="M10 18h4"/>
            </svg>
            Filtrar
        </x-secondary-button>
        <x-secondary-button>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-file mr-1">
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/>
                <path d="M14 2v4a2 2 0 0 0 2 2h4"/>
            </svg>
            Exportar
        </x-secondary-button>
        <x-button wire:click="showModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-plus mr-1">
                <path d="M5 12h14"/>
                <path d="M12 5v14"/>
            </svg>
            Adicionar
        </x-button>
    </div>

    <div class="max-h-[38.5rem]">
        <div class="relative ">
            <x-shred.table :readings="$readings" :tags="$tags"/>

            {{-- Customize fonts of links paginate --}}
            <div class="custom-pagination mt-4">
                {{ $readings->links('components.paginator') }}
            </div>
        </div>
    </div>

    <x-dialog-modal wire:model="showAddModal">
        <x-slot name="title">
            {{ __('Adicionar Leitura') }}
        </x-slot>

        <x-slot name="content">
            <x-reading.form/>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('showAddModal', false)">
                {{ __('Cancelar') }}
            </x-secondary-button>

            <x-button class="ml-2" wire:click="createReading">
                {{ __('Salvar') }}
            </x-button>
        </x-slot>

    </x-dialog-modal>

    <x-dialog-modal wire:model="showEditModal">
        <x-slot name="title">
            {{ __('Editar Leitura') }}
        </x-slot>

        <x-slot name="content">
            <x-reading.form/>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click.prevent="$set('showAddModal', false)">
                {{ __('Cancelar') }}
            </x-secondary-button>

            <x-button class="ml-2" wire:click.prevent="updateReading">
                {{ __('Salvar') }}
            </x-button>
        </x-slot>

    </x-dialog-modal>

    <x-confirmation-modal wire:model="showDeleteModal">
        <x-slot name="title">
            {{ __('Deletar Leitura') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Você tem certeza que deseja deletar esta leitura?') }}
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click.prevent="$set('showDeleteModal', false)">
                {{ __('Cancelar') }}
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click.prevent="deleteReading">
                {{ __('Deletar') }}
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>

    <livewire:recommendation/>
</div>
