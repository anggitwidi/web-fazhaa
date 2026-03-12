<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home'); 
});

Route::get('/mobil', function () {
    return view('pages.mobil');
});