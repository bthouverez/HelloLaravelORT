<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tous les articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/articles">Tous les articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/articles/create">Créer un article</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<h1>Tous les articles</h1>
<table class="table  table-striped">
    <tr>
        <th>Id <div class="spinner-border text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div></th>
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
            <td><a href="/articles/{{ $article->id }}/edit" class="btn btn-primary">Modifier</a></td>
            <td><form action="/articles/{{ $article->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Supprimer</button>
                </form></td>
        </tr>
    @endforeach
</table>


</body>
</html>
