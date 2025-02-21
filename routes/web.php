<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return view('auth.login');
});


Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/contact', function () {
    return view('contact');
});
