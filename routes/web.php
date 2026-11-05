<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// New design, in progress — becomes '/' once every section is sliced.
Route::get('/new', function () {
    return view('home');
});
