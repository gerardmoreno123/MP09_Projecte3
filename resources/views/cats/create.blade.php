@extends('layouts.app')

@section('title', 'Crear Gat - LaravelTinkering')

@section('content-background', 'bg-orange-100')

@section('content')
    <div class="bg-orange-100 p-6">
        <div class="card bg-orange-50 w-auto shadow-xl m-4">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <h2 class="text-xl font-bold text-orange-800 mr-4">Crear Gat</h2>
                </div>
                <hr class="w-full border-black mb-4">

                <form action="{{ route('cats.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Nombre -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-orange-800">Nom</label>
                        <input type="text" id="name" name="name" class="bg-orange-200 input input-bordered w-full" value="{{ old('name') }}" required>
                    </div>

                    <!-- Raza -->
                    <div>
                        <label for="breed" class="block text-sm font-semibold text-orange-800">Raça</label>
                        <input type="text" id="breed" name="breed" class="bg-orange-200 input input-bordered w-full" value="{{ old('breed') }}" required>
                    </div>

                    <!-- Edad -->
                    <div>
                        <label for="age" class="block text-sm font-semibold text-orange-800">Edat (en anys)</label>
                        <input type="number" id="age" name="age" class="bg-orange-200 input input-bordered w-full" value="{{ old('age') }}" required>
                    </div>

                    <!-- Color -->
                    <div>
                        <label for="color" class="block text-sm font-semibold text-orange-800">Color</label>
                        <input type="text" id="color" name="color" class="bg-orange-200 input input-bordered w-full" value="{{ old('color') }}" required>
                    </div>

                    <!-- Castrado -->
                    <div>
                        <label for="castrated" class="block text-sm font-semibold text-orange-800">Castrat</label>
                        <select id="castrated" name="castrated" class="bg-orange-200 input input-bordered w-full">
                            <option value="1" {{ old('castrated') == 1 ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ old('castrated') == 0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <!-- Vacunado -->
                    <div>
                        <label for="vaccinated" class="block text-sm font-semibold text-orange-800">Vacunat</label>
                        <select id="vaccinated" name="vaccinated" class="bg-orange-200 input input-bordered w-full">
                            <option value="1" {{ old('vaccinated') == 1 ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ old('vaccinated') == 0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <!-- Botón de envío -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-orange">Crear Gat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
