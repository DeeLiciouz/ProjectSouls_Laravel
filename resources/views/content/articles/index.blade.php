@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="border-bottom ps-text-green">Overview</h1>
    <div class="row">
      @forelse($articles as $article)
        <div class="col-md-4 p-2">
          <div class="card mx-1">
            <div class="card-header">
              <a href="/news/{{$article->id}}" class="h3 ps-article-link">{{ $article->title ?? '' }}</a>
            </div>
            <div class="card-body">
              <p class="text-white">{{ $article->excerpt ?? '' }}</p>
              <p class="text-white">{{ $article->body ?? ''}}</p>
            </div>
          </div>
        </div>
      @empty
        <p class="text-black-50">No relevant articles yet.</p>
      @endforelse
    </div>
  </div>
@endsection
