<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:60',
            'description' => 'nullable|string',
            'release_year' => 'required|date',
            'length' => 'required|integer|min:0',
            'rating' => 'required|numeric|min:0|max:10',
        ]);

        Film::create($request->all());

        return redirect()->route('films.index')
            ->with('success', 'Film created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $film = Film::find($id);
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Film::find($id);
        return view('films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:60',
            'description' => 'nullable|string',
            'release_year' => 'required|date',
            'length' => 'required|integer|min:0',
            'rating' => 'required|numeric|min:0|max:10',
        ]);

        $film = Film::find($id);
        $film->update($request->all());

        return redirect()->route('films.index')
            ->with('success', 'Film updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $film = Film::find($id);
        $film->delete();

        return redirect()->route('films.index')
            ->with('success', 'Film deleted successfully');
    }
}
