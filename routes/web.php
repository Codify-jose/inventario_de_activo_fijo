<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('activos/show', function () {
    return view('activos/show');
});
Route::get('activos/create', function () {
    return view('activos/create');
});
Route::get('activos/update', function () {
    return view('activos/update');
});
