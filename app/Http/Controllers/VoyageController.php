<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voyages = Voyage::all();
        return view('voyage.index', ['voyages' => $voyages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voyage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'resume' => 'required',
            'continent' => 'required',
            'visuel' => 'required',
        ]);

        $voyage = new Voyage();
        $voyage->titre = $request->titre;
        $voyage->description = $request->description;
        $voyage->resume = $request->resume;
        $voyage->continent = $request->continent;
        //$voyage->user_id = auth()->id();
        $voyage->user_id = 2;
        $voyage->en_ligne = 0;
        $voyage->visuel = $request->visuel;
        $voyage->save();

        return redirect()->route('voyage.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
