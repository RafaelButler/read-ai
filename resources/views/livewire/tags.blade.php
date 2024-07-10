<div class="flex flex-col items-start gap-3">
    <div class="flex gap-8">
        <button wire:click="addTag" class="flex hover:bg-white px-4 rounded-lg items-center text-sm"
                wire:click="addTag">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-plus text-gray-500 mr-1">
                <path d="M5 12h14"/>
                <path d="M12 5v14"/>
            </svg>
            Tag
        </button>

        @if($showAddTag)
            <div>
                <div class="flex bg-gray-50 px-2 rounded-lg text-gray-500 items-center gap-3">
                    <div class="w-3 h-3 rounded-full" :style="'background-color: ' + '{{ $color }}'">
                    </div>
                    <x-input
                        class="bg-transparent w-[4.5rem] h-4 py-1 focus:ring-gray-50 focus:border-gray-50 border-0 border-x-0"
                        type="text"
                        x-on:blur="$wire.saveTag()"
                        x-on:keyup.enter="$wire.saveTag()"
                        wire:model="name"
                        autofocus
                        placeholder="Tag..."/>
                </div>
            </div>
        @endif
    </div>

    <div class="flex flex-wrap gap-2">
        @foreach($allTags as $tag)
            <x-dropdown align="left">
                <x-slot:trigger>
                    <div
                        class="flex bg-gray-50 hover:bg-white px-3 text-xs w-fit rounded-lg cursor-pointer items-center gap-4">
                        <div
                            class="w-3 h-3 rounded-full"
                            :style="'background-color: ' + '{{ $tag->color }}'"
                        >
                        </div>
                        @if($editTagId === $tag->id)
                            <x-input
                                class="bg-transparent text-xs h-4 w-[4.5rem] py-1 focus:boring-gray-50 dark:focus:boring-gray-50 focus:ring-gray-50 dark:focus:ring-gray-50 border-0 border-x-0"
                                style="width: 4.5rem;"
                                type="text"
                                x-on:blur="$wire.updateTagName('{{ $tag->id }}')"
                                x-on:click.away="$wire.updateTagName('{{ $tag->id }}')"
                                x-on:keyup.enter="$wire.updateTagName('{{ $tag->id }}')"
                                wire:model="name"
                                autofocus
                                placeholder="Renomear..."/>
                        @else
                            <span>{{ $tag->name }}</span>
                        @endif
                    </div>
                </x-slot:trigger>

                <x-slot name="content">
                    <div class="p-4">
                        <div class="flex flex-wrap gap-1 border-b pb-2 w-full">
                            @foreach($colors as $color)
                                <div
                                    class="w-4 h-4 rounded-full cursor-pointer"
                                    :style="'background-color: ' + '{{ $color }}'"
                                    wire:click="updateTagColor('{{ $tag->id }}', '{{ $color }}')"
                                >
                                </div>
                            @endforeach
                        </div>

                        <div class="w-full mt-4">
                            <div class="p-2 hover:bg-gray-100 rounded-lg" wire:click="editTag('{{ $tag->id }}')">
                                <button class="flex gap-2 text-xs w-full items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-square-pen">
                                        <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path
                                            d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"/>
                                    </svg>
                                    Renomear
                                </button>
                            </div>
                            <div class="p-2 rounded-lg hover:text-red-500 hover:bg-red-100 items-center">
                                <button wire:click="removeTag('{{ $tag->id }}')"
                                        class="flex gap-2 text-red-500 w-full text-xs ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-trash text-red-500">
                                        <path d="M3 6h18"/>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                                    </svg>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </x-slot>
            </x-dropdown>
        @endforeach
    </div>
</div>
