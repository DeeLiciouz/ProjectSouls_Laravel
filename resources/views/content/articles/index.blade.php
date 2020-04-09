@extends('layouts.app')

@section('content')
    <h1>Overview</h1>
    @forelse($articles as $article)
        <div>
            <a href="/news/{{$article->id}}" class="h2">{{ $article->title ?? '' }}</a>
            <p>{{ $article->body ?? ''}}</p>
        </div>
    @empty
        <p>No relevant articles yet.</p>
    @endforelse
@endsection
