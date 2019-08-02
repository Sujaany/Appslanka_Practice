<?php

// Route::get('/', function () {
//     return view('pages.home',['name'=>'apps Lanka software solutions',
//     'tagline'=>'Let us Make some innovative applications']);
// });

// Route::get('/contact', function () {
//     return view('pages.contact');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/portfolio','PageController@portfolio');
Route::get('/career','PageController@career');
Route::get('/gallery','PageController@gallery');
Route::get('/contact', 'PageController@contact');
Route::get('/teams','PageController@teams');
Route::get('/blog','PageController@blog');

Route::get('/posts','PostController@index');
