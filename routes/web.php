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


Route::get('mantenimiento/update', function () {
    return view('mantenimiento/update');
});
Route::get('mantenimiento/show', function () {
    return view('mantenimiento/show');
});
Route::get('mantenimiento/create', function () {
    return view('mantenimiento/create');
});


Route::get('historial_movimiento/create', function () {
    return view('historial_movimiento/create');
});
Route::get('historial_movimiento/show', function () {
    return view('historial_movimiento/show');
});
Route::get('historial_movimiento/update', function () {
    return view('historial_movimiento/update');
});


Route::get('categorias_activos/create', function () {
    return view('categorias_activos/create');
});
Route::get('categorias_activos/show', function () {
    return view('categorias_activos/show');
});
Route::get('categorias_activos/update', function () {
    return view('categorias_activos/update');
});


Route::get('ubicaciones/update', function () {
    return view('ubicaciones/update');
});
Route::get('ubicaciones/create', function () {
    return view('ubicaciones/create');
});
Route::get('ubicaciones/show', function () {
    return view('ubicaciones/show');
});