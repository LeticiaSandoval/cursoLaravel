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
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </meta>
            </meta>
        </meta>
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <a class="nav-link" href="{{ route('articles.index') }}">
                            Artículos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.images.index') }}">
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
