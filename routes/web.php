<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $greeting = 'Yo ';
    $username = 'Jean-Pierre';
    return view('home', [
        'nom_utilisateur' => $username,
        'greeting' => $greeting
    ]);
});
