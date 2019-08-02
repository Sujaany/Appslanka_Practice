@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to {{$name}} </h1>
    <p class="lead">{{$tagline}}</p>
    
    @if ( $hour <12 ) 
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Hi, Good Morning!!!</h4>
      </div>
} @else <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Hi, Good Day!!!</h4>
    </div>

@endif
 

  </div>
</div>


<div class="card-deck">
  <div class="card">
    <img class="card-image-top" height ="230px" src="https://strategypeak.com/wp-content/uploads/2015/05/smart-phone-apps-e1431787301463.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mobile Application Dev</h5>
      <p class="card-text">We make android, ios, windows and cross platform apps using latest trends</p>  
    </div>
  </div>
  
  <div class="card">
    <img class="card-image-top" height ="230px" src="https://www.theafronews.com/wp-content/uploads/2014/04/Technology.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Web Application Dev</h5>
      <p class="card-text">We are specialized in web application using Laraval,Angular,Vue.js etc</p> 
    </div>
  </div>
  
  <div class="card">
    <img class="card-image-top" height ="230px" src="http://www.ncubetechnology.com/wp-content/uploads/2015/07/seo-plus-web-development.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SEO and Dev</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> 
    </div>
  </div>
</div>

@endsection