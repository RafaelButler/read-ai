<div
    class="p-4 border-l h-fit bg-gray-50 rounded-lg hover:bg-white border-l-green-600"
>

    <div
        class="flex items-center justify-between"
    >
        <h4 class="text-sm font-semibold text-gray-500">
            {{ $title }}
        </h4>

        <div>
            {{ $actions }}
        </div>
    </div>


    <p class="text-xs mt-2">
        {{ $body }}
    </p>

    <div class="flex items-center gap-2 mt-2">
        {{ $footer }}
    </div>
</div>
