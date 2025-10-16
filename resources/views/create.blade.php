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
    <input @error('title') style="border-color: red" @enderror type="text" name="title" placeholder="Titre" value="{{ old('title') }}"><br>
    @error('title')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <br><br>
    <input type="text" name="picture" placeholder="Image" value="{{ old('picture') }}"><br><br>
    <textarea @error('content') style="border-color: red" @enderror name="content">{{ old('content') }}</textarea><br>
    @error('content')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <br><br>
    <button name="btnCreate" type="submit">Créer</button>
</form>

</body>
</html>
