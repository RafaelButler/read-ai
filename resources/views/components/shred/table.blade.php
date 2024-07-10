@props(['readings' => []])

<table
    class="w-full rounded-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead
        class="text-sm text-gray-500  bg-transparent dark:bg-gray-700 dark:text-gray-400">
    <tr>
        <th scope="col" class="px-6 py-3">
            Título
        </th>
        <th scope="col" class="px-6 py-3">
            Autor
        </th>
        <th scope="col" class="hidden 2xl:table-cell px-6 py-3">
            Gênero Autor
        </th>
        <th scope="col" class="hidden 2xl:table-cell px-6 py-3">
            Tradutor
        </th>
        <th scope="col" class="hidden 2xl:table-cell px-6 py-3">
            Editora
        </th>
        <th scope="col" class="hidden 2xl:table-cell px-6 py-3">
            País
        </th>
        <th scope="col" class="px-6 py-3">
            Páginas
        </th>
        <th scope="col" class="hidden 2xl:table-cell px-6 py-3">
            Gênero
        </th>
        <th scope="col" class="hidden 2xl:table-cell px-6 py-3">
            Formato
        </th>
        <th>
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($readings as $reading)
        <tr class="bg-transparent text-sm border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row"
                class="px-6 font-medium text-gray-500">
                <div class="flex items-center">
                    <div
                        class="w-3 h-3 mr-2 bg-green-600 rounded-full"
                    ></div>
                    <div
                        class="w-3 h-3 mr-2 bg-yellow-600 rounded-full"
                    ></div>
                    <div
                        class="w-3 h-3 mr-2 bg-red-600 rounded-full"
                    ></div>
                </div>
                {{ $reading->title }}
            </th>
            <td class="px-6 py-4">
                {{ $reading->author }}
            </td>
            <td class="hidden 2xl:table-cell px-6 py-4">
                @switch($reading->gender_author)
                    @case('male')
                        <span class="text-orange-500">Masculino</span>
                        @break
                    @case('female')
                        <span class="text-pink-500">Feminino</span>
                        @break
                    @default
                        <span class="text-gray-500">Outro</span>
                @endswitch
            </td>
            <td class="hidden 2xl:table-cell px-6 py-4">
                @if( $reading->translator)
                    {{ $reading->translator }}
                @else
                    <span class="text-yellow-500">Não informado</span>
                @endif
            </td>
            <td class="hidden 2xl:table-cell px-6 py-4">
                @if($reading->publisher)
                    {{ $reading->publisher }}
                @else
                    <span class="text-yellow-500">Não informado</span>
                @endif
            </td>
            <td class="hidden 2xl:table-cell px-6 py-4">
                @if($reading->country)
                    {{ $reading->country }}
                @else
                    <span class="text-yellow-500">Não informado</span>
                @endif
            </td>
            <td class="px-6 py-4">
                <span
                    :class="{'text-green-500': {{ $reading->pages }} > 500, 'text-yellow-500': {{ $reading->pages }} > 300 && {{ $reading->pages }} < 500, 'text-blue-500': {{ $reading->pages }} < 300 }"
                >
                   {{ $reading->pages }}
                </span>

            </td>
            <td class="hidden 2xl:table-cell px-6 py-4">
                @switch($reading->gender_literary)
                    @case('romance')
                        <span class="text-orange-500">Romance</span>
                        @break
                    @case('not-fiction')
                        <span class="text-blue-500">Não Ficção</span>
                        @break
                    @case('fiction')
                        <span class="text-green-500">Ficção</span>
                        @break
                    @case('utopia')
                        <span class="text-yellow-500">Utopia</span>
                        @break
                    @default
                        <span class="text-gray-500">Outro</span>
                @endswitch
            </td>
            <td class="hidden 2xl:table-cell px-6 py-4">
                @switch($reading->format)
                    @case('basic')
                        <span class="text-green-500">Físico</span>
                        @break
                    @case('ebook')
                        <span class="text-blue-500">Digital</span>
                        @break
                    @case('audiobook')
                        <span class="text-yellow-500">Audiobook</span>
                        @break
                    @default
                        <span class="text-gray-800">Outro</span>
                @endswitch
            </td>
            <td class="px-6 py-4">
                <x-dropdown align="right" width="48">
                    <x-slot:trigger>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="lucide lucide-ellipsis-vertical cursor-pointer">
                            <circle cx="12" cy="12" r="1"/>
                            <circle cx="12" cy="5" r="1"/>
                            <circle cx="12" cy="19" r="1"/>
                        </svg>
                    </x-slot:trigger>

                    <x-slot name="content">
                        <x-dropdown-link wire:click="editModal({{ $reading->id }})"
                                         class="text-xs flex items-center gap-1" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-square-pen">
                                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                <path
                                    d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"/>
                            </svg>
                            Editar
                        </x-dropdown-link>
                        <x-dropdown-link class="text-xs flex items-center gap-1" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-message-circle-more">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
                                <path d="M8 12h.01"/>
                                <path d="M12 12h.01"/>
                                <path d="M16 12h.01"/>
                            </svg>
                            Recomendacoes
                        </x-dropdown-link>
                        <x-dropdown-link
                            wire:click="deleteModal({{ $reading->id }})"
                            class="text-xs flex items-center gap-1 hover:bg-red-200 rounded-md hover:text-red-500"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-trash">
                                <path d="M3 6h18"/>
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                            </svg>
                            Excluir
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{-- Customize fonts of links paginate --}}
<div class="custom-pagination mt-4">
    {{ $readings->links('pagination') }}
</div>

@if(count($readings) === 0)
    <div class="text-center mt-4 p-4">
            <span class="text-center text-xs text-gray-400 mt-4">
                    Não ha registros de leituras
            </span>
    </div>
@endif
