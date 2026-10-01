<?php

use Illuminate\Support\Facades\Route;
use Laravel\Mcp\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Formulario-horoscopo', function () {
    return view('Formulario');
});

Route::post('/resibe-formulario', function (Request $request) {
    return $request->all();
    
});

