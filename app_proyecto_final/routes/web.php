<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/reportar_mascota_perdida', function(){
    return view('reportar_mascota_perdida');
});