<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<header>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'AutomatedCarLeasingSystem')}}</title>
        <nav>
        
          <div class="navigation">
          <ul>
            <li><a href="#">Home</a></li>
            @guest

            @if (Route::has('login'))
            <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
             </li>
             @endif
             @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
       
              
            @endguest

            @auth
            <li class="nav-item">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
            </a>
            
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            @endauth
             
          </ul>
        </div>
        </nav>
        <link href="css/main.css" rel="stylesheet">
    </head>
  </header>
    <body>
        <h1>{{$title}}</h1>
        <p>{{$info}}</p>
    </body>

    <footer>
      <p> &copy Automated Car Leasing System 2021 Production </p>
    </footer>
</html>
