<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // 7 resource controller actions
    public function index()
    {
        $articles = Article::all();
        return view('index', compact('articles'));
    }

    public function create()
    {
        return view('create');
    }

    public function show(Article $article) {
        return view('show', compact('article'));
    }

    public function store() {
        request()->validate([
            'title' => 'required|min:5|max:50',
            'content' => 'required',
        ]);

        $a = new Article;
        $a->title = request('title');
        $a->content = request('content');
        $a->picture = request('picture');
        $a->published_at = date('Y-m-d h:i:s');
        $a->save();

        return redirect('/articles/'.$a->id);
    }

    public function edit(Article $article) {
        return view('edit', compact('article'));
    }

    public function update(Article $article) {
        request()->validate([
            'title' => 'required|min:5|max:50',
            'content' => 'required',
        ]);
        $article->title = request('title');
        $article->content = request('content');
        $article->picture = request('picture');
        $article->save();
        return redirect('/articles/'.$article->id);
    }

    public function destroy(Article $article) {
        $article->delete();
        return redirect('/articles');
    }
}
