@extends('layouts.app')

@section('title', 'Editar Pel·lícula - LaravelTinkering')

@section('content-background', 'bg-green-100')

@section('content')
    <!-- Encabezado -->
    <div class="bg-green-100 p-6">
        <div class="card bg-green-50 w-auto shadow-xl m-4">
            <div class="card-body">
                <!-- Título del formulario -->
                <div class="mb-4">
                    <h1 class="text-xl font-bold">Editar Pel·lícula: {{ $film->title }}</h1>
                </div>
                <hr class="w-full border-black mb-4">

                <!-- Formulario -->
                <form action="{{ route('films.update', $film->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Título -->
                    <div>
                        <label for="title" class="block text-sm font-semibold text-green-800">Títol</label>
                        <input type="text" id="title" name="title" class="bg-green-200 input input-bordered w-full" maxlength="60" value="{{ old('title', $film->title) }}" required>
                    </div>

                    <!-- Descripción -->
                    <div>
                        <label for="description" class="block text-sm font-semibold text-green-800">Descripció</label>
                        <textarea id="description" name="description" class="bg-green-200 textarea textarea-bordered w-full" maxlength="255" rows="4">{{ old('description', $film->description) }}</textarea>
                    </div>

                    <!-- Año de Lanzamiento -->
                    <div>
                        <label for="release_year" class="block text-sm font-semibold text-green-800">Any de Lançament</label>
                        <input type="date" id="release_year" name="release_year" class="bg-green-200 input input-bordered w-full" value="{{ old('release_year', $film->release_year) }}" required>
                    </div>

                    <!-- Duración -->
                    <div>
                        <label for="length" class="block text-sm font-semibold text-green-800">Duració (en minuts)</label>
                        <input type="number" id="length" name="length" class="bg-green-200 input input-bordered w-full" value="{{ old('length', $film->length) }}" max="999" required>
                    </div>

                    <!-- Valoración -->
                    <div>
                        <label for="rating" class="block text-sm font-semibold text-green-800">Valoració</label>
                        <input type="number" id="rating" name="rating" class="bg-green-200 input input-bordered w-full" value="{{ old('rating', $film->rating) }}" step="0.01" min="0" max="10" required>
                    </div>

                    <!-- Botón de envío -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-green">Actualizar Pel·lícula</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
