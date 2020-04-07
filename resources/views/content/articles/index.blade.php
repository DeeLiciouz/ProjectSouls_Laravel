@extends('layout')

@section('content')
    <div class="flex-col">
        <h1>Overview</h1>
        @foreach($articles as $article)
            <div>
                <h2><a href="/news/{{$article->id}}">{{ $article->title ?? '' }}</a></h2>
                <p>{{ $article->body ?? ''}}</p>
            </div>
        @endforeach
    </div>
@endsection
