@extends('layouts.app')

@section('headscripts')

@endsection

@section('content')
  <div class="container">
    <h1 class="border-bottom ps-text-green">Admin-Panel</h1>
    <div class="row">
        <div class="col-md-4 p-2">
          <div class="card mx-1">
            <div class="card-header">
              <a href="" class="h3 ps-card-link">{{ __('Users') }}</a>
            </div>
            <div class="card-body">
              <p class="text-white">{{ $article->excerpt ?? '' }}</p>
              <p class="text-white">{{ $article->body ?? ''}}</p>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection