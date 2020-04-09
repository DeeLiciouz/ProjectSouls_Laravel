@extends('layouts.app')

@section('head')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Article') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('article.index') }}">
                            @csrf

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
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div>
        <form method="POST" action="{{$article->getPath()}}" class="flex-col">
            @csrf
            @method('PUT')

            <div class="flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $article->title }}" required>
                @error('title')
                <p style="color:red">{{ $errors->first('title') }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="excerpt">Preview Text</label>
                <input type="text" name="excerpt" id="excerpt" value="{{ $article->excerpt }}" required>
                @error('excerpt')
                <p style="color:red">{{ $errors->first('excerpt') }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="body">Text</label>
                <textarea name="body" id="body" required>{{ $article->body }}</textarea>
                @error('body')
                <p style="color:red">{{ $errors->first('body') }}</p>
                @enderror
            </div>
            <div class="flex-col">
                <label for="tags">Text</label>
                <select name="tags[]" id="tags" multiple>
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                @error('body')
                <p style="color:red">{{ $errors->first('body') }}</p>
                @enderror
            </div>
            <button type="submit">Submit</button>
        </form>
        <form method="POST" action="/news/{{ $article->id }}" class="flex-col">
            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
