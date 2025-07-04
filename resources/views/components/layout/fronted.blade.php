<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18]  flex items-center lg:justify-center min-h-screen flex-col">
        <x-util-jumbotron></x-util-jumbotron>
        <div class="flex items-start justify-center w-full -mt-10 transition-opacity m-0 p-0  opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex w-full justify-center items-center p-0 m-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-0 m-0 w-full max-w-screen-xl">
                   {{ $slot }}
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        @livewireScripts
    </body>
</html>
