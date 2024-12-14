@extends('layouts.app')

@section('title', 'Gat - ' . $cat->name)

@section('content-background', 'bg-orange-100')

@section('content')
    <div class="bg-orange-100 p-6">
        <div class="card bg-orange-50 w-auto shadow-xl m-4">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <h2 class="text-xl font-bold text-orange-800 mr-4">{{ $cat->name }}</h2>
                    <a href="{{ route('cats.index') }}" class="btn btn-orange">Tornar a la llista</a>
                </div>
                <hr class="w-full border-black mb-4">

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-orange-800">Raça:</h3>
                    <p>{{ $cat->breed }}</p>
                </div>

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-orange-800">Edat:</h3>
                    <p>{{ $cat->age }} anys</p>
                </div>

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-orange-800">Color:</h3>
                    <p>{{ $cat->color }}</p>
                </div>

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-orange-800">Castrat:</h3>
                    <p>{{ $cat->castrated ? 'Sí' : 'No' }}</p>
                </div>

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-orange-800">Vacunat:</h3>
                    <p>{{ $cat->vaccinated ? 'Sí' : 'No' }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
