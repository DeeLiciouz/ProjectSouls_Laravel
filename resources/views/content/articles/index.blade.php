@extends('layouts.app')

@section('content')
    <div class="row flex-column mx-3">
        <h1 class="border-bottom">Overview</h1>
        <div class="row m-2">
            @forelse($articles as $article)
                <div class="card mx-2" style="max-width: 25%;">
                    <div class="card-header">
                        <a href="/news/{{$article->id}}" class="">{{ $article->title ?? '' }}</a>
                    </div>
                    <div class="card-body">
                        <p>{{ $article->excerpt ?? '' }}</p>
                        <p>{{ $article->body ?? ''}}</p>
                        <a href="{{ $article->getPath() }}/edit" class="btn-link float-right">Edit</a>
                    </div>
                </div>
            @empty
                <p>No relevant articles yet.</p>
            @endforelse
        </div>
    </div>
@endsection
