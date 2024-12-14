@extends('layouts.app')

@section('title', 'Gats - LaravelTinkering')

@section('content-background', 'bg-orange-100')

@section('content')
    <div class="bg-orange-100 p-6">
        <div class="card bg-orange-50 w-auto shadow-xl m-4">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <h2 class="text-xl font-bold mr-4">Gats</h2>
                    <input type="text" class="bg-orange-200 placeholder-gray-700 input input-bordered" placeholder="Cerca per nom..." id="searchInput">
                    <div class="flex-grow"></div>
                    <a href="{{ route('cats.create') }}" class="btn btn-orange">Crear Gat</a>
                </div>
                <hr class="w-full border-black mb-4">

                <div class="overflow-x-auto">
                    @if($cats->isEmpty())
                        <div class="text-center p-6">
                            <p class="text-xl text-gray-700">No hi ha gats registrats!</p>
                        </div>
                    @else
                        <table class="table w-full mt-4 rounded-t-2xl" id="catsTable">
                            <thead class="bg-orange-400 text-white">
                            <tr>
                                <th class="rounded-tl-xl">Nom</th>
                                <th>Raça</th>
                                <th>Edat</th>
                                <th>Color</th>
                                <th>Castrat</th>
                                <th>Vacunat</th>
                                <th class="rounded-tr-xl">Accions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($cats as $cat)
                                <tr>
                                    <td class="name">{{ $cat->name }}</td>
                                    <td>{{ $cat->breed }}</td>
                                    <td>{{ $cat->age }} anys</td>
                                    <td>{{ $cat->color }}</td>
                                    <td>{{ $cat->castrated ? 'Sí' : 'No' }}</td>
                                    <td>{{ $cat->vaccinated ? 'Sí' : 'No' }}</td>
                                    <td class="flex space-x-2">
                                        <a href="{{ route('cats.show', $cat->id) }}" class="btn btn-info btn-sm">Mostrar</a>
                                        <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <button class="btn btn-error btn-sm" data-url="{{ route('cats.destroy', $cat->id) }}" onclick="openDeleteModal(this)">Eliminar</button>
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
     es que    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h3 class="text-xl font-bold mb-4">Confirmar eliminació</h3>
            <p>Estàs segur que vols eliminar aquest gat?</p>
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
