<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="height: 500px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('../images/background4.jpeg'); background-attachment: fixed; margin-top: 50px;">
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <!-- <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="{{ route('wanafunzi') }}">wanafunzi</a></li>
                            <li><a href="{{ route('waalimu') }}">waalimu</a></li>
                            <li><a href="{{ route('vitabu') }}">vitabu</a></li>
                            <li><a href="{{ route('kiongozi') }}">Kiongozi cha Mwalimu</a></li>
                            

                        <div class="dropdown navbar-left">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ripoti-zingine
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                
                                <li><a href="{{ route('resources') }}">MiundoMbinu</a></li>
                                <li><a href="{{ route('huduma') }}">Huduma zinazotolewa shuleni</a></li>
                               <!--  <li><a href="{{ route('dodoso') }}">Toa Maoni ya Dodoso</a></li> -->
                               <li><a href="{{ route('tangaza') }}">Tangazo</a></li>
                            </ul>
                        </div>
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->schoolname }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="container">
        <nav class="row">
            @yield('content')
        </nav>
        </nav>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
