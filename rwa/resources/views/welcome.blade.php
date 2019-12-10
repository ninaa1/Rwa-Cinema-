<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <ul>
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item">
            <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        <li><a href="{{route('admin.index')}}">Admin</a></li>
    @endguest

    <li><a href="#about">O nama</a></li>
    <li><a href="#prise">Cijene</a></li>
    <li><a href="#movie">Filmovi</a></li>
    <li><a href="#">Vizija</a></li>
    <li><a class="active"  href="#home">Početna</a></li>

  </ul>


<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Rezervirajte svoje mjesto na vrijeme</h1>
    <form>
 </form>
   
  </div>
</div>

<div id="footer">
 
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
