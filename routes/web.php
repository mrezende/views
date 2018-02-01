<?php


// requisicao GET
// o usuário digita / na barra do navegador
Route::get('/', function(){
  // view -> é uma página
  // página deve ser criada
  // na pasta resources/views
  $nome = "Anita";
  // compact('nome') -> ['nome' => $nome];
  return view('ola', compact('nome'));
});

Route::get('/cursos', 'CursosController@index');

// /cursos/1 -> $x = 1
// /cursos/2 -> $x = 2
Route::get('/cursos/{posicao}', 'CursosController@show');
