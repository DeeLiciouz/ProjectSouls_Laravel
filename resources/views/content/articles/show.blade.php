@extends('layouts.app')

@section('content')
    <div class="">
        <h1>{{$article->title}}</h1>
        <p>{{$article->excerpt}}</p>
        <p>{{$article->body}}</p>
        <p class="mt-3">
            @foreach ($article->tags as $tag)
                <a href="{{route('article.index',['tag' => $tag->name])}}" class="btn-link">{{$tag->name}}</a>
            @endforeach
        </p>
    </div>
@endsection
