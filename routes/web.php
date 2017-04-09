<?php

// ALUMNOS
Route::get('/alumnos', 'AlumnosController@index');

Route::get('/alumnos/create', 'AlumnosController@create');

Route::post('/alumnos', 'AlumnosController@store');

Route::get('/alumnos/{alumno}', 'AlumnosController@show');

// MAESTROS
Route::get('/maestros', 'MaestrosController@index');

Route::get('/maestros/create', 'MaestrosController@create');

Route::post('/maestros', 'MaestrosController@store');
