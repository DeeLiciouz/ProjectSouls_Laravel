@extends('layout')

@section('head')

@endsection

@section('content')
    <div>
        <form method="POST" action="{{ route('article.index') }}" class="flex-col">
            @csrf
            <div class="flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{old('title')}}">
                @error('title')
                <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="excerpt">Preview Text</label>
                <input type="text" name="excerpt" id="excerpt" value="{{old('excerpt')}}">
                @error('excerpt')
                <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="body">Text</label>
                <textarea name="body" id="body">{{old('body')}}</textarea>
                @error('body')
                <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="tags">Tags</label>
                <select name="tags[]" id="tags" multiple>
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                @error('tags')
                <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
