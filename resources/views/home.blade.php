<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased h-screen">

<div class="w-full border-b border-gray-300 p-6">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="flex gap-2 text-lg font-bold select-none">
            <x-application-mark class="block h-6 w-fit"/>
            ApoloAI
        </div>

        <a href="{{ route('login') }}" wire:navigate>
            <x-button class="mt-4 text-2xl uppercase">
                Entrar
            </x-button>
        </a>
    </div>
</div>

<div class="max-w-7xl mx-auto h-full flex items-center justify-center p-4 lg:p-8 relative z-10">
    {{--    <div--}}
    {{--        class="absolute top-[35%] left-0 bg-gradient-to-r from-gray-200 to-indigo-500 w-full h-[100px] md:h-[500px] md:w-[500px] -z-10 rotate-45 rounded-full blur-3xl opacity-45"></div>--}}

    {{--    <div--}}
    {{--        class="absolute top-[20%] right-0 bg-gradient-to-r from-gray-200 to-indigo-500 w-full h-[100px] md:h-[500px] md:w-[500px] -z-10 rotate-45 rounded-full blur-3xl opacity-45"></div>--}}

    <div class="flex flex-col">
        <div class="text-gray-800">
            <div class="text-left lg:text-center font-bold">
                <h1 class="text-2xl lg:text-5xl">Obtenha sucesso ao analisar os jogos</h1>
                <h1 class="text-2xl lg:text-5xl">O <span class="text-gray-600">sucesso na sua análise</span></h1>

                <div class="flex justify-center mt-4 text-gray-400">
                    <p class="lg:max-w-3xl text-base">
                        Você pode analisar os jogos de futebol e ter sucesso nas suas apostas.
                        Obtenha os dados em tempo real e tenha sucesso nas suas apostas.
                    </p>
                </div>

                <a href="{{ route('login') }}" wire:navigate>
                    <x-button class="mt-4 text-2xl uppercase">
                        Acessar
                    </x-button>
                </a>

            </div>
        </div>
        {{--        <img class="w-full rounded-lg border mt-12 shadow mx-auto border-t border-t-gray-100 h-full"--}}
        {{--             src="{{ getenv('APP_URL') . ':8000/dashboard.png' }}"--}}
        {{--             alt="ApoloAI"/>--}}
    </div>
</div>

@livewireScripts
</body>
</html>
