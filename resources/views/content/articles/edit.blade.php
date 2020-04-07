@extends('layout')

@section('head')

@endsection

@section('content')
    <div>
        <form method="POST" action="/news/{{ $article->id }}" class="flex-col">
            @csrf
            @method('PUT')

            <div class="flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="name" value="{{ $article->title }}" required>
            </div>
            <div class="flex-col">
                <label for="excerpt">Preview Text</label>
                <input type="text" name="excerpt" id="excerpt" value="{{ $article->excerpt }}" required>
            </div>
            <div class="flex-col">
                <label for="body">Text</label>
                <textarea name="body" id="body" required>{{ $article->body }}</textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
        <form method="POST" action="/news/{{ $article->id }}" class="flex-col">
            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
