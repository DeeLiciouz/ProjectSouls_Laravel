<nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        @include('modules.nav.elements.news')
        @include('modules.nav.elements.game')
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @include('modules.nav.elements.authentication')
      </ul>
    </div>
  </div>
</nav>
