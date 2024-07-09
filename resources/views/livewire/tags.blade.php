<div class="flex flex-col items-start gap-3">
    <div class="flex gap-8">
        <button wire:click="addTag" class="flex hover:bg-white p-2 rounded-lg items-center text-sm"
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
                <div class="flex bg-gray-50 px-2 py-1 rounded-lg text-gray-500 items-center gap-3">
                    <div class="w-3 h-3 rounded-full bg-red-200">

                    </div>
                    <x-input
                        class="bg-transparent w-[6rem] focus:ring-gray-50 focus:border-gray-50 border-0 border-x-0"
                        type="text"
                        x-on:blur="$wire.saveTag()"
                        x-on:keyup.enter="$wire.saveTag()"
                        wire:model="name"
                        placeholder="tag..."/>
                </div>
            </div>
        @endif
    </div>

    <div class="flex flex-wrap gap-2">
        @foreach($allTags as $tag)
            <div class="flex bg-gray-50 hover:bg-white px-3 text-xs w-fit rounded-lg cursor-pointer items-center gap-4">
                <div
                    class="w-3 h-3 rounded-full"
                    :style="'background-color: ' + '{{ $tag->color }}'"
                >
                </div>
                <span>{{ $tag->name }}</span>
            </div>
        @endforeach

    </div>
</div>
