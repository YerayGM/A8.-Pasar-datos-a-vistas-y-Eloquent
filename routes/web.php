<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/inicio', 'home');

Route::get('/fecha', function () {
    $data = [
        'dia' => date('d'),
        'mes' => date('m'),
        'anho' => date('Y')
    ];
    return view('fecha', $data);
});

Route::get('/fecha-compact', function () {
    $dia = date('d');
    $mes = date('m');
    $anho = date('Y');
    return view('fecha', compact('dia', 'mes', 'anho'));
});

Route::get('/fecha-with', function () {
    $dia = date('d');
    $mes = date('m');
    $anho = date('Y');
    return view('fecha')
    -> with('dia', $dia)
    -> with('mes', $mes)
    -> with('anho',  $anho);
});

