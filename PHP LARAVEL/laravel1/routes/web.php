<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/teste', function () {
//     return view('teste');
// });

Route::view('/', 'welcome');
Route::view('/teste', 'teste');

// ROTA DINAMICA PASSADA PELA URL
Route::get('/noticia/{slug}', function ($slug) {
    echo "Slug: " . $slug;
});

Route::get('/noticia/{slug}/comentario/{comentario}', function ($slug, $comentario) {
    echo "Slug: ".$slug."<br>";
    echo "Comentario: ".$comentario;
});
