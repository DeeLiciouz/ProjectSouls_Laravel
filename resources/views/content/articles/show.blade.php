@extends('layout')

@section('content')
    <div class="flex-col">
        <h1>{{$article->title}}</h1>
        <p>{{$article->excerpt}}</p>
        <p>{{$article->body}}</p>
    </div>
@endsection
