<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view ('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|min:10',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
        ], [
            'title.required' => 'Il campo del titolo non può essere vuoto',
            'description.required' => 'Il campo della descrizione non può essere vuoto e deve contenere almeno 10 caratteri',
            'thumb.required' => 'Il campo di inserimento del link immagine non può essere vuoto',
            'price.required' => 'Il campo del prezzo non può essere vuoto',
            'series.required' => 'Il campo della serie non può essere vuoto',
            'sale_date.required' => 'Il campo della data non può essere vuoto',
            'type.required' => 'Il campo del titolo non può essere vuoto',
        ]);
        $comicsData = $request->all();
        $comic = new Comic();
        $comic->fill($comicsData);
        $comic->save();
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comicsData = $request->all();
        $comic->update($comicsData);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
