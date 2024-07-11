<div
    class="p-4 border-l h-fit bg-gray-50 rounded-lg hover:bg-white hover:cursor-pointer border-l-green-600"
>

    <h4 class="text-sm font-semibold text-gray-500">
        {{ $title }}
    </h4>

    <p class="text-xs mt-2">
        {{ $body }}
    </p>

    <div class="flex items-center gap-2 mt-2">
        <p class="text-xs font-medium text-indigo-500">
            Comentario (0)
        </p>

        <p class="text-xs text-foreground">
            {{ $footer }}
        </p>
    </div>
</div>
