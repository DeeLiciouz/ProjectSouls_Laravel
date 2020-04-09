@extends('layouts.app')

@section('head')

@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Article') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ $article->getPath() }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">
                                {{ __('Title') }}
                            </label>

                            <div class="col-md-6">
                                <input id="title"
                                       type="text"
                                       class="form-control @error('title') is-invalid @enderror"
                                       name="title"
                                       value="{{ $article->title }}"
                                       required
                                       autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="excerpt" class="col-md-4 col-form-label text-md-right">
                                {{ __('Excerpt') }}
                            </label>

                            <div class="col-md-6">
                                <input id="excerpt"
                                       type="text"
                                       class="form-control @error('excerpt') is-invalid @enderror"
                                       name="excerpt"
                                       value="{{ $article->excerpt }}"
                                       required>

                                @error('excerpt')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">
                                {{ __('Text') }}
                            </label>

                            <div class="col-md-6">
                                    <textarea name="body"
                                              id="body"
                                              class="form-control @error('excerpt') is-invalid @enderror"
                                              required>{{ $article->body }}</textarea>

                                @error('body')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tags" class="col-md-4 col-form-label text-md-right">
                                {{ __('Tags') }}
                            </label>

                            <div class="col-md-6">
                                <select name="tags[]" id="tags" class="form-control" multiple>
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>

                                @error('tags')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-danger" href="{{ $article->getPath() }}"
                                   onclick="event.preventDefault();
                                        document.getElementById('delete-form').submit();">
                                    {{ __('Delete') }}
                                </a>
                            </div>
                        </div>
                    </form>
                    <form id='delete-form' method="POST" action="{{ $article->getPath() }}" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
