<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Cat::all();
        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'color' => 'required|string|max:255',
            'castrated' => 'required|boolean',
            'vaccinated' => 'required|boolean',
        ]);

        Cat::create($request->all());

        return redirect()->route('cats.index')
            ->with('success', 'Cat created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cat = Cat::find($id);
        return view('cats.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cat = Cat::find($id);
        return view('cats.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'color' => 'required|string|max:255',
            'castrated' => 'required|boolean',
            'vaccinated' => 'required|boolean',
        ]);

        $cat = Cat::find($id);
        $cat->update($request->all());

        return redirect()->route('cats.index')
            ->with('success', 'Cat updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cat = Cat::find($id);
        $cat->delete();

        return redirect()->route('cats.index')
            ->with('success', 'Cat deleted successfully');
    }
}
