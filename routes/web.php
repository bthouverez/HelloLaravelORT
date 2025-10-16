<?php

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



Route::get('/articles', function() {
    // récupère tous les articles
    $articles = Article::all();
    // envoie a une vue
    return view('index', compact('articles'));
});

Route::get('/articles/create', function() {
    return view('create');
});

Route::get('/articles/{id}', function($id) {
    // récupérer 1 seul article
    $article = Article::findOrFail($id);
    // envoyer a une vue
    return view('show', compact('article'));
});

Route::post('/articles', function() {
    // valider les données
    request()->validate([
        'title' => 'required|min:5|max:50',
        'content' => 'required',
    ]);

    // données validées
    $a = new Article;
    $a->title = request('title');
    $a->content = request('content');
    $a->picture = request('picture');
    $a->published_at = date('Y-m-d h:i:s');
    $a->save();
    return redirect('/articles/'.$a->id);
});

Route::get('/articles/{id}/edit', function($id) {
    $article = Article::findOrFail($id);
    return view('edit', compact('article'));
});

Route::patch('/articles/{id}', function($id) {

    // valider les données
    request()->validate([
        'title' => 'required|min:5|max:50',
        'content' => 'required',
    ]);

    // données validées
    $a = Article::find($id);
    $a->title = request('title');
    $a->content = request('content');
    $a->picture = request('picture');
    $a->save();
    return redirect('/articles/'.$a->id);
});

Route::delete('/articles/{id}', function($id) {
   $article = Article::findOrFail($id);
   $article->delete();
   return redirect('/articles');
});
