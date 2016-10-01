<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// aka annon function

Route::get('/', function () {
    $people = ["Tom", "Kitty", "Morris"];
    return view('welcome', compact('people'));
});

/* About Page */
Route::get('about', function() {
    return view('pages.about');
});
