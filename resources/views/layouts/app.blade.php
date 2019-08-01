<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Invicta Innovation -@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body >        
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/portfolio">Portfolio</a>
              </li> 
              <li class="nav-item">
                  <a class="nav-link" href="/career">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/teams">Our Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                      </li>
            </ul>
            <span class="navbar-text">
                Mail us: invictaInnovation.lk
            </span>
          </div>
</nav>

<div class="container" "mt-4">
            @yield('content')
        </div>
        
        <nav class="container navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">All right reserved @invictaInnovation software sollution</a>
</nav>
    </body>
</html>
