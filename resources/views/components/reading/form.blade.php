<div>
    <form class="flex flex-col gap-3">
        <div class="grid grid-cols-3 gap-4 items-center">
            <div>
                <x-label for="title" value="{{ __('Título') }}"/>
                <x-input wire:model="title" id="title" placeholder="Guerra e Paz"/>
                <x-input-error for="title"/>
            </div>
            <div>
                <x-label for="author" value="{{ __('Autor') }}"/>
                <x-input wire:model="author" id="author" placeholder="Liev Tostoi"/>
                <x-input-error for="author"/>
            </div>
            <div>
                <x-label for="gender_author" value="{{ __('Gênero do Autor') }}"/>
                <x-select wire:model="gender_author" id="gender">
                    <option class="bg-gray-400" value=" ">Selecione...</option>
                    <option class="bg-gray-400" value="male">Masculino</option>
                    <option class="bg-gray-400" value="female">Feminino</option>
                    <option class="bg-gray-400" value="other">Outro</option>
                </x-select>
                <x-input-error for="gender_author"/>
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
                <x-label for="format" value="{{ __('Formato') }}"/>
                <x-select wire:model="format" id="format">
                    <option class="bg-gray-400" value=" ">Selecione...</option>
                    <option class="bg-gray-400" value="basic">Físico</option>
                    <option class="bg-gray-400" value="ebook">Digital</option>
                    <option class="bg-gray-400" value="audiobook">Audiobook</option>
                </x-select>
                <x-input-error for="format"/>
            </div>
            <div>
                <x-label for="gender_literary" value="{{ __('Gênero Literario') }}"/>
                <x-select wire:model="gender_literary" id="format">
                    <option class="bg-gray-400" value=" ">
                        Selecionar...
                    </option>
                    <option class="bg-gray-400" value="romance">
                        Romance
                    </option>
                    <option class="bg-gray-400" value="fiction">
                        Ficção
                    </option>
                    <option class="bg-gray-400" value="not-fiction">
                        Não Ficção
                    </option>
                    <option class="bg-gray-400" value="utopia">
                        Utopia/Distopia
                    </option>
                    <option class="bg-gray-400" value="other">
                        Outro
                    </option>
                </x-select>
            </div>
            <div>
                <x-label for="note" value="{{ __('Nota') }}"/>
                <x-input wire:model="note" id="note" type="number" min="0" max="10" placeholder="10"/>
                <x-input-error for="note"/>
            </div>
        </div>

    </form>
</div>
