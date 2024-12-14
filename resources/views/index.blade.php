@extends('layouts.app')

@section('title', 'Inici - LaravelTinkering')

@section('content')
    <!-- Hero Section -->
    <section class="hero flex items-center justify-center min-h-screen bg-gradient-to-br from-blue-600 via-green-600 to-purple-900 text-white relative">
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
        <div class="text-center px-6 py-12 z-10 relative">
            <h1 class="text-5xl font-extrabold mb-6">LaravelTinkering</h1>
            <h2 class="text-2xl font-semibold mb-12">Projecte 3 - Construït amb Laravel</h2>
            <div class="space-x-4">
                <!-- Botón de CRUD de Pel·lícules -->
                <a href="{{ route('films.index') }}">
                    <button class="btn btn-primary px-8 py-4 text-xl font-semibold transition-transform transform hover:scale-105">
                        CRUD de Pel·lícules
                    </button>
                </a>
                <!-- Botón de CRUD de Gats -->
                <a href="{{ route('cats.index') }}">
                    <button class="btn btn-accent px-8 py-4 text-xl font-semibold transition-transform transform hover:scale-105">
                        CRUD de Gats
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-3xl font-extrabold text-gray-800 mb-8">Característiques del projecte</h3>
            <div class="grid md:grid-cols-3 gap-12 px-6">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">Fácil de usar</h4>
                    <p>Una interfície amigable per gestionar les pel·lícules i els gats de manera ràpida i senzilla.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">Totalment funcional</h4>
                    <p>El sistema inclou funcions de CRUD per a crear, llegir, actualitzar i eliminar registres.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">Desenvolupat amb Laravel</h4>
                    <p>Un projecte robust basat en Laravel que ofereix seguretat, escalabilitat i facilitat d'ús.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-3xl font-extrabold text-gray-800 mb-8">Testimonis</h3>
            <div class="flex justify-center space-x-12">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs">
                    <p class="text-lg text-gray-800 mb-4">"Una eina fantàstica per gestionar la meva col·lecció de pel·lícules i gats de manera senzilla i eficient."</p>
                    <h5 class="text-xl font-semibold text-gray-700">Anna P.</h5>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs">
                    <p class="text-lg text-gray-800 mb-4">"M'encanta la facilitat d'ús d'aquest sistema i la seva eficiència per gestionar múltiples registres."</p>
                    <h5 class="text-xl font-semibold text-gray-700">Marc T.</h5>
                </div>
            </div>
        </div>
    </section>

@endsection
