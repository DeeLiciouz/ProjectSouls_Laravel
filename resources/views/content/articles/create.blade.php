@extends('layout')

@section('head')

@endsection

@section('content')
    <div>
        <form method="POST" action="/news" class="flex-col">
            @csrf
            <div class="flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="name" required>
                @if($errors->first('title'))
                    <p style="color:red">{{ $errors->first('title') }}</p>
                @endif
            </div>
            <div class="flex-col">
                <label for="excerpt">Preview Text</label>
                <input type="text" name="excerpt" id="excerpt" required>
                @if($errors->first('title'))
                    <p style="color:red">{{ $errors->first('excerpt') }}</p>
                @endif
            </div>
            <div class="flex-col">
                <label for="body">Text</label>
                <textarea name="body" id="body" required></textarea>
                @if($errors->first('title'))
                    <p style="color:red">{{ $errors->first('body') }}</p>
                @endif
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
