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
Route::get('/noticia/{slug}/comentario/{id}', function ($slug, $id) {
    echo "Slug: " . $slug . "<br>";
    echo "Comentario: " . $id;
});
Route::get('/user/{id}', function ($id) {
    echo "Usuario ID: " . $id;
});
Route::get('/user/{name}', function ($name) {
    echo "Usuario nome: " . $name;
})->where('name', '[a-z]+');


// GRUPO
Route::prefix('/config')->group(function () {
    Route::get('/', function () {
        return view('config');
    });

    Route::get('/info', function () {
        echo "Configurações INFO.";
    })->name('info');

    Route::get('/permissoes', function () {
        echo "Configurações PERMISSÕES.";
    })->name('permissoes');
});


// 404 NOTFOUND (página não encontrada)
Route::fallback(function () {
    echo "Página não encontrada!";
});
