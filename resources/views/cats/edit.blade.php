@extends('layouts.app')

@section('title', 'Editar Gat - LaravelTinkering')

@section('content-background', 'bg-orange-100')

@section('content')
    <div class="bg-orange-100 p-6">
        <div class="card bg-orange-50 w-auto shadow-xl m-4">
            <div class="card-body">
                <div class="mb-4">
                    <h1 class="text-xl font-bold text-orange-800">Editar Gat: {{ $cat->name }}</h1>
                </div>
                <hr class="w-full border-black mb-4">

                <!-- Formulario -->
                <form action="{{ route('cats.update', $cat->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Nombre -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-orange-800">Nom</label>
                        <input type="text" id="name" name="name" class="bg-orange-200 input input-bordered w-full" maxlength="60" value="{{ old('name', $cat->name) }}" required>
                    </div>

                    <!-- Raça -->
                    <div>
                        <label for="breed" class="block text-sm font-semibold text-orange-800">Raça</label>
                        <input type="text" id="breed" name="breed" class="bg-orange-200 input input-bordered w-full" maxlength="60" value="{{ old('breed', $cat->breed) }}" required>
                    </div>

                    <!-- Edat -->
                    <div>
                        <label for="age" class="block text-sm font-semibold text-orange-800">Edat (en anys)</label>
                        <input type="number" id="age" name="age" class="bg-orange-200 input input-bordered w-full" value="{{ old('age', $cat->age) }}" min="0" required>
                    </div>

                    <!-- Color -->
                    <div>
                        <label for="color" class="block text-sm font-semibold text-orange-800">Color</label>
                        <input type="text" id="color" name="color" class="bg-orange-200 input input-bordered w-full" maxlength="50" value="{{ old('color', $cat->color) }}" required>
                    </div>

                    <!-- Castrat -->
                    <div>
                        <label for="castrated" class="block text-sm font-semibold text-orange-800">Castrat</label>
                        <select id="castrated" name="castrated" class="bg-orange-200 select select-bordered w-full">
                            <option value="1" {{ old('castrated', $cat->castrated) == 1 ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ old('castrated', $cat->castrated) == 0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <!-- Vacunat -->
                    <div>
                        <label for="vaccinated" class="block text-sm font-semibold text-orange-800">Vacunat</label>
                        <select id="vaccinated" name="vaccinated" class="bg-orange-200 select select-bordered w-full">
                            <option value="1" {{ old('vaccinated', $cat->vaccinated) == 1 ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ old('vaccinated', $cat->vaccinated) == 0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <!-- Botón de envío -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-orange">Actualizar Gat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
