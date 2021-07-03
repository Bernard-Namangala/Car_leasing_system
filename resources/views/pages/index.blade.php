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
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
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
