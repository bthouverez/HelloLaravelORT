<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tous les articles</title>
</head>
<body>
<h1>Tous les articles</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Publication date</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    @foreach($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td><a href="/articles/{{ $article->id }}"> {{ $article->title }}</a></td>
            <td>{{ $article->published_at }}</td>
            <td><a href="/articles/{{ $article->id }}/edit">Modifier</a></td>
            <td><form action="/articles/{{ $article->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Supprimer</button>
                </form></td>
        </tr>
    @endforeach
</table>

</body>
</html>
