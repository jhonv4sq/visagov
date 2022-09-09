<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-sm navbar-light bg-light text-capitalize shadow-sm">
            <div class="container">
              <a class="navbar-brand" href="{{ route('home') }}">visago</a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link {{ (request()->is(['en/books','es/books'])) ? 'active' : ''}}"  href="{{ route('books.index') }}">{{ __('books') }}</a></li>
                  <li class="nav-item"><a class="nav-link {{ (request()->is(['en/contact','es/contact'])) ? 'active' : ''}}" href="{{ route('contact') }}">{{ __('contact') }}</a></li>
                        
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('language') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en') }}">english</a></li>
                      <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('es') }}">español</a></li>
                        {{-- @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                          <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                              {{ $properties['native'] }}
                          </a>
                        </li>
                        @endforeach --}}
                    </ul>
                  </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                  @guest
                  <li class="nav-item">
                      <a class="nav-link {{ (request()->is(['en/login','es/login'])) ? 'active' : ''}}" href="{{ route('login') }}">{{ __('login') }}</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ (request()->is(['en/register','es/register'])) ? 'active' : ''}}" href="{{ route('register') }}">{{ __('register') }}</a>
                  </li>
                  @endguest
                  @auth
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                  </li>
                  @endauth
                </ul>
              </div>


            </div>
          </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
