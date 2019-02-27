<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <!-- CSRF Token -->
                <meta content="{{ csrf_token() }}" name="csrf-token">
                    <title>
                        {{ config('app.name', '') }}
                    </title>
                    <!-- Scripts -->
                    <script defer="" src="{{ asset('js/app.js') }}">
                    </script>
                    <!-- Fonts -->
                    <link href="//fonts.gstatic.com" rel="dns-prefetch">
                        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
                            <!-- Styles -->
                            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">Inicio
                    </a>
                    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                  @if(Auth::user())
                    <li class="nav-item dropdown">
                        <a aria-haspopup="true" class="nav-link" href="{{ route('users.index') }}">
                            Usuarios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">
                            Categorias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a aria-disabled="true" class="nav-link disabled" href="#" tabindex="-1">
                            Artículos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a aria-disabled="true" class="nav-link disabled" href="#" tabindex="-1">
                            Imagenes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tags.index')}}" tabindex="-1">
                            Tags
                        </a>
                    </li>
                  @endif
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.auth.login') }}">
                                    {{ __('Login') }}
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.auth.register') }}">
                                    {{ __('Register') }}
                                </a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" v-pre="">
                                    {{ Auth::user()->name }}
                                    <span class="caret">
                                    </span>
                                </a>
                                <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('admin.auth.logout') }}">
                                        {{ __('Salir') }}
                                    </a>
                                    <form action="{{ route('admin.auth.logout') }}" id="logout-form" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
</html>
