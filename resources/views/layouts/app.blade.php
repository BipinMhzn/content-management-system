<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Content Management System</title>

    {{-- jQuery Scripts --}}
    <script src="{{asset('js/jQuery.min.js')}}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- bootstrap scripts --}}
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>

    {{-- Toastr scripts --}}
    <script src="{{asset('js/toastr.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- bootstrap styles --}}
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">

    {{-- Toastr styles --}}
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Content Management System
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                
                @auth
                <div class="col-lg-4">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <a href="{{route('home')}}" class="btn">
                                Home
                            </a>
                        </li>

                        <li class="list-group-item ">
                            <a href="{{route('category.create')}}" class="btn">
                                Create new Category
                            </a>
                        </li>

                        <li class="list-group-item ">
                            <a href="{{route('categories.index')}}" class="btn">
                                All Categories
                            </a>
                        </li>

                        <li class="list-group-item ">
                            <a href="{{route('tag.create')}}" class="btn">
                                Create a Tag
                            </a>
                        </li>

                        <li class="list-group-item ">
                            <a href="{{route('tags.index')}}" class="btn">
                                All Tags
                            </a>
                        </li>

                        <li class="list-group-item ">
                            <a href="{{route('post.create')}}" class="btn">
                                Create new Post
                            </a>
                        </li>
                     
                        <li class="list-group-item ">
                            <a href="{{route('posts.index')}}" class="btn">
                                All Posts
                            </a>
                        </li>   

                        <li class="list-group-item ">
                            <a href="{{route('posts.trashed')}}" class="btn">
                                Trashed Posts
                            </a>
                        </li> 

                       @iF(Auth::user()->admin)
                       <li class="list-group-item ">
                            <a href="{{route('users.index')}}" class="btn">
                                Users
                            </a>
                        </li> 

                        <li class="list-group-item ">
                            <a href="{{route('user.create')}}" class="btn">
                                Create a user
                            </a>
                        </li> 
                       @endif

                       <li class="list-group-item ">
                            <a href="{{route('user.profile')}}" class="btn">
                                My Profile
                            </a>
                        </li>
                        
                        @if(Auth::user()->admin)
                            <li class="list-group-item ">
                                <a href="{{route('settings')}}" class="btn">
                                    Settings
                                </a>
                            </li> 
                        @endif
                    </ul>
                </div>
                @endauth

                <div class="col-lg-8">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif
    </script>

</body>
</html>
