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
