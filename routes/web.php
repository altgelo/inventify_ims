<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');  // points to resources/views/login.blade.php
})->name('login');;

Route::get('/register', function () {
    return view('register');  // points to resources/views/register.blade.php
})->name('register');;
