<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/teste', function () {
//     return view('teste');
// });

Route::get('/', 'App\Http\Controllers\HomeController');
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
    Route::get('/', 'App\Http\Controllers\ConfigController@index');
    Route::post('/', 'App\Http\Controllers\ConfigController@index');
    Route::get('/info', 'App\Http\Controllers\ConfigController@info');
    Route::get('/permissoes', 'App\Http\Controllers\ConfigController@permissoes');
});


// 404 NOTFOUND (página não encontrada)
Route::fallback(function () {
    echo "Página não encontrada!";
});
