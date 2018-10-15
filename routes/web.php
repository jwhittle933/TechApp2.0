<?php

Route::get('/', 'IndexController@index');

Route::get('/reportform', 'ReportFormController@index');
Route::post('/reportform', 'ReportFormController@submit');

Route::get('/login', 'LoginController@index');

Route::get('/requestmanager', 'RequestsController@index');
Route::get('/requestmanager/{request}', 'RequestsController@show');
Route::patch('/requestmanager', 'RequestsController@update');
Route::delete('/requestmanager', 'RequestsController@destroy');
Route::post('/requestmanager', 'RequestsController@store');


