<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un seul article : {{ $article->id }}</title>
</head>
<body>
<h1>Un seul article : {{ $article->id }}</h1>
<p>Titre : {{ $article->title }}</p>
<p>Date publication : {{ $article->published_at }}</p>
<p>Contenu : {{ $article->content }}</p>
<p>Image : {{ $article->picture }}</p>
<p>Date création : {{ $article->created_at }}</p>
<p>Date de mise à jour : {{ $article->updated_at }}</p>

</body>
</html>
