<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\User;
use App\Models\Voyage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class AvisController extends Controller
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
    public function create($voyageId, $userId): Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $voyage = Voyage::findOrFail($voyageId);
        $user = User::findOrFail($userId);
        return view('avis.create', compact('voyage', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $voyageId, $userId)
    {
        $request->validate([
            'contenu' => 'required|string|max:255',
        ]);

        $avis = new Avis();
        $avis->contenu = $request->contenu;
        $avis->user_id = $userId;
        $avis->voyage_id = $voyageId;
        $avis->save();

        return redirect()->route('voyage.show', $voyageId);
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
