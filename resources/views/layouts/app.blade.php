<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'read.in') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>    

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style_dashboard.css') }}">

</head>
<body>    
    <div id="app">
        <nav class="navbar navbar-expand-lg p-4 bg-white">
            <div class="container-fluid">
                <a href="{{ url('/home') }}" class="navbar-brand text-dark" id="logo">{{ config('app.name', 'read.in') }}</a>
                <div class="collapse navbar-collapse">
                    <form action="/home" class="d-flex mx-5" method="GET" role="search">
                        @csrf
                        <input type="text" class="form-control me-2" placeholder="Search..." aria-label="Search" id="input-search" name="search" value="{{ request()->query('search') }}">
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button type="button" id="btn-add" class="mx-2" onclick="document.getElementById('form-add').style.display = 'block';">Add book</button>
                        </li>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
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
        <div class="container-fluid form-hidden" id="form-add">
            <form action="/store" class="shadow" method="POST">
                @csrf
                <h3>Add your reading.</h3>
                <p class="subtitle mb-4">Fill this form below</p>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control mt-2" name="title" placeholder="Harry Potter and The Deathly Hollows I">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control mt-2" name="author" placeholder="J.K Rowling">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image URL</label>
                    <input type="text" class="form-control mt-2" name="image" placeholder="https://google.com/image.png">
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control mt-2" name="year" placeholder="2009">
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control mt-2" name="description" placeholder="Harry Potter 7th novel">
                </div>
                <div class="mb-4">
                    <label for="page" class="form-label">Last read</label>
                    <input type="text" class="form-control mt-2" name="page" placeholder="37">
                </div>
                <div class="mb-4">
                    <input type="hidden" name="iscompleted" value="false">
                    <input type="checkbox" name="iscompleted" value="true" class="form-check-input">
                    <label for="iscompleted" class="form-check-label">Mark as completed</label>
                </div>
                <div class="d-flex float-end" id="buttons-form">
                    <button type="button" class="form-control text-center mx-2" id="btn-close" onclick="document.getElementById('form-add').style.display = 'none';">Close</button>
                    <button type="submit" class="form-control" id="btn-submit">Add</button>
                </div>
            </form>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>

