<?php

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

Route::get('/equipes', function () {
    $teamMembers = [
        'PEUVREL Noah',
        'DALMASSO Mathéo',
        'LEPERS Sharleen',
        'CORNET Benjamin',
        'DELTOUR Léa',
        'LESTRIEZ Jade',
        'CAILLIERET Simon',
        'MOREL Mathias',
    ];
    return view('equipes', compact('teamMembers'));
})->name('equipes');

