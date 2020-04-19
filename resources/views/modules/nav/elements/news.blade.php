@canany(['create_article','sort_news'])
  <li class="nav-item dropdown">
    <a id="navbarDropdownNews" class="nav-link dropdown-toggle" href="#" role="button"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ __('News') }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('article.index') }}">
        {{ __('Overview') }}
      </a>
      @can('create_article')
        <a class="dropdown-item" href="{{ route('article.create') }}">
          {{ __('Create a New Article') }}
        </a>
      @endcan
    </div>
  </li>
@else
  <li class="nav-item">
    <a href="{{route('article.index')}}" class="nav-link">News</a>
  </li>
@endcanany