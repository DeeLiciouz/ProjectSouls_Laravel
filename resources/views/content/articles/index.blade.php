@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="border-bottom ps-text-green">Overview</h1>
        <div class="row-cols-md-3">
            @forelse($articles as $article)
                <div class="col-12">
                    <div class="card mx-2">
                        <div class="card-header">
                            <a href="/news/{{$article->id}}" class="h3 ps-article-link">{{ $article->title ?? '' }}</a>
                        </div>
                        <div class="card-body">
                            <p class="text-white">{{ $article->excerpt ?? '' }}</p>
                            <p class="text-white">{{ $article->body ?? ''}}</p>
                            <a href="{{ $article->getPath() }}/edit" class=" btn ps-btn float-right">Edit</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No relevant articles yet.</p>
            @endforelse
        </div>
    </div>
@endsection
