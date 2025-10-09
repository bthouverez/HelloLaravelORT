<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Créer un article</title>
</head>
<body>
<h1>Créer un article</h1>
<form action="/articles" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Titre"><br><br>
    <input type="text" name="picture" placeholder="Image"><br><br>
    <textarea name="content">

    </textarea><br><br>
    <button name="btnCreate" type="submit">Créer</button>
</form>

</body>
</html>
