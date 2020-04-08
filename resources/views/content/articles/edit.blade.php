@extends('layout')

@section('head')

@endsection

@section('content')
    <div>
        <form method="POST" action="{{$article->getPath()}}" class="flex-col">
            @csrf
            @method('PUT')

            <div class="flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $article->title }}" required>
                @error('title')
                <p style="color:red">{{ $errors->first('title') }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="excerpt">Preview Text</label>
                <input type="text" name="excerpt" id="excerpt" value="{{ $article->excerpt }}" required>
                @error('excerpt')
                <p style="color:red">{{ $errors->first('excerpt') }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="body">Text</label>
                <textarea name="body" id="body" required>{{ $article->body }}</textarea>
                @error('body')
                <p style="color:red">{{ $errors->first('body') }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="tags">Text</label>
                <select name="tags[]" id="tags" multiple>
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                @error('body')
                <p style="color:red">{{ $errors->first('body') }}</p>
                @enderror
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
