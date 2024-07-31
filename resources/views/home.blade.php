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

<div class="w-full border-b border-gray-300 p-6">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="flex items-center gap-2 text-lg font-bold select-none">
            <x-application-mark class="block h-6 w-fit"/>
            LeituraAI
        </div>

        <a href="{{ route('login') }}" wire:navigate>
            <x-button class="mt-4 text-2xl uppercase">
                Entrar
            </x-button>
        </a>
    </div>
</div>

<div class="max-w-7xl mx-auto mt-10 mb-12 flex items-center justify-center p-4 lg:p-8 relative z-10">
    <!-- <div class="absolute top-[35%] left-0 bg-gradient-to-r from-gray-200 to-indigo-500 w-full h-[100px] md:h-[500px] md:w-[500px] -z-10 rotate-45 rounded-full blur-3xl opacity-45"></div>

    <div class="absolute top-[20%] right-0 bg-gradient-to-r from-gray-200 to-indigo-500 w-full h-[100px] md:h-[500px] md:w-[500px] -z-10 rotate-45 rounded-full blur-3xl opacity-45"></div> -->

    <div class="flex flex-col">
        <div class="text-gray-800">
            <div class="text-left lg:text-center font-bold">
                <h1 class="text-2xl lg:text-5xl">
                    Conecte suas leituras de
                </h1>
                <h1 class="text-2xl lg:text-5xl"><span class="text-gray-700">maneira muito simples</span></h1>

                <div class="flex md:justify-center mt-4 text-gray-500">
                    <p class="lg:max-w-3xl text-base">
                        Registre, anote, e relacione os assuntos de suas <br/> leituras com um clique.
                    </p>
                </div>

                <a href="{{ route('login') }}" wire:navigate>
                    <x-button class="mt-4 text-2xl uppercase">
                        Acessar Agora
                    </x-button>
                </a>

            </div>
        </div>
        <img class="w-full rounded-lg border mt-12 shadow mx-auto border-t border-t-gray-100 h-full"
             src="{{ getenv('APP_URL') . ':8000/dashboard.png' }}" alt="ApoloAI"/>
    </div>
</div>

<section class="max-w-7xl flex flex-col justify-center h-full items-center mx-auto p-4 md:mt-26">
    <h3 class="text-sm text-indigo-800 font-bold">Features</h3>
    <h4 class="text-3xl text-center mt-1 font-bold text-gray-800">
        Transforme seus livros em <br/> uma experiência ainda mais enriquecedora
    </h4>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 my-28">
        <div>
            <h4 class="text-2xl font-bold mb-2">
                Anotações
            </h4>
            <p class="text-base text-gray-500">
                Anote citações, trechos, ideias, marque cada leitura e obtenha uma histórico detalhado.
            </p>
            <ul class="mt-3 text-indigo-500 font-medium list-disc ml-6">
                <li>Tag suas leituras</li>
                <li>Mantenha um histórico personalizado</li>
                <li>Anote trechos importantes</li>
            </ul>
        </div>


        <img class="w-full rounded-lg border shadow mx-auto border-t border-t-gray-100 h-full"
             src="{{ getenv('APP_URL') . ':8000/notas.png' }}" alt="ApoloAI"/>
    </div>

</section>


<section class="max-w-7xl flex flex-col justify-center h-full items-center mx-auto md:my-28">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-12">
        <img class="w-full rounded-lg border shadow mx-auto border-t border-t-gray-100 h-full"
             src="{{ getenv('APP_URL') . ':8000/chat.png' }}" alt="ApoloAI"/>

        <div class="text-left">
            <h4 class="text-2xl font-bold mb-2">
                Recomendações
            </h4>

            <p class="text-base text-gray-500">
                A partir do seu histórico de leituras, o LeituraAI é capaz de recomendar novos livros e autores.
            </p>

            <ul class="mt-3 text-indigo-500 font-semibold list-disc ml-6">
                <li>
                    Recomendações personalizadas
                </li>
                <li>
                    Recomendações de autores
                </li>
                <li>
                    Recomendações de livros
                </li>
                <li>E muito mais!</li>
            </ul>

        </div>

    </div>

</section>

<section class="max-w-7xl flex flex-col justify-center h-full items-center mx-auto p-4 md:mt-26">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 my-28">
        <div>
            <h4 class="text-2xl font-bold mb-2">
                Análises
            </h4>

            <p class="text-base text-gray-500">
                Aprofunde nos temas abordados nos livros com muito mais riqueza de detalhes.
            </p>

            <ul class="mt-3 text-indigo-500 font-medium list-disc ml-6">
                <li>
                    Estrutura dos textos
                </li>
                <li>
                    Contexto histórico
                </li>
                <li>
                    Aprofundamento psicológico dos personagens
                </li>
            </ul>
        </div>


        <img class="w-full rounded-lg border shadow mx-auto border-t border-t-gray-100 h-full"
             src="{{ getenv('APP_URL') . ':8000/analise.png' }}" alt="ApoloAI"/>
    </div>

</section>


<footer
    class="max-w-7xl mx-auto text-center flex border-t flex-col justify-center h-full items-center p-10 mt-26 text-gray-500">
    <div class="grid grid-col-3">
        <div class="flex items-center md:justify-center mb-2 gap-2 text-lg font-bold select-none">
            <x-application-mark class="block h-6 w-fit"/>
            LeituraAI
        </div>

        <p>
            © 2024 LeituraAI. Todos os direitos reservados.
        </p>
    </div>

</footer>

@livewireScripts
</body>

</html>
