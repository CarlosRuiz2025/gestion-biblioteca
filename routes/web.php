<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/css/{file}', function ($file) {
    $path = resource_path('css/' . $file);
    if (file_exists($path)) {
        return Response::file($path, ['Content-Type' => 'text/css']);
    }
    abort(404, 'Archivo no encontrado');
});

Route::get('/', function () {
    return view('welcome');
});
