<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Admin</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="/css/app.css">
    @endif
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white dark:bg-gray-800 shadow-lg flex flex-col h-screen p-4">
        <div class="mb-8">
            <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">Utils</span>
        </div>
        <nav class="flex-1">
            <ul class="space-y-4">
                    <!-- Puedes agregar más enlaces aquí -->
                <li><a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a></li>
                <li><a href="#" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 font-medium">QR Generator</a></li>
                <li><a href="#" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 font-medium">Herramientas</a></li>
                <li><a href="#" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 font-medium">Ajustes</a></li>
            </ul>
        </nav>
        <div class="mt-auto">
            <a href="#" class="text-red-500 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 font-medium">Cerrar sesión</a>
        </div>
    </aside>
    <!-- Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header con botón de modo oscuro -->
        <header class="bg-white dark:bg-gray-800 shadow p-4 flex items-center justify-between">
            <h1 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Panel de Administración</h1>
                <button id="theme-toggle" type="button" class="ml-4 p-2 rounded bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors" aria-label="Alternar modo oscuro">
                    <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.22 2.47a1 1 0 011.42 1.42l-.7.7a1 1 0 11-1.42-1.42l.7-.7zM18 9a1 1 0 100 2h-1a1 1 0 100-2h1zM5.64 5.64a1 1 0 10-1.42 1.42l.7.7a1 1 0 101.42-1.42l-.7-.7zM4 10a1 1 0 100 2H3a1 1 0 100-2h1zm1.64 6.36a1 1 0 001.42 1.42l.7-.7a1 1 0 10-1.42-1.42l-.7.7zm8.72 1.42a1 1 0 001.42-1.42l-.7-.7a1 1 0 10-1.42 1.42l.7.7zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1z"></path></svg>
                </button>
            <!-- Aquí puedes agregar acciones rápidas o el usuario logueado -->
        </header>
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
<script>
    // Script para alternar modo oscuro
    const themeToggleBtn = document.getElementById('theme-toggle');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const lightIcon = document.getElementById('theme-toggle-light-icon');

    // Inicializa icono correcto
    function updateThemeIcon() {
        if (document.documentElement.classList.contains('dark')) {
            darkIcon.classList.add('hidden');
            lightIcon.classList.remove('hidden');
        } else {
            lightIcon.classList.add('hidden');
            darkIcon.classList.remove('hidden');
        }
    }

    // Evento de alternar
    themeToggleBtn.addEventListener('click', function() {
        document.documentElement.classList.toggle('dark');
        // Guarda preferencia en localStorage
        if(document.documentElement.classList.contains('dark')){
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
        updateThemeIcon();
    });

    // Al cargar, respeta preferencia
    if(localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)){
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
    updateThemeIcon();
</script>
</body>
</html>
