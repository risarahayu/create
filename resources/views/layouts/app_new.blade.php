<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    

    <style>
        .btn-background{
        background: #BD1A8D;
        color:white;
       
    }
    .page-item.active .page-link{
        background-color: #BD1A8D;
        border-color: white;
    }
    .pagination > li > a,
    .pagination > li > span {
        color: #BD1A8D; // use your own color here
    }
    .page-link:hover {
        background-color: #BD1A8D;
        color:white;
    }
   

    .pagination > .active > a,
    .pagination > .active > a:focus,
    .pagination > .active > a:hover,
    .pagination > .active > span,
    .pagination > .active > span:focus,
    .pagination > .active > span:hover {
        background-color: #BD1A8D;
        border-color: #BD1A8D;
    }
        </style>

   
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color: #BD1A8D;" >
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="{{asset('storage/logo/MP_Logo AW Official-03 1_small.svg')}}" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="color:white;" >
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color:white;"  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                        <a class=" nav-link"  href=# style="color:white;">
                                <div class="row align-items-center ">
                                    <div class="col-md-4 col-sm-1 col-2">
                                         <img src="{{asset('storage/logo/material-symbols_add-circle-outline-rounded.svg')}}" alt="" style="width:30px;" >
                                    </div>
                                    <div class="col-8  text-start pl-1">
                                         Add news
                                    </div>
                                </div>
                                    
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" nav-link"  href=# style="color:white;">
                                <div class="row align-items-center ">
                                    <div class="col-md-4 col-sm-1 col-2">
                                         <img src="{{asset('storage/logo/material-symbols_format-list-bulleted.svg')}}" alt=""  style="width:30px;" >
                                    </div>
                                    <div class="col-8  text-start pl-1">
                                         View List
                                    </div>
                                </div>
                                    
                                </a>
                            </li>
                            <div class="row align-items-center ">
                                    <div class="col-md-4 col-sm-1 col-2">
                                         <img src="{{asset('storage/logo/Vector.svg')}}" alt=""  style="width:30px;" >
                                    </div>
                            <div class="col-8  pl-1">
                            <li class="nav-item dropdown" >
                                <a id="navbarDropdown" style="color:white;"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row justify-content-center mt-5">
            @yield('row')
        </div>
    </div>
</body>
</html>