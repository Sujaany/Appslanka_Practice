<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apps Lanka</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content container pt-3">
            <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hello AppsLanka!!!</h1>
    <p class="lead">We offer customer based application !!!</p>
    <hr class="my-4">
    <p>Learning Laraval is always fun !!!</p>
    <div class="links">
    <a href="https://appslanka.lk">Our Website</a> 
    
    </div>
  </div>
</div>
</div>
        
        <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="/home">Home</a>
    <a class="nav-link" href="/about">About</a>
    <a class="nav-link" href="/contact">Contact</a>
  </li>
</ul>
    </body>
</html>
