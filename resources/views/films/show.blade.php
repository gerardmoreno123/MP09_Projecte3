@extends('layouts.app')

@section('title', 'Pel·lícula - ' . $film->title)

@section('content-background', 'bg-green-100')

@section('content')
    <div class="bg-green-100 p-6">
        <div class="card bg-green-50 w-auto shadow-xl m-4">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <h2 class="text-xl font-bold text-green-800 mr-4">{{ $film->title }}</h2>
                    <a href="{{ route('films.index') }}" class="btn btn-green">Tornar a la llista</a>
                </div>
                <hr class="w-full border-black mb-4">

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-green-800">Any d'estrena:</h3>
                    <p>{{ $film->release_year }}</p>
                </div>

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-green-800">Duració:</h3>
                    <p>{{ $film->length }} minuts</p>
                </div>

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-green-800">Valoració:</h3>
                    <p>{{ $film->rating }}</p>
                </div>

                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-green-800">Descripció:</h3>
                    <p>{{ $film->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
