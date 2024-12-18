<?php
namespace App\Http\Controllers;

use App\Models\Etape;
use App\Models\Media;
use Illuminate\Http\Request;

class EtapeController extends Controller
{
    public function index(){
        $etapes = Etape::all();
        return view('etape.index', compact('etapes'));
    }

    public function create(){
        return view('etape.create');
    }

    public function store(Request $request){
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'resume' => 'required|string',
            'debut' => 'required|date',
            'fin' => 'required|date',
            'media_url' => 'required|url',
        ]);

        $etape = new Etape();
        $etape->titre = $request->titre;
        $etape->description = $request->description;
        $etape->resume = $request->resume;
        $etape->debut = $request->debut;
        $etape->fin = $request->fin;
        $etape->voyage_id = 1;
        $etape->save();

        $media = new Media();
        $media->titre = $request->titre;
        $media->url = $request->media_url;
        $media->format = 'image';
        $media->etape_id = $etape->id;
        $media->save();

        return redirect()->route('etape.index');
    }

    public function show(Etape $etape){
        $media=Media::where('etape_id', $etape->id)->first();
        return view('etape.show', compact('etape', 'media'));
    }

    public function edit(Etape $etape){
        return view('etape.edit', compact('etape'));
    }

    public function update(Request $request, Etape $etape){
        $etape->update($request->all());
        return redirect()->route('etape.show', $etape);
    }

    public function destroy(Etape $etape){
        $etape->delete();
        return redirect()->route('etape.index');
    }
}
