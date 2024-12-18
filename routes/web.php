<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EtapeController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\VoyageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("accueil");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/home', function () {
    return view('dashboard');
})->name("home") -> middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard") -> middleware('auth');
Route::resource('etape', EtapeController::class);

Route::resource('voyage', VoyageController::class);

Route::resource('avis', AvisController::class);

Route::get('voyage/{voyage}/avis/create/{user}', [AvisController::class, 'create'])->name('avis.create');
Route::post('voyage/{voyage}/avis/{user}', [AvisController::class, 'store'])->name('avis.store');
Route::put('voyage/{voyage}/avis/{avis}', [AvisController::class, 'update'])->name('avis.update');
Route::delete('voyage/{voyage}/avis/{avis}', [AvisController::class, 'destroy'])->name('avis.destroy');

Route::resource('users', UserController::class);

Route::post('/etape/create/{voyage_id}', [EtapeController::class, 'store'])->name('etape.store');

Route::get('/etapes/create/{voyage_id}', [EtapeController::class, 'create'])->name('etape.create');
Route::get('/equipes', function () {
    $teamMembers = [
        'PEUVREL Noah - Taches effectuées : Création du logo',
        'DALMASSO Mathéo - Taches effectuées : Création du CRUD de la page d\'accueil',
        'LEPERS Sharleen - Taches effectuées : Créatiion du scénario de la vidéo en anglais',
        'CORNET Benjamin - Taches effectuées : Création du CRUD pour les commentaires',
        'DELTOUR Léa - Taches effectuées : Itinéraire du voyage',
        'LESTRIEZ Jade - Taches effectuées : Maquette figma',
        'CAILLIERET Simon - Taches effectuées : Création du CRUD pour les avis',
        'MOREL Mathias - Taches effectuées : Création du CRUD pour les profils (users) / creation du mcd et mld avec puml',
    ];
    return view('equipes', compact('teamMembers'));
})->name('equipes');


Route::post('voyage/{voyage}/like', [VoyageController::class, 'like'])->name('voyage.like');
