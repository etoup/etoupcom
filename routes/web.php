<?php

Route::get('/', function () {
    return view('html.welcome');
})->name('home');
Route::get('/about', function () {
    return view('html.about');
})->name('about');
Route::get('/contact', function () {
    return view('html.contact');
})->name('contact');