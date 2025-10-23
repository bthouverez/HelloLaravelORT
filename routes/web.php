<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
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


Route::resource('articles', ArticleController::class);


Route::get('/test', function() {
    return view('neural-glass');
});
