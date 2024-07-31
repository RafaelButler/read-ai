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

<body class="font-sans antialiased">

<div class="w-full py-12">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="flex items-center gap-2 text-lg font-bold select-none">
            <x-application-mark class="block h-6 w-fit"/>
            LeituraAI
        </div>

        <a href="{{ route('login') }}" wire:navigate>
            <x-button class="mt-4 px-4 py-2 text-2xl uppercase">
                Entrar
            </x-button>
        </a>
    </div>
</div>

<div class="flex-auto">
    <div class="max-w-7xl mx-auto mt-10 mb-12 flex items-center justify-center p-4 lg:p-8 relative z-10">
        {{--        <div--}}
        {{--            class="absolute top-[35%] left-0 bg-gradient-to-r from-gray-200 to-indigo-500 w-full h-[100px] md:h-[500px] md:w-[500px] -z-10 rotate-45 rounded-full blur-3xl opacity-45"></div>--}}
        <div
            class="absolute top-[20%] right-0 bg-gradient-to-r from-indigo-200 to-indigo-500 w-full h-[100px] md:h-[500px] md:w-[500px] -z-10 rounded-full blur-3xl opacity-20 animate-spin-slow"></div>

        <div class="grid items-center grid-cols-2">
            <div class="flex flex-col items-start">
                <div class="text-gray-800">
                    <div class="text-left font-bold">
                        <h1 class="text-4xl">
                            Conecte suas leituras de maneira muito simples
                        </h1>

                        <div class="flex mt-4 text-gray-400">
                            <p class="lg:max-w-3xl text-lg">
                                Registre, anote, e relacione os assuntos que leu <br/> em apenas um lugar.
                            </p>
                        </div>

                        <a href="{{ route('login') }}" wire:navigate>
                            <x-button class="mt-4 px-4 py-4 text-2xl uppercase">
                                Acessar Agora
                            </x-button>
                        </a>

                    </div>
                </div>
                {{--        <img class="w-full rounded-lg border mt-12 shadow mx-auto border-t border-t-gray-100 h-full"--}}
                {{--             src="{{ getenv('APP_URL') . ':8000/dashboard.png' }}" alt="ApoloAI"/>--}}
            </div>

            <div>
                <img class="w-full rounded-lg border mt-12 shadow mx-auto border-t border-t-gray-100 h-full"
                     src="{{ getenv('APP_URL') . ':8000/dashboard.png' }}" alt="ApoloAI"/>
            </div>
        </div>

    </div>
</div>

@livewireScripts
</body>

</html>
