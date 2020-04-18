@extends('layouts.app')

@section('content')
  <div class="container ps-bg-content">

    @can ('update', $article)
      <a href="{{ $article->getPath() }}/edit" class="btn ps-btn m-1 float-right">Edit</a>
    @endcan

    <h1 class="py-5 ps-text-green">{{$article->title}}</h1>
    <p class="text-white">{{$article->excerpt}}</p>
    <p class="text-white">{{$article->body}}</p>
    <div class="row align-items-end flex-column">
      <div class="row flex-nowrap m-0 mb-2 mr-2">
        @foreach ($article->tags as $tag)
          <a href="{{route('article.index',['tag' => $tag->name])}}" class="ps-btn-tag ml-1 px-1">{{$tag->name}}</a>
        @endforeach
      </div>
    </div>
  </div>
@endsection
