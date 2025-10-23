@extends('neural-glass')

@section('title', 'Créer un article')

@section('main')
    <h1>Créer un article</h1>
    <div class="contact-form glass">
        <form action="/articles" method="POST">
            @csrf
            <div class="form-group">
                <input @error('title') style="border-color: red" @enderror type="text" name="title" placeholder="Titre"
                       value="{{ old('title') }}"><br>
                @error('title')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" name="picture" placeholder="Image" value="{{ old('picture') }}"><br><br>
            </div>

            <div class="form-group">
            <textarea @error('content') style="border-color: red"
                      @enderror name="content">{{ old('content') }}</textarea><br>
                @error('content')
                <p style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <button name="btnCreate" type="submit" class="submit-btn">Créer</button>
        </form>
    </div>
@endsection


