<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $material = Material::find($id);

        if (!$material) {
            // Gestisci il caso in cui il materiale non sia stato trovato
            abort(404);
        }

        return view('materials.edit', compact('material'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $material = Material::findOrFail($id);

        // Valida e aggiorna i dati del materiale
        $validatedData = $request->validate([
            'codice' => 'required|string|max:255',
            'nome' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
            'giacenza' => 'required|integer',
            'giacenza_minima' => 'required|integer',
            'prezzo_unitario' => 'required|numeric',
        ]);

        $material->update($validatedData);

        return redirect()->route('materials.index')->with('success', 'Materiale aggiornato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        //
    }
}
