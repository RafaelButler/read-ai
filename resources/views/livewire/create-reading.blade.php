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
        <x-button wire:click="create">
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
            <x-shred.table/>
        </div>

    </div>

    <x-dialog-modal wire:model="showAddModal">
        <x-slot name="title">
            {{ __('Adicionar Leitura') }}
        </x-slot>

        <x-slot name="content">
            <div class="flex flex-col gap-3">
                <div class="grid grid-cols-3 gap-4 items-center">
                    <div>
                        <x-label for="title" value="{{ __('Título') }}"/>
                        <x-input wire:model="title" id="title" placeholder="Guerra e Paz"/>
                    </div>
                    <div>
                        <x-label for="author" value="{{ __('Autor') }}"/>
                        <x-input wire:model="author" id="author" placeholder="Liev Tostoi"/>
                    </div>
                    <div>
                        <x-label for="gender" value="{{ __('Gênero do Autor') }}"/>
                        <x-select wire:model="format" id="gender">
                            <option class="bg-gray-400" value="male">Masculino</option>
                            <option class="bg-gray-400" value="female">Feminino</option>
                            <option class="bg-gray-400" value="other">Outro</option>
                        </x-select>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 items-center">
                    <div>
                        <x-label for="translator" value="{{ __('Tradutor') }}"/>
                        <x-input wire:model="translator" id="translator" placeholder="Rubens Figuereido"/>
                    </div>
                    <div>
                        <x-label for="pages" value="{{ __('Páginas') }}"/>
                        <x-input wire:model="pages" id="pages" placeholder="1544"/>
                    </div>
                    <div>
                        <x-label for="publisher" value="{{ __('Editora') }}"/>
                        <x-input wire:model="publisher" id="publisher" placeholder="Editora"/>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 items-center">

                    <div>
                        <x-label for="country" value="{{ __('País') }}"/>
                        <x-input wire:model="country" id="country" placeholder="Russia"/>
                    </div>
                    <div>
                        <x-label for="year" value="{{ __('Ano Leitura') }}"/>
                        <x-input wire:model="year" id="year" type="number" placeholder="Ano"/>
                    </div>
                    <div>
                        <x-label for="month" value="{{ __('Mês Leitura') }}"/>
                        <x-input wire:model="month" id="month" placeholder="Mes"/>

                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 items-center">
                    <div>
                        <x-label for="translator" value="{{ __('Formato') }}"/>
                        <x-select wire:model="format" id="format">
                            <option class="bg-gray-400" value="Físico">Físico</option>
                            <option class="bg-gray-400" value="Digital">Digital</option>
                            <option class="bg-gray-400" value="audiobook">Audiobook</option>
                        </x-select>
                    </div>
                    <div>
                        <x-label for="translator" value="{{ __('Gênero Literario') }}"/>
                        <x-select wire:model="format" id="format">
                            <option class="bg-gray-400" value="">
                                Romance
                            </option>
                            <option class="bg-gray-400" value="Digital">
                                Ficção
                            </option>
                            <option class="bg-gray-400" value="audiobook">
                                Não Ficção
                            </option>
                            <option class="bg-gray-400" value="audiobook">
                                Utopia/Distopia
                            </option>
                            <option class="bg-gray-400" value="audiobook">
                                Outro
                            </option>
                        </x-select>
                    </div>
                    <div>
                        <x-label for="pages" value="{{ __('Nota') }}"/>
                        <x-input wire:model="note" id="note" type="number" placeholder="10"/>
                    </div>
                </div>

            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('showAddModal', false)">
                {{ __('Cancelar') }}
            </x-secondary-button>

            <x-button class="ml-2" mode="delete">
                {{ __('Salvar') }}
            </x-button>
        </x-slot>

    </x-dialog-modal>
</div>
