@extends('layouts.app')

@section('head')

@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header font-weight-bold">{{ __('New Article') }}</div>

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
                         value="{{ old('title') }}"
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
                         value="{{ old('excerpt') }}"
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
                                              required>{{old('body')}}</textarea>

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
