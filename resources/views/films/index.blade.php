@extends('layouts.app')

@section('title', 'Pel·lícules - LaravelTinkering')

@section('content-background', 'bg-green-100')

@section('content')
    <div class="bg-green-100 p-6">
        <div class="card bg-green-50 w-auto shadow-xl m-4">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <h2 class="text-xl font-bold mr-4">Pel·lícules</h2>
                    <input type="text" class="bg-green-200 placeholder-gray-700 input input-bordered" placeholder="Cerca per títol..." id="searchInput" data-table="filmsTable">
                    <div class="flex-grow"></div>
                    <a href="{{ route('films.create') }}" class="btn btn-green">Crear Pel·lícula</a>
                </div>
                <hr class="w-full border-black mb-4">

                <div class="overflow-x-auto">
                    @if($films->isEmpty())
                        <div class="text-center p-6">
                            <p class="text-xl text-gray-700">No hi ha pel·licules registrades!</p>
                        </div>
                    @else
                        <table class="table w-full mt-4 rounded-t-2xl" id="filmsTable">
                            <thead class="bg-green-400 text-white">
                            <tr>
                                <th class="rounded-tl-xl">Títol</th>
                                <th>Any d'estrena</th>
                                <th>Duració</th>
                                <th>Valoració</th>
                                <th class="rounded-tr-xl">Accions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($films as $film)
                                <tr>
                                    <td class="title">{{ $film->title }}</td>
                                    <td>{{ $film->release_year }}</td>
                                    <td>{{ $film->length }} mins</td>
                                    <td>{{ $film->rating }}</td>
                                    <td class="flex space-x-2">
                                        <a href="{{ route('films.show', $film->id) }}" class="btn btn-info btn-sm">Mostrar</a>
                                        <a href="{{ route('films.edit', $film->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <button class="btn btn-error btn-sm" data-url="{{ route('films.destroy', $film->id) }}" onclick="openDeleteModal(this)">Eliminar</button>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div id="deleteModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h3 class="text-xl font-bold mb-4">Confirmar eliminació</h3>
            <p>Estàs segur que vols eliminar aquesta pel·lícula?</p>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="mt-4 flex justify-end">
                    <button type="button" onclick="closeDeleteModal()" class="btn btn-secondary mr-2">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
