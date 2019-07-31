<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});
