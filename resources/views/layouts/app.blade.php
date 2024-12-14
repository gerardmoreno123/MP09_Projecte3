<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaravelTinkering')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-300 text-gray-900 flex flex-col min-h-screen"> <!-- Fondo gris neutro para toda la página -->

<!-- Navbar -->
<nav id="navbar" class="bg-gray-800 text-white shadow-lg fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo o Título -->
        <a href="{{ url('/') }}" class="text-2xl font-bold">
            LaravelTinkering
        </a>
        <!-- Links del Navbar -->
        <div class="flex space-x-4">
            <a href="{{ route('films.index') }}" class="btn btn-ghost hover:bg-indigo-700">
                CRUD de Pel·lícules
            </a>
            <a href="{{ route('cats.index') }}" class="btn btn-ghost hover:bg-indigo-700">
                CRUD de Gats
            </a>
        </div>
    </div>
</nav>

<!-- Hero Section o Contenido Principal -->
<div class="pt-20 flex-grow @yield('content-background')"> <!-- Asignar un fondo dinámico aquí -->
    @yield('content')
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-6 text-center mt-auto">
    <p>&copy; 2024 Gerard Moreno Campos. Tots els drets reservats.</p>
</footer>
</body>
</html>
