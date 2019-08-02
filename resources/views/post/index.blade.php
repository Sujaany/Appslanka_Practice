@extends('layouts.app')

@section('title', 'our Blog')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Our Blog</h1>
	<p class="lead">Learn with Us!!!</p>
	{{-- {{dd($posts)}} --}}
  </div>
</div>
@endsection

@section('footer')
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">All right reserved @invictaInnovation</a>
</nav>
@endsection