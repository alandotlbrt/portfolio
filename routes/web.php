<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/projects', function () {
    return view("projects");
});


Route::get('/me', function() {
    return view("me");
});