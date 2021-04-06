<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- extra-js -->
@yield('extra-js')

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('image/jazz1.jpg')}}" width="50px" class="pr-3" style="border-right: solid 1px #333;">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="right: 15px;">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href={{url('/')}}> Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{url('topics')}}">Forum</a>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                           categories
                        </a>

                            <div class="dropdown-menu" aria-labelledby="navbardrop">
                                <?php $categories=DB::table('categories')->get(); ?>
                                @foreach($categories as $category)
                                    <a class="dropdown-item" href="{{url('category/sort',$category->id)}}">{{ucwords($category->name)}}</a>
                                @endforeach
                            </div>


                    </li>
<li>
                    <a class="nav-item nav-link" href="{{ route('contact') }}">Nous contacter</a>
</li>
<li>
                    <a class="nav-item nav-link" href="{{ url('admin') }}">Admin</a>
</li>
                </div>
            </div>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{route('topics.create')}}" class="dropdown-item">Créer un topic</a>
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
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center ">
        <h2 style=" padding-left: 0px ;" > Vous pouvez nous retrouver sur : <img src="{{asset('image/facebook.jpg')}}" width="100px" class="pr-3" style="border-right: solid 1px #333;"> </h2>
    </div>
</div>


</body>
</html>
