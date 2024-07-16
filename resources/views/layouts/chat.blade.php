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
        class="hidden bg-gray-50 transition-all pl-[60px] xl:flex sm:flex-col min-h-screen md:w-1/3 lg:w-1/4 border-r border-r-gray-200 shadow p-6"
    >
        <div class="flex items-center justify-between pb-4 border-b">
            <h2 class="font-semibold">Assistente</h2>
            <button @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-panel-right">
                    <rect width="18" height="18" x="3" y="3" rx="2"/>
                    <path d="M15 3v18"/>
                </svg>
            </button>
        </div>

        <livewire:list-chat/>
    </div>

    <main class="flex flex-col w-full h-full gap-4 p-4"
          :class="{ 'md:w-2/3 lg:w-3/4': open, 'md:w-full lg:w-full sm:pl-14': !open }">
        @livewire('navigation-chat-menu')


        {{ $slot }}
    </main>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
