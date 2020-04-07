@extends('layout')

@section('head')

@endsection

@section('content')
    <div>
        <form method="POST" action="{{ route('article.index') }}" class="flex-col">
            @csrf
            <div class="flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="name" value="{{old('title')}}">
                @error('title')
                <p style="color:red">{{ $errors->first('title') }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="excerpt">Preview Text</label>
                <input type="text" name="excerpt" id="excerpt" value="{{old('excerpt')}}">
                @error('excerpt')
                <p style="color:red">{{ $errors->first('excerpt') }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="body">Text</label>
                <textarea name="body" id="body">{{old('body')}}</textarea>
                @error('body')
                <p style="color:red">{{ $errors->first('body') }}</p>
                @enderror
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
