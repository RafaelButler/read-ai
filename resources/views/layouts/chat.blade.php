<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
<x-banner/>

<div x-data="{ open: true }" class="h-screen w-full flex flex-col md:flex-row bg-gray-100 dark:bg-gray-900">
    @livewire('aside')
    <div
        x-show="open"
        x-cloak
        class="hidden transition-all pl-[60px] xl:flex sm:flex-col min-h-screen md:w-1/3 lg:w-1/4 bg-white border-r border-r-gray-200 shadow p-6">
        <div class="flex items-center justify-between pb-4 border-b">
            <h2 class="font-semibold">Navigation</h2>
            <button @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-panel-right">
                    <rect width="18" height="18" x="3" y="3" rx="2"/>
                    <path d="M15 3v18"/>
                </svg>
            </button>
        </div>

        <div class="flex flex-col gap-4 mt-8">
            <div class="flex hover:bg-gray-200 rounded-lg p-2 w-full items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-messages-square">
                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"/>
                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/>
                </svg>

                <span class="text-sm text-gray-500">Qual a performance de algo assim ?</span>
            </div>
            <div class="flex hover:bg-gray-200 rounded-lg p-2 w-full items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-messages-square">
                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"/>
                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/>
                </svg>

                <span class="text-xs sm:text-sm text-gray-500">Qual a performance de algo assim ?</span>
            </div>
            <div class="flex hover:bg-gray-200 rounded-lg p-2 w-full items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-messages-square">
                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"/>
                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/>
                </svg>

                <span class="text-xs sm:text-sm text-gray-500">Qual a performance de algo assim ?</span>
            </div>
            <div class="flex hover:bg-gray-200 rounded-lg p-2 w-full items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-messages-square">
                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"/>
                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/>
                </svg>

                <span class="text-xs sm:text-sm text-gray-500">Qual a performance de algo assim ?</span>
            </div>
            <div class="flex hover:bg-gray-200 rounded-lg p-2 w-full items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-messages-square">
                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"/>
                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/>
                </svg>

                <span class="text-xs sm:text-sm text-gray-500">Qual a performance de algo assim ?</span>
            </div>
        </div>
    </div>


    <main class="flex flex-col w-full h-full gap-4 p-4">
        @livewire('navigation-menu')


        {{ $slot }}
    </main>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
