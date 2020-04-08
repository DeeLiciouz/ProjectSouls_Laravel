@extends('layout')

@section('content')
    <div class="flex-col">
        <h1>{{$article->title}}</h1>
        <p>{{$article->excerpt}}</p>
        <p>{{$article->body}}</p>
        <p style="margin-top: 1em">
            @foreach ($article->tags as $tag)
                <a href="{{route('article.index',['tag' => $tag->name])}}">{{$tag->name}}</a>
            @endforeach
        </p>
    </div>
@endsection
