@extends('neural-glass')

@section('title',  __('Tous les articles'))

@section('main')
    <h1>{{ __('Tous les articles') }}</h1>
    <table class="table  table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th class="hidden md:block">Publication date</th>
            @auth
                <th>Modifier</th>
                <th>Supprimer</th>
            @endauth
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td><a href="/articles/{{ $article->id }}"> {{ $article->title }}</a></td>
                <td class="hidden md:block">{{ $article->published_at }}</td>
                @auth
                    <td><a href="/articles/{{ $article->id }}/edit" class="btn btn-primary">Modifier</a></td>
                    <td>
                        <form action="/articles/{{ $article->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="bg-red-500 hover:bg-red-600 px-6 py-4 m-2 rounded-lg hover:cursor-pointer shadow-xl">
                                Supprimer
                            </button>
                        </form>
                    </td>
                @endauth
            </tr>
        @endforeach
    </table>
@endsection
